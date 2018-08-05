<?
	include("../blocks/db.php");
	include("blocks/style.php");
?>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Administration</h1>
			<a class="backup" href="../backups_db/backup_en.php">Create a backup</a>
			<p>Site visitors statistics:</p>
			
			<!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=25107884&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/25107884/3_0_F9FFFFFF_D9DFE6FF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:25107884,lang:'ru'});return false}catch(e){}"/></a><!-- /Yandex.Metrika informer -->
			
			<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter25107884 = new Ya.Metrika({id:25107884, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/25107884" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>