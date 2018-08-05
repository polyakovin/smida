<?
	include("../blocks/db.php");
	
	if(isset($_POST['date']))
	{
		$date=$_POST['date'];
		if($date=="")
			unset($date);
	}
	
	if(isset($_POST['title_en']))
	{
		$title_en=$_POST['title_en'];
		if($title_en=="")
			unset($title_en);
	}
	
	if(isset($_POST['title']))
	{
		$title=$_POST['title'];
		if($title=="")
			unset($title);
	}
	
	if(isset($_POST['text_en']))
	{
		$text_en=$_POST['text_en'];
		if($text_en=="")
			unset($text_en);
	}
	
	if(isset($_POST['text']))
	{
		$text=$_POST['text'];
		if($text=="")
			unset($text);
	}
	
	$userid=$_SESSION['id'];
	
	if(isset($date)&&isset($title)&&isset($title_en))
	{
		$result=mysql_query("INSERT INTO news (date,title,title_en,text,text_en,user_id) VALUES ('$date','$title','$title_en','$text','$text_en','$userid')");
		
		if($result!='true')
			$notice="fail";
		else
			$notice="success";
	}
	
	include("blocks/style.php");
?>
<link href="../css/news.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>News</h1>
			<?
				if($notice=="fail")
					echo"<h3 class='fail' id='warning'>Something went wrong... Try again.</h3>";
					
				if($notice=="success")
					echo"<h3 class='success' id='warning'>The news published successfully!</h3>";
					
				if($_GET['notice']=="deleted")
					echo'<h3 class="success" id="warning">The news successfully deleted!</h3>';
			?>
			<div id="news">
				<?
					$result1=mysql_query("SELECT * FROM news ORDER BY id DESC",$db);
					$myrow1=mysql_fetch_array($result1);
					
					do
					{
						printf(
						'
							<h3>
								<a href="news.php?id=%s"><strong>[%s]:</strong> %s</a>
							</h3><br>
						', $myrow1["id"], $myrow1["date"], $myrow1["title_en"]);
					}
					while($myrow1=mysql_fetch_array($result1));
				?>
			</div>
			<a class="add" id="addnews">Publish news!</a>
			<form method="post" id="newnews">
				<h2>Publishing news</h2><br>
				<input type="hidden" name="date" value='<? echo date(d).".".date(m).".".date(Y);?>'>
				<label>
					Headline<br>
					<input class="mbf newstitle" type="text" name="title_en">
				</label><br>
				<br>
				<label>
					Headline (in russian)<br>
					<input class="mbf newstitle" type="text" name="title">
				</label><br>
				<label>
					Content<br>
					<textarea id="editor_1" class="mbf" name="text_en"></textarea>
				</label><br>
				<label>
					Content (in russian)<br>
					<textarea id="editor_2" class="mbf" name="text"></textarea>
				</label><br>
				<input type="submit" class="submit" value="Опубликовать">
			</form>
		</div>
		<?
			include("blocks/footer.php");
			include("blocks/cleditor.php");
		?>
	</div>
</body>
</html>