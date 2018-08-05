<?
	include("blocks/db.php");
	include("blocks/style.php");
?>
<link href="css/organizations.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Организации</h1>
			<a class="organization_link" href="http://www.aari.nw.ru" target="blank">
				<img class="organization_img" src="forpages/organizations/aari.jpg" title="Арктический и Антарктический Научно-Исследовательский Институт (ААНИИ)" alt="Арктический и Антарктический Научно-Исследовательский Институт (ААНИИ)">
			</a>
			<a class="organization_link" href="http://www.mipt.ru" target="blank">
				<img class="organization_img" src="forpages/organizations/mipt.jpg" title="Московский Физико-Технический Институт (МФТИ)" alt="Московский Физико-Технический Институт (МФТИ)">
			</a>
			<a class="organization_link" href="http://www.msu.ru" target="blank">
				<img class="organization_img" src="forpages/organizations/msu.jpg" title="Московский Государственный Университет (МГУ)" alt="Московский Государственный Университет (МГУ)">
			</a>
			<a class="organization_link" href="http://www.smtu.ru" target="blank">
				<img class="organization_img" src="forpages/organizations/smtu.jpg" title="Санкт-Петербургский Государственный Морской Техническии Университет (СПбГМТУ)" alt="Санкт-Петербургский Государственный Морской Техническии Университет (СПбГМТУ)">
			</a>
			<a class="organization_link" href="http://www.spbstu.ru" target="blank">
				<img class="organization_img" src="forpages/organizations/spbstu.jpg" title="Санкт-Петербургский Государственный Политехнический Университет (СПбГПУ)" alt="Санкт-Петербургский Государственный Политехнический Университет (СПбГПУ)">
			</a>
			<a class="organization_link" href="http://www.unis.no" target="blank">
				<img class="organization_img" src="forpages/organizations/unis.jpg" title="Учебно-Научный Центр Шпицбергена (УНСШ)" alt="Учебно-Научный Центр Шпицбергена (УНСШ)">
			</a>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>