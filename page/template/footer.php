<footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-end">
                    <p>2024 &copy; WEB - Klasifikasi C4.5</p>
                </div>
                <div class="float-start">
                    <p>CREATED<span class="text-danger"><i class="bi bi-flower3"></i></span> by <a
                            href="">@RF.dilaaa</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="../../assets/assets/js/bootstrap.js"></script>
<script src="../../assets/assets/js/app.js"></script>
<script src="../../assets/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="../../assets/assets/js/pages/simple-datatables.js"></script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

<!-- Need: Apexcharts -->
<script src="../../assets/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="../../assets/assets/js/pages/dashboard.js"></script>

</body>

</html>