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
			<h1>Scientific projects</h1>
			<p>Sorry, but the page is still in development. But basic tools, needed to work in the project SMIDA, are available:</p>
			<a class="file_ico" href="index.php">Publish news!</a>
			<a class="share" href="workspace.php?id_comp=<?=$_SESSION['id_comp']?>">Share files!</a>
			<a class="user" href="users.php">Invite new members to this project!</a>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>