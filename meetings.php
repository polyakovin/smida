<?
	include("blocks/db.php");
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
			<h1>Совещания</h1>
			<?
				function GetListFiles($folder,&$all_files)//функция перечисления всех файлов из указанной папки
				{
					$fp=opendir($folder);
					
					while($cv_file=readdir($fp)) 
					{
						if(is_file($folder."/".$cv_file))
							$all_files[]=$folder."/".$cv_file;
						elseif($cv_file!="." && $cv_file!=".." && is_dir($folder."/".$cv_file))
							GetListFiles($folder."/".$cv_file,$all_files);
					}
					
					closedir($fp);
				}
			?>
			<p>Здесь находятся все материалы прошедших совещаний, посвящённых нашему проекту:</p>
			<a class="folder" id="folder_2">13-15 ноября 2013 - Тронхейм</a>
			<div class="subfiles" id="subfiles_2">
				<?
					$all_files=array();
					GetListFiles("forpages/meetings/2",$all_files);
					sort($all_files);
					foreach($all_files as$file_name)
					{
						$file_nam=preg_split("/2\//",$file_name);
						echo'<a class="pdf" href="'.$file_name.'">'.$file_nam[1].'</a>';
					}
				?>
			</div>
			<a class="folder" id="folder_1">19-21 октября 2012 - Лонгиербиен</a>
			<div class="subfiles" id="subfiles_1">
				<?
					$all_files=array();
					GetListFiles("forpages/meetings/1",$all_files);
					sort($all_files);
					foreach($all_files as$file_name)
					{
						$file_nam=preg_split("/1\//",$file_name);
						echo'<a class="pdf" href="'.$file_name.'">'.$file_nam[1].'</a>';
					}
				?>
			</div>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>