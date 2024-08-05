<?php
include '../datatrain1/index.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['upload'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $uploadedFile = $_FILES['file']['tmp_name'];
        $destination = 'uploads/' . $_FILES['file']['name'];
        
        if (move_uploaded_file($uploadedFile, $destination)) {
            echo "File uploaded successfully.";
        } else {
            echo "File upload failed.";
        }
    }
}

if (isset($_POST['process'])) {
    $filePath = 'uploads/' . $_FILES['file']['name'];
    if (file_exists($filePath)) {
        $data = readCSV($filePath);
        $target = 'BB/TB';
        $tree = generateDecisionTree($data, $target);
        $outputPath = 'c45_classification.xlsx';
        saveToExcel($data, $tree, $outputPath);

        echo "Classification and decision tree saved to $outputPath\n";
    } else {
        echo "File not found.";
    }
}

function readCSV($filePath) {
    $data = [];
    if (($handle = fopen($filePath, "r")) !== FALSE) {
        $header = fgetcsv($handle, 1000, ",");
        while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}

function entropy($targetCol) {
    $values = array_count_values($targetCol);
    $entropy = 0;
    $total = count($targetCol);
    foreach ($values as $count) {
        $prob = $count / $total;
        $entropy -= $prob * log($prob, 2);
    }
    return $entropy;
}

function attributeEntropy($data, $attribute, $target) {
    $values = array_unique(array_column($data, $attribute));
    $weightedEntropy = 0;
    foreach ($values as $value) {
        $subset = array_filter($data, function($row) use ($attribute, $value) {
            return $row[$attribute] == $value;
        });
        $subsetTarget = array_column($subset, $target);
        $weightedEntropy += (count($subset) / count($data)) * entropy($subsetTarget);
    }
    return $weightedEntropy;
}

function informationGain($data, $attribute, $target) {
    return entropy(array_column($data, $target)) - attributeEntropy($data, $attribute, $target);
}

function generateDecisionTree($data, $target) {
    $attributes = array_keys($data[0]);
    unset($attributes[array_search($target, $attributes)]);
    
    $gains = [];
    foreach ($attributes as $attribute) {
        $gains[$attribute] = informationGain($data, $attribute, $target);
    }
    
    arsort($gains);
    $bestAttribute = key($gains);
    
    $tree = [$bestAttribute => []];
    $values = array_unique(array_column($data, $bestAttribute));
    foreach ($values as $value) {
        $subset = array_filter($data, function($row) use ($bestAttribute, $value) {
            return $row[$bestAttribute] == $value;
        });
        $subsetTarget = array_unique(array_column($subset, $target));
        if (count($subsetTarget) == 1) {
            $tree[$bestAttribute][$value] = array_shift($subsetTarget);
        } else {
            $tree[$bestAttribute][$value] = generateDecisionTree($subset, $target);
        }
    }
    
    return $tree;
}

function saveToExcel($data, $tree, $outputPath) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('Data and Decision Tree');
    
    // Write data to sheet
    $rowNum = 1;
    $sheet->fromArray(array_keys($data[0]), NULL, 'A' . $rowNum);
    foreach ($data as $row) {
        $rowNum++;
        $sheet->fromArray(array_values($row), NULL, 'A' . $rowNum);
    }
    
    // Write decision tree logic to sheet
    $rowNum += 2;
    $sheet->setCellValue('A' . $rowNum, 'Decision Tree Logic:');
    $rowNum++;
    writeTreeToSheet($sheet, $tree, 'A', $rowNum);
    
    // Save to Excel file
    $writer = new Xlsx($spreadsheet);
    $writer->save($outputPath);
}

function writeTreeToSheet($sheet, $tree, $col, &$row) {
    foreach ($tree as $attribute => $values) {
        foreach ($values as $value => $result) {
            $sheet->setCellValue($col . $row, "$attribute = $value");
            if (is_array($result)) {
                $row++;
                writeTreeToSheet($sheet, $result, chr(ord($col) + 1), $row);
            } else {
                $sheet->setCellValue(chr(ord($col) + 1) . $row, "=> $result");
                $row++;
            }
        }
    }
}
?>
