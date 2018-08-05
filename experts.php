<?
	include("blocks/db.php");
	include("blocks/style.php");
?>
<link href="css/experts.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Специалисты</h1>
			<?=$x?>
			<div class="expert">
				<a href="http://www.sfos.uaf.edu/directory/faculty/kowalik/" target="blank">
					<img class="expert_photo" src="forpages/experts/1.jpg">
					<h2>Зигмунт Ковалик</h2>
				</a>
				<p>Заслуженный профессор университета Аляски. Занимается физической океанографией: численными моделированиями приливов в Северном Ледовитом океане, Беринговом и Охотском морях; штормовыми приливами и течениями в Северном Ледовитом океане, Балтийском и Беринговом морей, и северной части Тихого океана; цунами в северной части Тихого океана.</p>
			</div>
			<hr>
			
			<div class="expert">
				<a href="http://engineering.dartmouth.edu/people/faculty/erland-schulson/" target="blank">
					<img class="expert_photo" src="forpages/experts/2.jpg">
					<h2>Эрланд Шулсен</h2>
				</a>
				<p>Заслуженный профессор кафедры инженерии Дартмутского колледжа, декан факультета инженерных наук, зав. лабораторией льда. Занимается прочностными исследованиями льда; металловедением и материаловедением; исследует механическое поведение металлов и сплавов.</p>
			</div>
			<hr>
			
			<div class="expert">
				<a href="http://www.ocean.ru/component/option,com_contact/task,view/contact_id,32/Itemid,/" target="blank">
					<img class="expert_photo" src="forpages/experts/3.jpg">
					<h2>Евгений Георгиевич Морозов</h2>
				</a>
				<p>Инженер-физик-океанолог, выпускник ФАКИ МФТИ, доктор физико-математических наук(1990), зав. Лабораторией гидрологических процессов (1993), Президент  Международной Ассоциации Физических Наук об Океане (IAPSO). Основное научное направление работы Е.Г. Морозова - изучение внутренних волн и крупномасштабной циркуляциеи океана.</p>
			</div>
			<hr>
			
			<div class="expert">
				<a href="http://www.arctic.ucalgary.ca/home/people/research-associate/william-barr" target="blank">
					<img class="expert_photo" src="forpages/experts/4.jpg">
					<h2>Уильям Барр</h2>
				</a>
				<p>
					Арктический историк, редактор серии журналов Northern Lights. В течении последних 30 лет исследовал историю освоения Арктики и Антарктики.  Он опубликовал 16 книг, переводил материалы с французского, немецкого и русского языков, а также перевёл почти всю русскую и советскую арктическую историю на английский язык.<br>
					<a href="http://en.wikipedia.org/wiki/William_Barr_(Arctic_historian)" target="blank">Его страничка в Википедии</a>
				</p>
			</div>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>