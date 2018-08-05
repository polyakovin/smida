<div id="sidebar">
	<div class="menu">
		<ul>
			<li class="links">Menu</li>
		
			<li><a href="index.php">Home</a></li>
			
			<li><a id="lib">Library</a></li>
			<div id="libr">
				<div class="submenu">
					<a id="rulit" class="subhead">Literature in Russian</a>
					<div id="ruli">
						<li><a href="library.php?id_lib=1">History of Arctic</a></li>
						<li><a href="library.php?id_lib=2">The Northern Sea Route</a></li>
						<li><a href="library.php?id_lib=4">Supplemental Literature</a></li>
						<li><a href="library.php?id_lib=3">Sea Ice</a></li>
					</div>
				</div>
				<div class="submenu">
					<a id="enlit" class="subhead">Literature in English</a>
					<div id="enli">
						<li><a href="library.php?id_lib=9">History of Arctic</a></li>
						<li><a href="library.php?id_lib=6">The Northern Sea Route</a></li>
						<li><a href="library.php?id_lib=7">Supplemental Literature</a></li>
						<li><a href="library.php?id_lib=8">Sea Ice</a></li>
					</div>
				</div>
				<li><a class="submenu" href="library.php?id_lib=5">PhD/MSc theses</a></li>
				<li><a class="submenu" href="library.php?id_lib=0">Bachelor projects</a></li>
			</div>
			
			<li><a id="smid">SMIDA</a></li>
			<div id="smida">
				<li><a href="projects.php">Scientific projects</a></li>
				<li><a href="education.php">Educational activities</a></li>
				<li><a href="users.php">Participants</a></li>
				<li><a href="meetings.php">Meetings</a></li>
				<li><a href="archive.php">Archive</a></li>
				<li><a href="gallery.php">Picture Gallery</a></li>
			</div>
			
			<li><a href="experts.php">Experts</a></li>
			
			<li><a href="organizations.php">Organizations</a></li>
			
			<li><a id="problem">Problems</a></li>
			<div id="problems">
				<li><a href="problems.php?id=1">Casualties</a></li>
				<li><a href="problems.php?id=2">Vehicles</a></li>
			</div>
		</ul>
		<ul>
			<li class="links">Links</li>
			
			<li><a id="links">Useful links</a></li>
			<div id="link">
				<?
					$result2=mysql_query("SELECT * FROM link_class",$db);
					$res=mysql_fetch_array($result2);
					
					do
					{
						$clas[$res["id"]-1]=$res["name_en"];
						$classs[$res["id"]-1][0]=$res["name_en"];
						$classs[$res["id"]-1][1]=$res["id"];
					}
					while($res=mysql_fetch_array($result2));

					$other=$clas[0];
					unset($clas[0]);
					sort($clas);

					$result4=mysql_query("SELECT COUNT(*) FROM link_class",$db);
					$sum=mysql_fetch_array($result4);
					echo
					'
						<a class="subhead1" href="links_top10.php">Top-10</a>
					';

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
							printf(
							'
								<li>
									<a href="links.php?class=%s">%s</a>
								</li>
							', $subclass["id"], $subclass["name_en"]);
						}
						while($subclass=mysql_fetch_array($result3));
						
						echo
						'
								</div>
							</div>
						';
					}

					$result3=mysql_query("SELECT * FROM link_subclass WHERE class=1",$db);
					$subclass=mysql_fetch_array($result3);
					
					do
					{
						printf(
						'
							<a class="subhead1" href="links.php?class=%s">%s</a>
						', $subclass["id"], $subclass["name_en"]);}
					while($subclass=mysql_fetch_array($result3));
				?>	
				<a class="subhead1" href="links.php?class=all">All links</a>
			</div>
			
			<li><a href="downloads.php">Downloads</a></li>
			
			<li><a href="http://www.unis.no/20_RESEARCH/2050_Arctic_Technology/Smida/homepage.htm" target="blank">SMIDA web-page</a></li>
			
			<li><a href="http://mipt.ru/dasr/science/smida.php" target="blank">SMIDA web-page (Rus)</a></li>
		</ul>
		<ul>
			<li class="links">Workspace</li>
			<li><a href="workspace.php?id_comp=1">MIPT</a></li>
			<li><a href="workspace.php?id_comp=2">UNIS</a></li>
			<li><a href="workspace.php?id_comp=3">SPbSPU</a></li>
			<li><a href="workspace.php?id_comp=4">MSU</a></li>
			<li><a href="workspace.php?id_comp=5">SMTU</a></li>
			<li><a href="workspace.php?id_comp=7">NTNU</a></li>
		</ul>
	</div>
</div>