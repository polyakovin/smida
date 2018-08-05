<?
	include("../blocks/db.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
	
	if(isset($_GET['comp']))
		$comp=$_GET['comp'];
	
	if(isset($_POST['title']))
	{
		$title=$_POST['title'];
		if($title=="")
			unset($title);
	}
	
	if(isset($_POST['title_en']))
	{
		$title_en=$_POST['title_en'];
		if($title_en=="")
			unset($title_en);
	}
	
	if(isset($_POST['text']))
	{
		$text=$_POST['text'];
		if($text=="")
			unset($text);
	}
	
	if(isset($_POST['text_en']))
	{
		$text_en=$_POST['text_en'];
		if($text_en=="")
			unset($text_en);
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
				$result=mysql_query("SELECT * FROM news WHERE id=$id",$db);
				$myrow=mysql_fetch_array($result);
				$user=$myrow["user_id"];
				$result2=mysql_query("SELECT * FROM users WHERE id='$user'",$db);
				$myrow2=mysql_fetch_array($result2);
				$comp=$myrow2["id_comp"];
				
				if(isset($title)&&isset($title_en)&&isset($text)&&isset($text_en))
				{
					$result=mysql_query("UPDATE news SET title=\"$title\",title_en=\"$title_en\",text=\"$text\",text_en=\"$text_en\" WHERE id=$id");
					
					if($result=='true')
						echo
						"
							<h1 class='success'>The news was successfuly edited!</h1>
							<a class='arrow_right' href='news.php?id=".$id."'>View the news</a>
							<a class='home' href='index.php'>Back to homepage</a>
						";
					else
						echo
						"
							<h1 class='fail'>Error!</h1>".$result."
							<p>	
								Can not make the changes. Please complete ALL fields!<br>
								<a href='edit_news.php?id=".$id."'>Repeat the operation</a>
							</p>
						";
				}
				elseif($_SESSION['priv']==1||$_SESSION['id_comp']==$comp)
				{
					print <<<HERE
						<h1>Edit news</h1>
						<form method="post" action="">
							<label>
								Headline:<br>
								<input class="mbf" value="$myrow[title_en]" type="text" name="title_en">
							</label><br>
							<label>
								Headline (in Russian):<br>
								<input class="mbf" value="$myrow[title]" type="text" name="title">
							</label><br>
							<br>
							<label>
								Content:<br>
								<textarea id="editor_1" class="mbf" name="text_en">$myrow[text_en]</textarea>
							</label><br>
							<label>
								Content (in Russian):<br>
								<textarea id="editor_2" class="mbf" name="text">$myrow[text]</textarea>
							</label><br>
							<input class="submit" type="submit" value="Submit changes">
						</form>
HERE;
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
			include("blocks/cleditor.php");
		?>
	</div>
</body>
</html>