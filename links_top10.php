<?
	include("blocks/db.php");
	include("blocks/style.php");
?>
<link href="css/links.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1>Полезные ссылки: 10 Лучших</h1>
			<?
				if($_SESSION['priv']==1)
					echo
					'
						<a class="add" href="add_link.php?class='.$class.'">Добавить ссылку</a>
						<a class="add" href="add_link_class.php">Добавить новую категорию</a>
					';
			?>
			<table class="linkstable">
				<?
					if($_SESSION['priv']==1)
					{
						$result=mysql_query("SELECT * FROM links WHERE id=24",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=16",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=117",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=22",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=11",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=114",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=5",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=13",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=57",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=61",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									<a href="edit_link.php?class=%s&id=%s" class="change_link"></a>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $class, $links["id"], $links["descr"]);
					}
					else
					{
						$result=mysql_query("SELECT * FROM links WHERE id=24",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=16",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=117",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=22",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=11",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=114",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=5",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=13",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);

						$result=mysql_query("SELECT * FROM links WHERE id=57",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);
						
						$result=mysql_query("SELECT * FROM links WHERE id=61",$db);
						$links=mysql_fetch_array($result);
						printf(
						'
							<tr class="table">
								<td class="linkimg">
									<a href="%s" target="blank">
										<img src="forlinks/%s.jpg" alt="%s" title="%s">
									</a>
								</td>
								<td>
									%s
								</td>
							</tr>
						', $links["link"], $links["id"], $links["name"], $links["name"], $links["id"], $links["descr"]);
					}
				?>
			</table>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>