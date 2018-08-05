<?
	include("../blocks/db.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
	
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		if($name=="")
			unset($name);
	}
	
	if(isset($_POST['name_en']))
	{
		$name_en=$_POST['name_en'];
		if($name_en=="")
			unset($name_en);
	}
	
	if(isset($_POST['descr']))
	{
		$descr=$_POST['descr'];
		if($descr=="")
			unset($descr);
	}
	
	if(isset($_POST['descr_en']))
	{
		$descr_en=$_POST['descr_en'];
		if($descr_en=="")
			unset($descr_en);
	}
	
	if(isset($_POST['mini_descr']))
	{
		$mini_descr=$_POST['mini_descr'];
		if($mini_descr=="")
			unset($mini_descr);
	}
	
	if(isset($_POST['mini_descr_en']))
	{
		$mini_descr_en=$_POST['mini_descr_en'];
		if($mini_descr_en=="")
			unset($mini_descr_en);
	}
	
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
			<?
				if(isset($name)&&isset($name_en)&&isset($descr)&&isset($descr_en)&&isset($mini_descr)&&isset($mini_descr_en)) 
				{
					$bookquery=mysql_query("UPDATE books SET name='$name',name_en='$name_en',descr='$descr',descr_en='$descr_en',mini_descr='$mini_descr',mini_descr_en='$mini_descr_en' WHERE id=$id"); 
					if($bookquery)
					{
						if(!$_FILES['pdf']['error'])
							if($_FILES['pdf']['type']=="application/pdf")
							{
								$pdf="../files/books/pdf/".$id.".pdf";
								move_uploaded_file($_FILES['pdf']['tmp_name'],$pdf);
							}
							else
								$warning=
								"
									<p><strong>The Book</strong> couldn't be uploaded! Required file format - PDF</p>
								";
								
						if(!$_FILES['djvu']['error'])
							if($_FILES['djvu']['type']=="application/octet-stream")
							{
								$djvu="../files/books/djvu/".$id.".djvu";
								move_uploaded_file($_FILES['djvu']['tmp_name'],$djvu);
							}
							else
								$warning.=
								"
									<p><strong>The Book</strong> couldn't be uploaded! Required file format - DjVu</p>
								";
								
						if(!$_FILES['cover']['error'])
							if($_FILES['cover']['type']=="image/jpeg")
							{
								$cover="../files/books/cover/".$id.".jpg";
								move_uploaded_file($_FILES['cover']['tmp_name'],$cover);
							}
							else
								$warning.=
								"
									<p><strong>The Cover</strong> couldn't be uploaded! Required file format - JPG or JPEG</p>
								";
							
						echo
						"
							<h1 class='success'>The book was successfully udated!</h1>
							<div class='fail'>".$warning."</div>
							<a class='arrow_right' href='book.php?id=".$id."'>Go to the description of the book</a>
							<a class='arrow_left' href='library.php'>Back to the list of books</a>
						";
					}
					else
						echo
						"
							<h1 class='fail'>Error!</h1>
							<p>Cann't make the change. The server didn't accept the request.<br><a href='edit_book.php?id=".$id."'>Repeat the operation!</a></p>
						";
				}
				else 
				{
					if($_SESSION['priv']==1)
					{
						$result=mysql_query("SELECT * FROM books WHERE id=$id",$db);
						$myrow=mysql_fetch_array($result);
						print <<<HERE
							<h1>Add a book</h1>
							<form method="post" action="" enctype="multipart/form-data">
								<label>
									Title:<br>
									<input class="mbf" type="text" name="name_en" value="$myrow[name_en]">
								</label><br>
								<label>
									Brief description:<br>
									<textarea class="mbf" name="mini_descr_en">$myrow[mini_descr_en]</textarea>
								</label><br>
								<label>
									Complete description:<br>
									<textarea class="mbf" name="descr_en">$myrow[descr_en]</textarea>
								</label><br>
								<br><br>
								
								<label>
									Title (in Russian):<br>
									<input class="mbf" type="text" name="name" value="$myrow[name]">
								</label><br>
								<label>
									Brief description (in Russian):<br>
									<textarea class="mbf" name="mini_descr">$myrow[mini_descr]</textarea>
								</label><br>
								<label>
									Complete description (in Russian):<br>
									<textarea class="mbf" name="descr">$myrow[descr]</textarea>
								</label><br>
								<br><br>
								
								<label>
									Books format PDF:<br>
									<input class="upload" type="file" name="pdf">
								</label><br>
								<label>
									Books format DjVu:<br>
									<input class="upload" type="file" name="djvu">
								</label><br>
								<label>
									Cover 90х120 (JPG,JPEG):<br>
									<input class="upload" type="file" name="cover">
								</label><br>
								<br>
								
								<input type="submit" class="submit" value="Change the description">
							</form>
HERE;
					}
					else
						echo
						"
							<h1 class='fail'>Access is denied!</h1>
							<p>You are not allowed to add new users. You can offer the administrator to add a new participant to the project.</p>
						";
				}
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>