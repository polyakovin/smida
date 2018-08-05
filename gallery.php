<?
	include("blocks/db.php");
	include("blocks/style.php");
?>
<link href="css/gallery.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Фотогалерея</h1>
			<p>Извините, но данная страница пока находится в разработке. Но для Вас уже доступны основные инструменты, необходимые для работы в проекте SMIDA:</p>
			<a class="file_ico" href="index.php">Публикуте новости!</a>
			<a class="share" href="workspace.php?id_comp=<?=$_SESSION['id_comp']?>">Делитесь файлами!</a>
			<a class="user" href="users.php">Приглашайте новых участников в проект!</a>
			<!--<ul class="gallery">
			<li><a>SMIDA WORKSHOP. UNIS, Longyearbyen. 19-21 October 2012</a></li>
			<li><a>Sea currents/tidal investigations and CTD profiling, Oct.2012 Longyearbyen.</a></li>
			<li><a>Russian students at UNIS, Autumn 2012</a></li>
			<li><a>Summer expedition in North-West Russia. July 2012</a></li>
			<li><a>Kick-off meeting. St. Petersburg, Moscow. May 2012</a></li>
			<li><a>Survey on Lance, April 2012</a></li>
			</ul>-->
		</div>
		<?
			include("blocks/footer.php")
		?>
	</div>
</body>
</html>
