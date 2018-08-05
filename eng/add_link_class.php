<?
	include("../blocks/db.php");
	
	if(isset($_POST['class']))
	{
		$class=$_POST['class'];
		if($class=="")
			unset($class);
	}
	
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
				if(isset($name)&&isset($name_en)&&isset($class))
				{
					$result=mysql_query("INSERT INTO link_subclass (name,name_en,class) VALUES ('$name','$name_en','$class')");
					
					if($result)
					{
						$ress=mysql_insert_id();
						mysql_query("ALTER TABLE links ADD COLUMN cat_".$ress." int(1)");
						echo
						"
							<h1 class='success'>The new category has been added successfully!</h1>
							<a class='home' href='index.php'>Back to homepage</a>
							<a class='arrow_left' href='links.php'>Back to the list of links</a>
							<a class='add' href='add_link_class.php'>Add one more category</a>
						";
					}
					else
					{
					echo
					"
						<h1 class='fail'>Error!</h1>
						<p>
							Unable to make changes. Please complete all fields!<br>
							<a href='add_link_class.php'>Retry</a>
						</p>
					";
					}
				}
				elseif($_SESSION['priv']==1)
				{
					echo
					'
						<h1>Adding a category for links</h1>
						<form method="post" action="">
							<label>
								Title:<br>
								<input class="mbf" type="text" name="name_en">
							</label><br>
							<label>
								Title(in Russian):<br>
								<input class="mbf" type="text" name="name">
							</label><br>
							<label>
								Section:
								<select name="class">
					';
					$result3=mysql_query("SELECT * FROM link_class ORDER BY name",$db);
					$myrow3=mysql_fetch_array($result3);
					
					do
					{
						printf(
						'
							<option value="%s">%s</option>
						', $myrow3["id"], $myrow3["name"]);
					}
					while($myrow3=mysql_fetch_array($result3));
					
					echo
					'
							</select>
							<input class="submit" type="submit" value="Add category">
						</form>
					';
				}
				else
				{
					echo
					"
						<h1 class='fail'>Access is denied!</h1>
						<p>You are not allowed to add categories!</p>
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