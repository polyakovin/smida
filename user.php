<?
	include("blocks/db.php");
	include("blocks/style.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
?>
<link href="css/profile.css" rel="stylesheet" type="text/css"/>
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
				$resultz=mysql_query("SELECT * FROM comps WHERE id=$id_comp",$db);
				$comp=mysql_fetch_array($resultz);
				
				function addinfo($name,$data)
				{
					if($data!="")
						echo"<pre><strong>".$name.":</strong> <i>".$data."</i></pre>";
				}
			?>
			<h1><?echo$myrow1["fami"]." ".$myrow1["name"]." ".$myrow1["otch"];?></h1>
			<div class="user_block">
				<div class='userbox'>
					<?
						$foto='files/foto/'.$myrow1["id"].'.jpg';
						
						if(file_exists($foto))
							echo"<img id='user_photo'src='".$foto."'>";
						else
							echo'<div id="user_photo"></div>';
					?>
					<p style="text-align:right">
						<i>
							<?=$myrow1["rang"]?></br>
							Представитель <strong><?=$comp["name"]?></strong>
						</i>
					</p>
					<pre><strong>Должность:</strong> <i><?
														if($myrow1["pos"]!="")
															echo$myrow1["pos"];
														else
															echo"не указана";
														?></i></pre>
					<pre><strong>E-mail:</strong> <i><a href="mailto:<?=$myrow1["mail"]?>"><?=$myrow1["mail"]?></a></i></pre>
					<?
						addinfo("Рабочий телефон",$myrow1["tel1"]);
						addinfo("Мобильный телефон",$myrow1["tel2"]);
						addinfo("Факс",$myrow1["fax"]);
						
						if(strlen($myrow1["web"])<=38)
							$antitle=$myrow1["web"];
						else
							$antitle=substr($myrow1["web"],0,39)."..";
						
						if($myrow1["web"]!="")
							echo"<pre><strong>Web-страница:</strong> <i><a href='".$myrow1["web"]."'>".$antitle."</a></i></pre>";
					?>	
				</div>
				<?
					$cvpdf='files/cv/'.$myrow1["id"].'.pdf';
					$pubpdf='files/pub/'.$myrow1["id"].'.pdf';
					
					if(file_exists($cvpdf))
						echo"<a class='pdf' href='".$cvpdf."'>Curriculum Vitae</a>";
					
					if(file_exists($pubpdf))
						echo"<a class='pdf' href='".$pubpdf."'>Список публикаций</a>";
					
					addinfo("Комментари",$myrow1["comment"]);
					addinfo("Присоединённые файлы",$myrow1["attach"]);
				?>
				</br>
				<!--<a class="file_ico" href="mail.php?id=<?/*=$id*/?>">Отослать Приглашение в проект</a>-->
			</div>
			<?
				if($_SESSION['priv']==1)
					echo
					'
						<a class="edit" href="edit_user.php?id='.$id.'"">Редактировать информацию</a>
						<a class="delit" id="deleteuser" hyref="delete_user.php?id='.$id.'">Удалить Пользователя</a>
					';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>