<?
	include("../blocks/db.php");
	include("blocks/style.php");

	if(isset($_GET['id']))
		$id=$_GET['id'];
?>
<link href="../css/problems.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<?
				if($id==2)
					echo
					'
						<h1>How to move on the sea ice</h1>
						<a class="vehicle_link" href="http://www.arcticant.fi/photogallery/album/arctic-ant-hydrocopter" target="blank">
							<img class="vehicle_img" src="../forpages/problems/hydrocopter.jpg">
						</a>
						<a class="wiki" href="http://en.wikipedia.org/wiki/Hydrocopter" target="blank">Learn about Hydrocopter at Wikipedia.</a>
						<hr>
						
						<a class="vehicle_link" href="http://slon.ru/fast/russia/v-petrozavodske-pochti-vzletel-ekranoplan-980578.xhtml" target="blank">
							<img class="vehicle_img" src="../forpages/problems/ekranoplane.jpg">
						</a>
						<a class="wiki" href="http://en.wikipedia.org/wiki/Ground_effect_vehicle" target="blank">Learn about Ekranoplane at Wikipedia.</a>
						<hr>
						
						<a class="vehicle_link" href="http://geo365.no/forskning/med_luftpute/" target="blank">
							<img class="vehicle_img" src="../forpages/problems/hovercraft.jpg">
						</a>
						<a class="wiki" href="http://en.wikipedia.org/wiki/Hovercraft" target="blank">Learn about Hovercraft at Wikipedia.</a>
						<a class="link" href="http://www.polarhovercraft.no" target="blank">At www.polarhovercraft.no</a>
					';
				else
					echo
					'
						<h1>Safety and last years casualties</h1>
						<a class="folder" id="folder_2">The list of accidents happened for last years</a>
						<div class="subfiles" id="subfiles_2">
							<a class="pdf" href="../forpages/problems/Nordvik_Sept2013_Kara Sea.pdf">Nordvik_Sept2013_Kara Sea</a>
							<a class="pdf" href="../forpages/problems/Baboushka_Sept2013_High Arctic.pdf">Baboushka_Sept2013_High Arctic</a>
							<a class="pdf" href="../forpages/problems/Gryphon_Feb2011_Northern Sea.pdf">Gryphon_Feb2011_Northern Sea</a>
							<a class="pdf" href="../forpages/problems/Explorer_Nov2007_South Ocean.pdf">Explorer_Nov2007_South Ocean</a>
							<a class="pdf" href="../forpages/problems/Maxim Gorky_June1989_Greenland Sea_с.pdf">Maxim Gorky_June1989_Greenland Sea_с</a>
							<a class="pdf" href="../forpages/problems/Nina Sagaydak_Oct1983_Chikchi Sea.pdf">Nina Sagaydak_Oct1983_Chikchi Sea</a>
						</div>
					';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>