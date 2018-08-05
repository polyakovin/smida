<?
	include("../blocks/db.php");
	
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
			<h1>The SMIDA Users</h1><br/>
			<?=$x?>
			<?=$y?>
			<table>
				<tr>
					<th>
						<strong>Surname and Name</strong>
					</th>
					<th>
						<strong>Company</strong>
					</th>
					<th>
						<strong>Phone</strong>
					</th>
					<th>
						<strong>E-mail</strong>
					</th>
				</tr>
				<?
					$result1=mysql_query("SELECT * FROM users ORDER BY fami_en",$db);
					$myrow1=mysql_fetch_array($result1);
					
					do
					{
						$id_comp=$myrow1['id_comp'];
						$result=mysql_query("SELECT * FROM comps WHERE id=$id_comp",$db);
						$myrow=mysql_fetch_array($result);
						
						if($myrow1["tel1"]!="")
							$tel=$myrow1["tel1"];
						else
							$tel="<i>unknown</i>";
							
						printf(
						'
							<tr class="table">
								<td>
									<a href="user.php?id=%s">%s %s</a>
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
						', $myrow1["id"], $myrow1["fami_en"], $myrow1["name_en"], $myrow["name_en"], $tel, $myrow1["mail"], $myrow1["mail"]);
					}
					while($myrow1=mysql_fetch_array($result1));
				?>
			</table>
			<?
				if($_SESSION['priv']==1)
					echo
					'
						</br>
						<a class="add" href="register.php">Add User</a>
					';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>