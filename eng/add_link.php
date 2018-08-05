<?
	include("../blocks/db.php");
	
	if(isset($_GET['class']))
		$clazz=$_GET['class'];
	else
		unset($clazz);
	
	if(isset($_POST['link']))
	{
		$link=$_POST['link'];
		if($link=="")
			unset($link);
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
				$r=mysql_query("SELECT * FROM link_subclass",$db);
				$s=mysql_fetch_array($r);
				
				do
				{
					$from=$from.",cat_".$s['id'];
					$l="cat_".$s['id'];
					$to=$to.",'".$_POST['cat_'.$s['id']]."'";
				}
				while($s=mysql_fetch_array($r));
				
				$query="INSERT INTO links (link,name,name_en,descr,descr_en".$from.") VALUES ('$link','$name','$name_en','$descr','$descr_en'".$to.")";
				
				if(isset($name)&&isset($name_en)&&isset($descr)&&isset($descr_en)&&isset($link))
				{
					$result=mysql_query($query);
					
					if($result)
					{
						$id=mysql_insert_id();
						
						if(!$_FILES['logo']['error'])
							if($_FILES['logo']['type']=="image/jpeg")
							{
								$logo="../forlinks/".$id.".jpg";
								move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
							}
							else
								$warning.=
								"
									<p>Failed to load <strong>the logo</strong>! Required file formats - JPG or JPEG</p>
								";
								
						echo
						"
							<h1 class='success'>Link added successfully!</h1>
							<div class='fail'>".$warning."</div>
							<a class='home' href='index.php'>Back to homepage</a>
							<a class='arrow_left' href='links.php?class=".$clazz."'>Back to the list of links</a>
							<a class='add' href='add_link.php'>Add one more link</a>
						";
					}
					else
					{
					echo
					"
						<h1 class='fail'>Error!</h1>
						<p>Unable to make changes. Please fill in all fields!<br><a href='add_link.php'>Retry</a></p>
					";
					}
				}
				elseif($_SESSION['priv']==1)
				{
					echo
					'
						<h1>Adding a link</h1>
						<form method="post" action="" enctype="multipart/form-data">
							<label>
								Link:<br>
								<input class="mbf" type="text" name="link">
							</label><br>
							<label>
								Website logo size 200х50 (JPG,JPEG):<br>
								<input class="upload" type="file" name="logo">
							</label><br>
							<br>
							<label>
								Title(in Russian):<br>
								<input class="mbf" type="text" name="name">
							</label><br>
							<label>
								Description(in Russian):<br>
								<textarea class="mbf" name="descr"></textarea>
							</label><br>
							<br>
							
							<label>
								Title:<br>
								<input class="mbf" type="text" name="name_en">
							</label><br>
							<label>
								Description:<br>
								<textarea class="mbf" name="descr_en"></textarea>
							</label><br>
							<br>
							
							<h2>Categories:</h2>
							<div>
					';
					
					$result2=mysql_query("SELECT * FROM link_class",$db);
					$res=mysql_fetch_array($result2);
					
					do
					{
						$class[$res["id"]-1]=$res["name_en"];
						$classs[$res["id"]-1][0]=$res["name_en"];
						$classs[$res["id"]-1][1]=$res["id"];
					}
					while($res=mysql_fetch_array($result2));

					//Sorting an array with categories
					$other=$class[0];
					unset($class[0]);
					sort($class);

					$result=mysql_query("SELECT COUNT(*) FROM link_class",$db);
					$sum=mysql_fetch_array($result);

					for($i=0;$i<$sum[0]-1;$i++)
					{
						echo'<h4>'.$class[$i].'</h4>';
						
						for($j=0;$j<$sum[0];$j++)
							if($class[$i]==$classs[$j][0])
							{
								$id=$classs[$j][1];
								break;
							}

						$result3=mysql_query("SELECT * FROM link_subclass WHERE class=$id",$db);
						$subclass=mysql_fetch_array($result3);
						
						do
						{
							printf(
							'
								<div class="checkbox_cont">
									<label>
										<input class="checkbox" type="checkbox" name="cat_%s" value="1">
										%s
									</label>
								</div>
							', $subclass["id"], $subclass["name_en"]);
						}
						while($subclass=mysql_fetch_array($result3));
					}
					
					//For other subcategories
					echo'<h4>'.$other.'</h4>';
					$result3=mysql_query("SELECT * FROM link_subclass WHERE class=1",$db);
					$subclass=mysql_fetch_array($result3);
					
					do
					{
						printf(
						'
							<div class="checkbox_cont">
								<label>
									<input class="checkbox" type="checkbox" name="cat_%s" value="1">
									%s
								</label>
							</div>
						', $subclass["id"], $subclass["name_en"]);
					}
					while($subclass=mysql_fetch_array($result3));

					echo
					'
							</div><br>
							<input class="submit" type="submit" value="Accept changes">
						</form>
					';
				}
				else
					echo
					"
						<h1 class='fail'>Access is denied!</h1>
						<p>You are not allowed to add links!</p>
					";
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>