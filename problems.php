<?
	include("blocks/db.php");
	include("blocks/style.php");
	if(isset($_GET['id']))
		$id=$_GET['id'];
?>
<link href="css/problems.css" rel="stylesheet" type="text/css"/>
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
						<h1>Как передвигаться по морскому льду</h1>
						<a class="vehicle_link" href="http://www.arcticant.fi/photogallery/album/arctic-ant-hydrocopter" target="blank">
							<img class="vehicle_img" src="forpages/problems/hydrocopter.jpg">
						</a>
						<a class="wiki" href="http://en.wikipedia.org/wiki/Hydrocopter" target="blank">Узнайте о Гидрокоптере в Википедии.</a>
						<hr>
						
						<a class="vehicle_link" href="http://slon.ru/fast/russia/v-petrozavodske-pochti-vzletel-ekranoplan-980578.xhtml" target="blank">
							<img class="vehicle_img" src="forpages/problems/ekranoplane.jpg">
						</a>
						<a class="wiki" href="http://ru.wikipedia.org/wiki/%DD%EA%F0%E0%ED%EE%EF%EB%E0%ED" target="blank">Узнайте об Экраноплане в Википедии.</a>
						<hr>
						
						<a class="vehicle_link" href="http://geo365.no/forskning/med_luftpute/" target="blank">
							<img class="vehicle_img" src="forpages/problems/hovercraft.jpg">
						</a>
						<a class="wiki" href="http://ru.wikipedia.org/wiki/Судно_на_воздушной_подушке" target="blank">Узнайте о Судне на воздушной подушке в Википедии.</a>
						<a class="link" href="http://www.polarhovercraft.no" target="blank">На сайте www.polarhovercraft.no</a>
					';
				else
					echo
					'
						<h1>Аварии и недавние происшествия</h1>
						<a class="folder" id="folder_2">Перечень аварий, произошедших за последние годы</a>
						<div class="subfiles" id="subfiles_2">
							<a class="pdf" href="forpages/problems/Nordvik_Sept2013_Kara Sea.pdf">Nordvik_Sept2013_Kara Sea</a>
							<a class="pdf" href="forpages/problems/Baboushka_Sept2013_High Arctic.pdf">Baboushka_Sept2013_High Arctic</a>
							<a class="pdf" href="forpages/problems/Gryphon_Feb2011_Northern Sea.pdf">Gryphon_Feb2011_Northern Sea</a>
							<a class="pdf" href="forpages/problems/Explorer_Nov2007_South Ocean.pdf">Explorer_Nov2007_South Ocean</a>
							<a class="pdf" href="forpages/problems/Maxim Gorky_June1989_Greenland Sea_с.pdf">Maxim Gorky_June1989_Greenland Sea_с</a>
							<a class="pdf" href="forpages/problems/Nina Sagaydak_Oct1983_Chikchi Sea.pdf">Nina Sagaydak_Oct1983_Chikchi Sea</a>
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