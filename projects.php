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
			<h1>Научные проекты</h1>
			<p>Извините, но данная страница пока находится в разработке. Но для Вас уже доступны основные инструменты, необходимые для работы в проекте SMIDA:</p>
			<a class="file_ico" href="index.php">Публикуте новости!</a>
			<a class="share" href="workspace.php?id_comp=<?=$_SESSION['id_comp']?>">Делитесь файлами!</a>
			<a class="user" href="users.php">Приглашайте новых участников в проект!</a>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>