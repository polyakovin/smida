<div id="sidebar">
	<div class="menu">
		<ul>
			<li class="links">Меню</li>
			<li><a href="index.php">Главная</a></li>
			
			<li><a id="lib">Библиотека</a></li>
			<div id="libr">
				<div class="submenu">
					<a id="rulit" class="subhead">Литература на Русском</a>
					<div id="ruli">
						<li><a href="library.php?id_lib=1">История Арктики</a></li>
						<li><a href="library.php?id_lib=2">Северный Морской Путь</a></li>
						<li><a href="library.php?id_lib=4">Справочная Литература</a></li>
						<li><a href="library.php?id_lib=3">Морской Лёд</a></li>
					</div>
				</div>
				<div class="submenu">
					<a id="enlit" class="subhead">Литература на Английском</a>
					<div id="enli">
						<li><a href="library.php?id_lib=9">История Арктики</a></li>
						<li><a href="library.php?id_lib=6">Северный Морской Путь</a></li>
						<li><a href="library.php?id_lib=7">Справочная Литература</a></li>
						<li><a href="library.php?id_lib=8">Морской Лёд</a></li>
					</div>
				</div>
				<li><a class="submenu" href="library.php?id_lib=5">PhD/MSc theses</a></li>
				<li><a class="submenu" href="library.php?id_lib=0">Работы бакалавров</a></li>
			</div>
			
			<li><a id="smid">SMIDA</a></li>
			<div id="smida">
				<li><a href="projects.php">Научные проекты</a></li>
				<li><a href="education.php">Образовательная деятельность</a></li>
				<li><a href="users.php">Участники</a></li>
				<li><a href="meetings.php">Совещания</a></li>
				<li><a href="archive.php">Архив</a></li>
				<li><a href="gallery.php">Фотогалерея</a></li>
			</div>
			
			<li><a href="experts.php">Специалисты</a></li>
			
			<li><a href="organizations.php">Организации</a></li>
			
			<li><a id="problem">Проблемы</a></li>
			<div id="problems">
				<li><a href="problems.php?id=1">Аварии</a></li>
				<li><a href="problems.php?id=2">Транспорт</a></li>
			</div>
		</ul>
		<ul>		
			<li class="links">Ссылки</li>
			<li><a id="links">Полезные ссылки</a></li>
			<div id="link">
				<?
					$result2=mysql_query("SELECT * FROM link_class",$db);
					$res=mysql_fetch_array($result2);
					
					do
					{
						$clas[$res["id"]-1]=$res["name"];
						$classs[$res["id"]-1][0]=$res["name"];
						$classs[$res["id"]-1][1]=$res["id"];
					}
					while($res=mysql_fetch_array($result2));
					
					//Сортировка массива с категориями
					$other=$clas[0];
					unset($clas[0]);
					sort($clas);

					$result4=mysql_query("SELECT COUNT(*) FROM link_class",$db);
					$sum=mysql_fetch_array($result4);
					echo'<a class="subhead1" href="links_top10.php">10 Лучших</a>';

					for($i=0;$i<$sum[0]-1;$i++)
					{
						echo
						'
							<div class="submenu">
								<a id="cat_'.$i.'" class="subhead">'.$clas[$i].'</a>
							<div id="subcat_'.$i.'">
						';
					
						for($j=0;$j<$sum[0];$j++)
							if($clas[$i]==$classs[$j][0])
							{
								$class_id=$classs[$j][1];
								break;
							}
						
						$result3=mysql_query("SELECT * FROM link_subclass WHERE class=$class_id",$db);
						$subclass=mysql_fetch_array($result3);
						
						do
						{
							printf('<li><a href="links.php?class=%s">%s</a></li>',$subclass["id"],$subclass["name"]);
						}
						while($subclass=mysql_fetch_array($result3));
						
						echo'</div></div>';
					}
					
					//Для других подкатегорий
					$result3=mysql_query("SELECT * FROM link_subclass WHERE class=1",$db);
					$subclass=mysql_fetch_array($result3);
					
					do
					{
						printf('<a class="subhead1" href="links.php?class=%s">%s</a>',$subclass["id"],$subclass["name"]);
					}
					while($subclass=mysql_fetch_array($result3));
				?>	
				<a class="subhead1" href="links.php?class=all">Все ссылки</a>
			</div>
			
			<li><a href="downloads.php">Загрузки</a></li>
			
			<li><a href="http://www.unis.no/20_RESEARCH/2050_Arctic_Technology/Smida/homepage.htm" target="blank">SMIDA web-page</a></li>
			
			<li><a href="http://mipt.ru/dasr/science/smida.php" target="blank">SMIDA web-page (Rus)</a></li>
		</ul>
		<ul>
			<li class="links">Рабочая Зона</li>
			<li><a href="workspace.php?id_comp=1">МФТИ</a></li>
			<li><a href="workspace.php?id_comp=2">ЮНИС</a></li>
			<li><a href="workspace.php?id_comp=3">СПбГПУ</a></li>
			<li><a href="workspace.php?id_comp=4">МГУ</a></li>
			<li><a href="workspace.php?id_comp=5">СПГМТУ</a></li>
			<li><a href="workspace.php?id_comp=7">НТНУ</a></li>
		</ul>
	</div>
</div>