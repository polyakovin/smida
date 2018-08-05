<?
	include("../blocks/db.php");
	
	if(isset($_GET['id']))
		$link_id=$_GET['id'];
	
	if(isset($_GET['class']))
		$clazz=$_GET['class'];
	else
		unset($clazz);
	
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		if($name=="")
			unset($name);
	}
	
	if(isset($_POST['link']))
	{
		$link=$_POST['link'];
		if($link=="")
			unset($link);
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
					$fromto=$fromto.",cat_".$s['id']."='".$_POST['cat_'.$s['id']]."'";
				}
				while($s=mysql_fetch_array($r));
				
				$query="UPDATE links SET link='$link',name='$name',name_en='$name_en',descr='$descr',descr_en='$descr_en'".$fromto." WHERE id=$link_id";
				
				if(isset($name)&&isset($name_en)&&isset($descr)&&isset($descr_en)&&isset($link))
				{
					$result=mysql_query($query);
					
					if($result)
						echo
						"
							<h1 class='success'>The link information was updated!</h1>
							<a class='arrow_left' href='links.php?class=".$clazz."'>Back to the list of links</a>
							<a class='add' href='add_link.php'>Add one more link</a>
						";
					else
						echo
						"
							<h1 class='fail'>Error!</h1>
							<p>
								Can not make the changes. Please complete ALL fields!<br>
								<a href='edit_link.php?id=".$link_id."'>Repeat the operation</a>
							</p>
						";
				}
				elseif($_SESSION['priv']==1)
				{
					$result=mysql_query("SELECT * FROM links WHERE id=$link_id",$db);
					$myrow=mysql_fetch_array($result);
					print <<<HERE
						<h1>Change a link</h1>
						<form method="post" action="">
							<label>
								URL:<br>
								<input class="mbf" value="$myrow[link]" type="text" name="link">
							</label><br>
							<br>
							
							<label>
								Title:<br>
								<input class="mbf" value="$myrow[name_en]" type="text" name="name_en">
							</label><br>
							<label>
								Description:<br>
								<textarea class="mbf" name="descr_en">$myrow[descr_en]</textarea>
							</label><br>
							<br>
							
							<label>
								Title (in Russian):<br>
								<input class="mbf" value="$myrow[name]" type="text" name="name">
							</label><br>
							<label>
								Description (in Russian):<br>
								<textarea class="mbf" name="descr">$myrow[descr]</textarea>
							</label><br>
							<h2>Categories:</h2>
							<div>
HERE;

					$result2=mysql_query("SELECT * FROM link_class",$db);
					$res=mysql_fetch_array($result2);
					
					do
					{
						$class[$res["id"]-1]=$res["name_en"];
						$classs[$res["id"]-1][0]=$res["name_en"];
						$classs[$res["id"]-1][1]=$res["id"];
					}
					while($res=mysql_fetch_array($result2));

					//Сортировка массива с категориями
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
							$column="cat_".$subclass["id"];
							$result34=mysql_query("SELECT * FROM links WHERE id=$link_id",$db);
							$ifchecked=mysql_fetch_array($result34);
							
							if($ifchecked[$column]==1)
								$checked=' checked="checked"';
							else
								$checked='';
							
							printf(
							'
								<div class="checkbox_cont">
									<label>
										<input class="checkbox" type="checkbox" name="cat_%s" value="1"%s>
										%s
									</label>
								</div>
							', $subclass["id"], $checked, $subclass["name_en"]);
						}
						while($subclass=mysql_fetch_array($result3));
					}
					
					//Для других подкатегорий
					echo'<h4>'.$other.'</h4>';
					$result3=mysql_query("SELECT * FROM link_subclass WHERE class=1",$db);
					$subclass=mysql_fetch_array($result3);
					
					do
					{
						$column="cat_".$subclass["id"];
						$result34=mysql_query("SELECT * FROM links WHERE id=$link_id",$db);
						$ifchecked=mysql_fetch_array($result34);
						
						if($ifchecked[$column]==1)
							$checked=' checked="checked"';
						else
							$checked='';
							
						printf(
						'
							<div class="checkbox_cont">
								<label>
									<input class="checkbox" type="checkbox" name="cat_%s" value="1"%s>
									%s
								</label>
							</div>
						', $subclass["id"], $checked, $subclass["name_en"]);
					}
					while($subclass=mysql_fetch_array($result3));

					echo
					'
							</div><br>
							<input class="submit" type="submit" value="Submit changes">
						</form>
					';
				}
				else
					echo
					"
						<h1 class='fail'>Access is denied!</h1>
						<p>You are not allowed to edit the news!</p>
					";
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>