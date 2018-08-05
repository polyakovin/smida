<?
	include("../blocks/db.php");
	include("blocks/style.php");
?>
<link href="../css/experts.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Experts</h1>
			<div class="expert">
				<a href="http://www.sfos.uaf.edu/directory/faculty/kowalik/" target="blank">
					<img class="expert_photo" src="../forpages/experts/1.jpg">
					<h2>Zygmunt Kowalik</h2>
				</a>
				<p>Distinguished professor of Alaska University. Engaged in physical oceanography: Numerical modeling of tides in the Arctic Ocean, the Bering and Okhotsk seas, storm surges and flows in the Arctic Ocean, the Baltic Sea and the Bering Sea and North Pacific, the tsunami in the North Pacific.</p>
			</div>
			<hr>
			
			<div class="expert">
				<a href="http://engineering.dartmouth.edu/people/faculty/erland-schulson/" target="blank">
					<img class="expert_photo" src="../forpages/experts/2.jpg">
					<h2>Erland M. Schulson</h2>
				</a>
				<p>Distinguished professor of the Engineering department at Dartmouth college, director of the Engineering Science department, Head of Ice Laboratory. Engaged in research of ice strength; metallography and materials science; explores the mechanical behavior of metals and alloys.</p>
			</div>
			<hr>
			
			<div class="expert">
			<a href="http://www.ocean.ru/component/option,com_contact/task,view/contact_id,32/Itemid,/" target="blank">
				<img class="expert_photo" src="../forpages/experts/3.jpg">
				<h2>Evgeny G. Morozov</h2>
			</a>
			<p>Physicist-engineer-oceanographer, graduate of DASR of MIPT, Doctor of Physical and Mathematical Sciences (1990), Head of hydrological processes Laboratory (1993), President of the International Association of Physical Sciences of the Ocean (IAPSO). The main scientific direction is study of internal waves and large-scale ocean circulation.</p>
			</div>
			<hr>
			
			<div class="expert">
			<a href="http://www.arctic.ucalgary.ca/home/people/research-associate/william-barr" target="blank">
				<img class="expert_photo" src="../forpages/experts/4.jpg">
				<h2>William Barr</h2>
			</a>
			<p>
				Arctic historian and editor of the Northern Lights journal series. During the last 30 years he researched the history of the Arctic and Antarctic exploration. He has published 16 books, translated materials from French, German and Russian languages as well as almost all Russian and Soviet Arctic history into English.<br>
				<a href="http://en.wikipedia.org/wiki/William_Barr_(Arctic_historian)" target="blank">Here his webpage at Wikipedia</a>
			</p>
			</div>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>