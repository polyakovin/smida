<?
	include("../blocks/db.php");
	$userid=$_SESSION['id'];
	$pass=md5(mysql_real_escape_string($_POST['pass']));
	
	if(isset($_POST['name'])){$name=$_POST['name'];if($name==""){unset($name);}}
	
	if(isset($_POST['name_en'])){$name_en=$_POST['name_en'];if($name_en==""){unset($name_en);}}
	
	if(isset($_POST['fami'])){$fami=$_POST['fami'];if($fami==""){unset($fami);}}
	
	if(isset($_POST['fami_en'])){$fami_en=$_POST['fami_en'];if($fami_en==""){unset($fami_en);}}
	
	if(isset($_POST['otch'])){$otch=$_POST['otch'];if($otch==""){unset($otch);}}
	
	if(isset($_POST['otch_en'])){$otch_en=$_POST['otch_en'];if($otch_en==""){unset($otch_en);}}
	
	if(isset($_POST['pos'])){$pos=$_POST['pos'];if($pos==""){unset($pos);}}
	
	if(isset($_POST['pos_en'])){$pos_en=$_POST['pos_en'];if($pos_en==""){unset($pos_en);}}
	
	if(isset($_POST['tel1'])){$tel1=$_POST['tel1'];if($tel1==""){unset($tel1);}}
	
	if(isset($_POST['tel2'])){$tel2=$_POST['tel2'];if($tel2==""){unset($tel2);}}
	
	if(isset($_POST['fax'])){$fax=$_POST['fax'];if($fax==""){unset($fax);}}
	
	if(isset($_POST['web'])){$web=$_POST['web'];if($web==""){unset($web);}}
	
	if(isset($_POST['add'])){$add=$_POST['add'];if($add==""){unset($add);}}
	
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
				if(isset($name) && isset($name_en) && isset($fami) && isset($fami_en))
				{
					$passw=mysql_query("SELECT password FROM users WHERE id=$userid",$db);
					$myrow=mysql_fetch_array($passw);
					
					if($pass==$myrow['password'])
					{
						$result=mysql_query("UPDATE users SET name=\"$name\",fami=\"$fami\",otch=\"$otch\",name_en=\"$name_en\",fami_en=\"$fami_en\",otch_en=\"$otch_en\",pos=\"$pos\",pos_en=\"$pos_en\",tel1=\"$tel1\",tel2=\"$tel2\",fax=\"$fax\",web=\"$web\" WHERE id=$userid");
						
						if($result=='true')
						{
							if(!$_FILES['cv']['error'])
								if($_FILES['cv']['type']=="application/pdf")
								{
									$cv="../files/cv/".$userid.".pdf";
									move_uploaded_file($_FILES['cv']['tmp_name'],$cv);
								}
								else
									$warning="<p>Failed to load <strong>Curriculum vitae</strong>! Required file format - PDF</p>";
									
							if(!$_FILES['pub']['error'])
								if($_FILES['pub']['type']=="application/pdf")
								{
									$pub="../files/pub/".$userid.".pdf";
									move_uploaded_file($_FILES['pub']['tmp_name'],$pub);
								}
								else
									$warning.="<p>Failed to load <strong>List of publications</strong>! Required file format - PDF</p>";
									
							if(!$_FILES['foto']['error'])
								if($_FILES['foto']['type']=="image/jpeg")
								{
									$foto="../files/foto/".$userid.".jpg";
									move_uploaded_file($_FILES['foto']['tmp_name'],$foto);
								}
								else
									$warning.="<p>Failed to load <strong>Profile photo</strong>! Required file format - JPG или JPEG</p>";
									
							echo
							"
								<h1 class='success'>Your profile information was changed successfuly!</h1>
								<div class='fail'>".$warning."</div>
								<a class='arrow_left' href='login.php'>Back to profile</a>
							";
						}
						else
							echo
							"
								<h1 class='fail'>Error!</h1>
								<p>Something went wrong and changes weren't been make!<br>
								<a href='edit_profile.php'>Try again,</a> please.</p>
							";
					}
					else
					{
						echo
						"
							<h1 class='fail'>Error! Incorrect password!</h1>
							<a class='arrow_left' href='edit_profile.php'>Try again</a>
						";
					}
				}
				else
				{
					$result=mysql_query("SELECT * FROM users WHERE id=$userid",$db);
					$myrow=mysql_fetch_array($result);
					
					print <<<HERE
						<h1>Edit personal data</h1>
						<form method="post" action="" enctype="multipart/form-data">
							<label>
								Name:<br>
								<input class="mbf" value="$myrow[name_en]" type="text" name="name_en">
							</label><br>
							<label>
								Name (in Russian):<br>
								<input class="mbf" value="$myrow[name]" type="text" name="name">
							</label><br>
							<hr>
							
							<label>
								Surname:<br>
								<input class="mbf" value="$myrow[fami_en]" type="text" name="fami_en">
							</label><br>
							<label>
								Surname (in Russian):<br>
								<input class="mbf" value="$myrow[fami]" type="text" name="fami">
							</label><br>
							<hr>
							
							<label>
								Second name:<br>
								<input value="$myrow[otch_en]" type="text" name="otch_en">
							</label><br>
							<label>
								Second name (in Russian):<br>
								<input value="$myrow[otch]" type="text" name="otch">
							</label><br>
							<hr>
							
							<label>
								Position:<br>
								<input value="$myrow[pos_en]" type="text" name="pos_en">
							</label><br>
							<label>
								Position (in Russian):<br>
								<input value="$myrow[pos]" type="text" name="pos">
							</label><br>
							<br><br>
							
							<label>
								Business phone:<br>
								<input value="$myrow[tel2]" type="text" name="tel2">
							</label><br>
							<label>
								Business phone (in Russian):<br>
								<input value="$myrow[tel1]" type="text" name="tel1">
							</label><br>

							<label>
								Факс:<br>
								<input value="$myrow[fax]" type="text" name="fax">
							</label><br>
							<label>
								Web-page:<br>
								<input value="$myrow[web]" type="text" name="web">
							</label><br>
						<!--<label>
								Additional information:<br>
								<textarea name="add">$myrow[add]</textarea>
							</label><br>-->
							<br><br>
							
							<label>
								Curriculum vitae (PDF):<br>
								<input class="upload" type="file" name="cv">
							</label><br>
							<label>
								Publications (PDF):<br>
								<input class="upload" type="file" name="pub">
							</label><br>
							<label>
								Profile photo 120х160 (JPG,JPEG):<br>
								<input class="upload" type="file" name="foto">
							</label><br>
							<br><br>
							
							<label>
								Your password:</br>
								<input class="mbf" type="password" name="pass">
							</label></br> 
							<input class="submit" type="submit" value="Accept changes">
						</form>
HERE;
				}
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>