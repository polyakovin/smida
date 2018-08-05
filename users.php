<?
	include("blocks/db.php");

	if(isset($_GET['x']))
		$x='<h3 class="success" id="warning">'.$_GET['x'].'</h3>';

	if(isset($_GET['y']))
		$y='<h3 class="fail" id="warning">'.$_GET['y'].'</h3>';
	
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
			<h1>Пользователи системы SMIDA</h1><br/>
			<?=$x?>
			<?=$y?>
			<table>
				<tr>
					<th>
						<strong>Фамилия И.О.</strong>
					</th>
					<th>
						<strong>Компания</strong>
					</th>
					<th>
						<strong>Телефон</strong>
					</th>
					<th>
						<strong>E-mail Адрес</strong>
					</th>
				</tr>
				<?
					$result1=mysql_query("SELECT * FROM users ORDER BY fami",$db);
					$myrow1=mysql_fetch_array($result1);
					
					do
					{
						$id_comp=$myrow1['id_comp'];
						$result=mysql_query("SELECT * FROM comps WHERE id=$id_comp",$db);
						$myrow=mysql_fetch_array($result);
					
						if($myrow1["tel1"]!="")
							$tel=$myrow1["tel1"];
						else
							$tel="<i>не указан</i>";
							
						printf(
						'
							<tr class="table">
								<td>
									<a href="user.php?id=%s">%s %s.%s.</a>
								</td>
								<td align="center">
									%s
								</td>
								<td>
									%s
								</td>
								<td>
									<a href="mailto:%s">%s</a>
								</td>
							</tr>
						', $myrow1["id"], $myrow1["fami"], substr($myrow1["name"],0,2), substr($myrow1["otch"],0,2), $myrow["name"], $tel, $myrow1["mail"], $myrow1["mail"]);
					}
					while($myrow1=mysql_fetch_array($result1));
				?>
			</table>
			<?
				if($_SESSION['priv']==1)
					echo'</br><a class="add" href="register.php">Добавить пользователя</a>';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>