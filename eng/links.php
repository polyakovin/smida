<?
	include("../blocks/db.php");
	
	if(isset($_GET['class']))
		$class=$_GET['class'];
	else
		unset($class);
	
	if($class=="all")
	{
		$result=mysql_query("SELECT name_en FROM link_subclass",$db);
		$name=mysql_fetch_array($result);
	}
	else
	{
		$result=mysql_query("SELECT name_en FROM link_subclass WHERE id=$class",$db);
		$name=mysql_fetch_array($result);
	}
	
	include("blocks/style.php");
?>
<link href="../css/links.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Useful links: <?=$name[0]?></h1>
			<?
				if($_SESSION['priv']==1)
					echo
					'
						<a class="add" href="add_link.php?class='.$class.'">Add a link</a>
						<a class="add" href="add_link_class.php">Add a new category</a>
					';
			?>
			<table class="linkstable">
				<?
					if(isset($class))
					{
						if($class=="all")
						{
							$result=mysql_query("SELECT * FROM links ORDER BY name",$db);
							$links=mysql_fetch_array($result);
						}
						else
						{
							$result=mysql_query("SELECT * FROM links WHERE cat_".$class."=1 ORDER BY name",$db);
							$links=mysql_fetch_array($result);
						}

						if($_SESSION['priv']==1)
						{
							do
							{
								printf(
								'
									<tr class="table">
										<td class="linkimg">
											<a href="%s" target="blank">
												<img src="../forlinks/%s.jpg" alt="%s" title="%s">
											</a>
										</td>
										<td>
											<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
											%s
										</td>
									</tr>
								', $links["link"], $links["id"], $links["name_en"], $links["name_en"], $class, $links["id"], $links["descr_en"]);
							}
							while($links=mysql_fetch_array($result));
						}
						else
						{
							do
							{
								printf(
								'
									<tr class="table">
										<td class="linkimg">
											<a href="%s" target="blank"><img src="../forlinks/%s.jpg" alt="%s" title="%s"></a>
										</td>
										<td>
											%s
										</td>
									</tr>
								', $links["link"], $links["id"], $links["name_en"], $links["name_en"], $links["id"], $links["descr_en"]);
							}
							while($links=mysql_fetch_array($result));
						}
					}
					else
						echo"<p>This section doesn't exist yet!</p>";
				?>
			</table>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>