<?
	include("../blocks/db.php");
	$userid=$_GET['id'];
	
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
	
	if(isset($_POST['fami']))
	{
		$fami=$_POST['fami'];
		if($fami=="")
			unset($fami);
	}
	
	if(isset($_POST['fami_en']))
	{
		$fami_en=$_POST['fami_en'];
		if($fami_en=="")
			unset($fami_en);
	}
	
	if(isset($_POST['otch']))
	{
		$otch=$_POST['otch'];
		if($otch=="")
			unset($otch);
	}
	
	if(isset($_POST['otch_en']))
	{
		$otch_en=$_POST['otch_en'];
		if($otch_en=="")
			unset($otch_en);
	}
	
	if(isset($_POST['rang']))
	{
		$rang=$_POST['rang'];
		if($rang=="")
			unset($rang);
	}
	
	if(isset($_POST['rang_en']))
	{
		$rang_en=$_POST['rang_en'];
		if($rang_en=="")
			unset($rang_en);
	}
	
	$pos=$_POST['pos'];
	$pos_en=$_POST['pos_en'];
	$tel1=$_POST['tel1'];
	$tel2=$_POST['tel2'];
	$fax=$_POST['fax'];
	$web=$_POST['web'];
	$comp=$_POST['comp'];
	$priv=$_POST['priv'];
	include("blocks/style.php");
?>
<link href="../css/users.css" rel="stylesheet" type="text/css"/>
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
				if(isset($name) && isset($name_en) && isset($fami) && isset($fami_en) && isset($rang) && isset($rang_en))
				{
					$result=mysql_query("UPDATE users SET name=\"$name\",fami=\"$fami\",otch=\"$otch\",name_en=\"$name_en\",fami_en=\"$fami_en\",otch_en=\"$otch_en\",pos=\"$pos\",pos_en=\"$pos_en\",tel1=\"$tel1\",tel2=\"$tel2\",fax=\"$fax\",web=\"$web\",rang=\"$rang\",rang_en=\"$rang_en\",id_comp=\"$comp\",priv=\"$priv\" WHERE id=$userid");
					
					if($result)
						echo
						"
							<h1 class='success'>".$name_en."'s profile information was successfuly updated!</h1>
							<a class='arrow_right' href='user.php?id=".$userid."'>Move to profile</a>
							<a class='arrow_left' href='users.php'>Back to user list</a>
						";
					else
						echo
						"
							<h1 class='fail'>Error!</h1>
							<p>
								Can not make the change. Please leave at least a last name, first name, middle name and role in SMIDA!<br>
								<a href='edit_user.php'>Try again</a>
							</p>
						";
				}
				elseif($_SESSION['priv']==1)
				{
					$result=mysql_query("SELECT * FROM users WHERE id=$userid",$db);
					$myrow=mysql_fetch_array($result);
					
					print <<<HERE
						<h1>Edit personal data</h1>
						<form method="post" action="">
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
								Middle name:<br>
								<input value="$myrow[otch_en]" type="text" name="otch_en">
							</label><br>
							<label>
								Middle name (in Russian):<br>
								<input value="$myrow[otch]" type="text" name="otch">
							</label><br>
							<hr>
							
							<label>
								Role in SMIDA:<br>
								<input class="mbf" value="$myrow[rang_en]" type="text" name="rang_en">
							</label><br>
							<label>
								Role in SMIDA (in Russian):<br>
								<input class="mbf" value="$myrow[rang]" type="text" name="rang">
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
								<input value="$myrow[tel1]" type="text" name="tel1">
							</label><br>
							<label>
								Mobile phone:<br>
								<input value="$myrow[tel2]" type="text" name="tel2">
							</label><br>
							<label>
								Fax:<br>
								<input value="$myrow[fax]" type="text" name="fax">
							</label><br>
							<label>
								Web-page:<br>
								<input value="$myrow[web]" type="text" name="web">
							</label><br>
							<br>
							
							<table id="endreg">
								<tr>
									<td align="right">
										<label for="comp">Organisation:</label>
									</td>
									<td align="left">
										<select type="text" name="comp">
HERE;
					$result3=mysql_query("SELECT * FROM comps ORDER BY id",$db);
					$myrow3=mysql_fetch_array($result3);
					
					do
					{
						echo"<option value=".$myrow3["id"]." ";
						
						if($myrow3["id"]==$myrow["id_comp"])
							echo" selected='selected'";	
						
						echo">".$myrow3["name_en"]."</option>";
					}
					while($myrow3=mysql_fetch_array($result3));
					
					if($myrow['priv']==1)
						$x="selected='selected'";
					else 
						$y="selected='selected'";
						
					print <<<HERE
										</select>
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="priv">Privileg:</label>
									</td>
									<td align="left">
										<select type="text" name="priv">
											<option value="2" $y>User</option>
											<option value="1" $x>Administrator</option>
										</select>
									</td>
								</tr>
							</table>
							<br>
							<input class="submit" type="submit" value="Accept changes">
						</form>
HERE;
				}
				else
					echo
					"
						<h1 class='fail'>Access is denied!</h1>
						<p>You are not allowed to change user information!</p>
					";
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>