<?
	include("blocks/db.php");
	
	if(isset($_GET['x']))
		$x='<h3 class="success" id="warning">'.$_GET['x'].'</h3>';
	
	if(isset($_GET['id_lib']))
		$id=$_GET['id_lib'];
		
	include("blocks/style.php");
?>
<link href="css/books.css" rel="stylesheet" type="text/css"/>
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
				if($id==0)
				{
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
				
					echo
					'
						<h1>Выпускные работы бакалавров Санкт-Петербургского Государственного Политехнического Университета</h1>
						<a class="folder" id="folder_1">Agafonov</a>
						<div class="subfiles" id="subfiles_1">
					';
					$all_files=array();
					GetListFiles("files/books/bachelor_projects/Agafonov",$all_files);
					sort($all_files);
					foreach($all_files as $file_name)
					{
						$file_nam=preg_split("/Agafonov\//",$file_name);
						echo'<a class="pdf" href="'.$file_name.'">'.$file_nam[1].'</a>';
					}
					
					echo
					'
						</div>
						<a class="folder" id="folder_2">Gorbunova</a>
						<div class="subfiles" id="subfiles_2">
					';
					$all_files=array();
					GetListFiles("files/books/bachelor_projects/Gorbunova",$all_files);
					sort($all_files);
					foreach($all_files as $file_name)
					{
						$file_nam=preg_split("/Gorbunova\//",$file_name);
						echo'<a class="pdf" href="'.$file_name.'">'.$file_nam[1].'</a>';
					}
					
					echo
					'
						</div>
						<a class="folder" id="folder_3">Kreiniuk</a>
						<div class="subfiles" id="subfiles_3">
					';
					$all_files=array();
					GetListFiles("files/books/bachelor_projects/Kreiniuk",$all_files);
					sort($all_files);
					foreach($all_files as $file_name)
					{
						$file_nam=preg_split("/Kreiniuk\//",$file_name);
						echo'<a class="pdf" href="'.$file_name.'">'.$file_nam[1].'</a>';
					}
					
					echo
					'
						</div>
						<a class="folder" id="folder_4">Ksenofontova</a>
						<div class="subfiles" id="subfiles_4">
					';
					$all_files=array();
					GetListFiles("files/books/bachelor_projects/Ksenofontova",$all_files);
					sort($all_files);
					foreach($all_files as $file_name)
					{
						$file_nam=preg_split("/Ksenofontova\//",$file_name);
						echo'<a class="pdf" href="'.$file_name.'">'.$file_nam[1].'</a>';
					}
					echo
					'
						</div>
					';
				}
				else
				{
			?>
					<h1>Библиотека</h1>
					<?=$x?>
					<table>
						<?
							$result=mysql_query("SELECT * FROM books WHERE book_class='".$id."' ORDER BY name",$db);
							$book=mysql_fetch_array($result);
							
							if($book)
								do
								{
									printf(
									'
										<tr class="table">
											<td class="bookcover">
												<a href="book.php?id=%s">
													<img src="files/books/cover/%s.jpg" alt="%s">
												</a>
											</td>
											<td class="bookdescr">
												<h2>
													<a href="book.php?id=%s">
														%s
													</a>
												</h2>
												<p>%s (<a href="book.php?id=%s">Подробнее</a>)</p>
											</td>
										</tr>
									', $book["id"], $book["id"], $book["name"], $book["id"], $book["name"], $book["mini_descr"], $book["id"]);
								}
								while($book=mysql_fetch_array($result));
							else
								echo"<p>В настоящий момент в данном разделе книги отсутсвуют.</p>";
						?>
					</table>
					<?
						if($_SESSION['priv']==1)
							echo'<br><a class="add" href="add_book.php">Добавиить книгу</a>';
				}
					?>
			<br>
			
			<a id="book_button" class="book_button_ru" href="downloads.php"></a>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>