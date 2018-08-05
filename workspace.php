<?
	include("blocks/db.php");

	if(isset($_GET['id_comp']))
		$id_comp=$_GET['id_comp'];

	if(isset($_POST['date']))
	{
		$date=$_POST['date'];
		if($date=="")
		{
			unset($date);
		}
	}

	if(isset($_POST['id_comp']))
	{
		$id_comp=$_POST['id_comp'];
		if($id_comp=="")
		{
			unset($id_comp);
		}
	}

	$result2=mysql_query("SELECT * FROM comps WHERE id='$id_comp'",$db);
	$myrow2=mysql_fetch_array($result2);
	$uploadfile=basename($_FILES['uploadfile']['name']);
	$uploadfile1="files/".$myrow2["name_en"]."/".$uploadfile;

	if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$uploadfile1))
	{
		$result=mysql_query("INSERT INTO files (date,id_comp,real_name) VALUES ('$date','$id_comp','$uploadfile')");
		header('location:workspace.php?id_comp='.$id_comp);
		
		if($result!='true')
			$x="Что-то пошло не так...";
		else
			$x="Ваш файл успешно загружен!\n";
	}
	include("blocks/style.php");
?>
<link href="css/workspace.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Рабочая зона - <?=$myrow2["name"];?></h1>
			<form id="filretr" action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="date" value='<? echo date(d).".".date(m).".".date(Y);?>'>
				<input type="hidden" name="id_comp" value='<?=$id_comp;?>'>
				<label>
					<input class="mbf" id="upload" type="file" name="uploadfile">
				</label>
				<input class="submit" type="submit" value="Добавить Документ"><br>
			</form>
			<h2 id="headadd">Перечень файлов в разделе <?=$myrow2["name"];?></h2>
			<?
				if(isset($x))
					echo $x;
			?>
			<ul id="files">
				<?
					$result1=mysql_query("SELECT * FROM files WHERE id_comp='$id_comp' ORDER BY real_name",$db);
					$myrow1=mysql_fetch_array($result1);
					$z=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM files WHERE id_comp='$id_comp'",$db));
					
					if($z[0])
					{
						do
						{
							printf(
							'
								<li class="table filec">
									<a class="file" href="download.php?id_comp=%s&comp=%s&file=%s">
										[%s] %s
									</a>
									<a class="delete" hyref="delete.php?comp=%s&file=%s&id_comp=%s&id=%s"></a>
								</li>
							', $id_comp, $myrow2["name_en"], $myrow1["real_name"], $myrow1["date"], $myrow1["real_name"], $myrow2["name_en"], $myrow1["real_name"], $id_comp, $myrow1["id"]);
						}
						while($myrow1=mysql_fetch_array($result1));
					}
					else
						echo"<h3>В данном разделе файлы отсутствуют.</h3>";
				?>
			</ul>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>