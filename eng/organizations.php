<?
	include("../blocks/db.php");
	include("blocks/style.php");
?>
<link href="../css/organizations.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Organizations</h1>
			<a class="organization_link" href="http://www.aari.nw.ru/main.php?lg=1" target="blank">
				<img class="organization_img" src="../forpages/organizations/aari.jpg" title="Arctic Artarctic Research Institute (AARI)" alt="Arctic Artarctic Research Institute (AARI)">
			</a>
			<a class="organization_link" href="http://mipt.ru/en/" target="blank">
				<img class="organization_img" src="../forpages/organizations/mipt.jpg" title="Moscow Institute of Physics and Technology (MIPT)" alt="Moscow Institute of Physics and Technology (MIPT)">
			</a>
			<a class="organization_link" href="http://www.msu.ru/en/" target="blank">
				<img class="organization_img" src="../forpages/organizations/msu.jpg" title="Moscow State University (MSU)" alt="Moscow State University (MSU)">
			</a>
			<a class="organization_link" href="http://www.smtu.ru" target="blank">
				<img class="organization_img" src="../forpages/organizations/smtu.jpg" title="State Marine Technical University of St.Petersburg (SMTU)" alt="State Marine Technical University of St.Petersburg (SMTU)">
			</a>
			<a class="organization_link" href="http://www.spbstu-eng.ru" target="blank">
				<img class="organization_img" src="../forpages/organizations/spbstu.jpg" title="Saint-Petersburg State Polytechnical University (SPBSPU)" alt="Saint-Petersburg State Polytechnical University (SPBSPU)">
			</a>
			<a class="organization_link" href="http://www.unis.no" target="blank">
				<img class="organization_img" src="../forpages/organizations/unis.jpg" title="The University Centre in Svalbard (UNIS)" alt="The University Centre in Svalbard (UNIS)">
			</a>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>