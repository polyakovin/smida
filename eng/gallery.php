<?
	include("../blocks/db.php");
	include("blocks/style.php");
?>
<link href="../css/gallery.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Gallery</h1>
			<p>Sorry, but the page is still in development. But basic tools, needed to work in the project SMIDA, are available:</p>
			<a class="file_ico" href="index.php">Publish news!</a>
			<a class="share" href="workspace.php?id_comp=<?=$_SESSION['id_comp']?>">Share files!</a>
			<a class="user" href="users.php">Invite new members to this project!</a>
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
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>
