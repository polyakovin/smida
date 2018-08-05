<?
	include("../blocks/db.php");
	include("blocks/style.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
?>
<link href="../css/profile.css" rel="stylesheet" type="text/css"/>
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
				$result1=mysql_query("SELECT * FROM users WHERE id=$id",$db);
				$myrow1=mysql_fetch_array($result1);
				$id_comp=$myrow1['id_comp'];
				$result=mysql_query("SELECT * FROM comps WHERE id=$id_comp",$db);
				$myrow=mysql_fetch_array($result);
				
				function addinfo($name,$data)
				{
					if($data!="")
						echo"<pre><strong>".$name.":</strong> <i>".$data."</i></pre>";
				}
			?>
			<h1><?echo$myrow1["fami_en"]." ".$myrow1["name_en"]." ".$myrow1["otch_en"];?></h1>
			<div class="user_block">
				<div class='userbox'>
					<?
						$foto='../files/foto/'.$myrow1["id"].'.jpg';
						
						if(file_exists($foto))
							echo"<img id='user_photo'src='".$foto."'>";
						else
							echo'<div id="user_photo"></div>';
					?>
					<p style="text-align:right">
						<i>
							<?=$myrow1["rang_en"]?></br>
							Representative <strong><?=$myrow["name_en"]?></strong>
						</i>
					</p>
					<pre><strong>Position:</strong> <i><?
														if($myrow1["pos_en"]!="")
															echo$myrow1["pos_en"];
														else
															echo"unknown";
														?></i></pre>
					<pre><strong>E-mail:</strong> <i><a href="mailto:<?=$myrow1["mail"]?>"><?=$myrow1["mail"]?></a></i></pre>
					<?
						addinfo("Business phone",$myrow1["tel1"]);
						addinfo("Mobile phone",$myrow1["tel2"]);
						addinfo("Fax",$myrow1["fax"]);
						
						if(strlen($myrow1["web"])<=38)
							$antitle=$myrow1["web"];
						else
							$antitle=substr($myrow1["web"],0,39)."..";
							
						if($myrow1["web"]!="")
							echo"<pre><strong>Web-page:</strong> <i><a href='".$myrow1["web"]."'>".$antitle."</a></i></pre>";
					?>
				</div>
				<?
					$cvpdf='../files/cv/'.$myrow1["id"].'.pdf';
					$pubpdf='../files/pub/'.$myrow1["id"].'.pdf';
					
					if(file_exists($cvpdf))
						echo"<a class='pdf' href='".$cvpdf."'>Curriculum Vitae</a>";
					
					if(file_exists($pubpdf))
						echo"<a class='pdf' href='".$pubpdf."'>List of publications</a>";
					
					addinfo("Comments",$myrow1["comment"]);
					addinfo("Attached files",$myrow1["attach"]);
				?>
				</br>
			</div>
			<?
				if($_SESSION['priv']==1)
					echo
					'
						<a class="edit" href="edit_user.php?id='.$id.'"">Edit profile</a>
						<a class="delit" id="deleteuser" hyref="delete_user.php?id='.$id.'">Delete user</a>
					';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>