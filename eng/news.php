<?
	include("../blocks/db.php");
	include("blocks/style.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
?>
<link href="../css/news.css" rel="stylesheet" type="text/css"/>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<?
				$result1=mysql_query("SELECT * FROM news WHERE id='$id'",$db);
				$myrow1=mysql_fetch_array($result1);
				$user=$myrow1["user_id"];
				$result2=mysql_query("SELECT * FROM users WHERE id='$user'",$db);
				$myrow2=mysql_fetch_array($result2);
				$comp=$myrow2["id_comp"];
				$result3=mysql_query("SELECT * FROM comps WHERE id='$comp'",$db);
				$myrow3=mysql_fetch_array($result3);
				//$text=preg_replace("#(https?|ftp)://\S+[^\s.,>)\];'\"!?]#",'<a href="\\0" target="blank">\\0</a>',$myrow1["text_en"]);
				$text=$myrow1["text_en"];
				printf(
				'
					<h1 id="newstitle">%s</h1>
					<div id="newstext">%s</div>
					<div id="newsauthor">
						Author: <strong><a href="user.php?id=%s">%s %s</a> [%s], %s</strong>
					</div>
				', $myrow1["title_en"], $text, $myrow2["id"], $myrow2["name_en"], $myrow2["fami_en"], $myrow3["name_en"], $myrow1["date"]);
				
				if($_SESSION['priv']==1||$_SESSION['id_comp']==$comp)
				echo
				'
					<a class="edit" href="edit_news.php?id='.$id.'">Edit content</a>
					<a class="delit" id="deletenews" hyref="delete_news.php?id='.$id.'">Remove news</a>
				';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>