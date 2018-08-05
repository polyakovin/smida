<?
	include("blocks/db.php");
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
			<h1>Загружаемые материалы</h1>
			<p>Для открытия книг рекомендуем пользоваться следующими программами:</p>
			<a class="pdf" href="http://www.foxitsoftware.com/downloads/">Fixit Reader (PDF)</a>
			<a class="djvu" href="http://www.skan.ru/software/n1041_djvureader.html">DjVuReader (DjVu)</a>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>