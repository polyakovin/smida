<?
	include("blocks/db.php");
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
				if(isset($_POST['oldpass'])&&isset($_POST['newpass'])&&isset($_POST['newpass2']))
				{
					$userid=$_SESSION['id'];
					$user=mysql_fetch_array(mysql_query("SELECT password,name,otch,name_en,fami_en FROM users WHERE id=$userid"));
					
					if($user["password"]==md5(mysql_real_escape_string($_POST['oldpass'])))
					{
						if($_POST['newpass']==$_POST['newpass2'])
						{
							$password=md5(mysql_real_escape_string($_POST['newpass']));
							if(mysql_query("UPDATE users SET password='$password' WHERE id='$userid'"))
							{
								echo
								"
									<h1 class='success'>Пароль от системы изменён и выслан Вам на почту!</h1>
									<a class='arrow_left' href='login.php'>Вернуться в профиль</a>
								";
								$massage=
								"
									<p><strong>Здравствуйте, ".$user["name"]." ".$user["otch"]."!</strong></p>
									<p style='color:blue'>Ваш новый пароль в системе: <strong>".$_POST['newpass']."</strong></p>
									<p>Теперь Вы можете продолжить работу <a href='http://smida.mipt.ru'>на сайте</a>.</p>
									<p><strong>Внимание! Это письмо сгенерировано роботом, на него отвечать не надо!</strong></p>
									<hr>
									
									<p><strong>Dear, ".$user["name_en"]." ".$user["fami_en"]."!</strong></p>
									<p style='color:blue'>Your new password in the system: <strong>".$_POST['newpass']."</strong></p>
									<p>Now you can continue to work on <a href='http://smida.mipt.ru'>the site</a>.</p>
									<p><strong>Attention! This letter is generated automatically, please do not answer!</strong></p>
								";
								mail($_SESSION['mail'],"Изменение пароля в системе SMIDA. Changing the password in the SMIDA system.",$massage,"from:SMIDA<robot@smida.mipt.ru>\r\n".'Content-type:text/html;charset=utf-8');
								include("blocks/backup.php");
							}
							else
								echo
								"
									<h1 class='fail'>Ошибка!</h1>
									<p>Не удалось связаться с базой данных. Попробуйте <a href='login.php'>ещё раз</a>, пожалуйста.</p>
								";
						}
						else
							echo
							"
								<h1 class='fail'>Ошибка!</h1>
								<p>Пароли не совпадают! Попробуйте <a href='login.php'>ещё раз</a>, пожалуйста.</p>
							";
					}
					else
						echo
						"
							<h1 class='fail'>Ошибка!</h1>
							<p>Неверен старый пароль! Попробуйте <a href='login.php'>ещё раз</a>, пожалуйста.</p>
						";
				}
				else
					echo
					"
						<h1 class='fail'>Ошибка!</h1>
						<p>Вы не заполнили все поля! Попробуйте <a href='login.php'>ещё раз</a>, пожалуйста.</p>
					";
			?> 
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>