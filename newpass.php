<?
	$db=mysql_connect("localhost","admin","1234")or die("MySQL Error: ".mysql_error());
	mysql_select_db("smida_eroom",$db) or die("MySQL Error: ".mysql_error());
	
	mysql_query("SET NAMES utf8");//перекодировка в utf-8
	
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
				if(isset($_POST['email']))
				{
					$email=$_POST['email'];
					$user=mysql_query("SELECT * FROM users WHERE mail='$email'",$db);
					$x=mysql_fetch_array($user);
					if($x!="")
					{
						$arr=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','X','Y','Z','1','2','3','4','5','6','7','8','9','0');
						$pass="";
						
						for($i=0;$i<8;$i++)
						{
							$index=rand(0,count($arr)-1);
							$pass.=$arr[$index];
						}
						
						$password=md5(mysql_real_escape_string($pass));
						$result=mysql_query("UPDATE users SET password='$password' WHERE mail='$email'");
						
						if($result=='true')
						{
							$massage=
							"
								<p><strong>Здравствуйте, ".$x["name"]." ".$x["otch"]."!</strong></p>
								<p style='color:blue'>Ваш новый пароль в системе: <strong>".$pass."</strong></p>
								<p>Теперь Вы можете продолжить работу <a href='http://smida.mipt.ru'>на сайте</a>.</p>
								<p><strong>Внимание! Это письмо сгенерировано роботом, на него отвечать не надо!</strong></p>
								<hr>
								
								<p><strong>Dear, ".$x["name_en"]." ".$x["fami_en"]."!</strong></p>
								<p style='color:blue'>Your new password in the system: <strong>".$pass."</strong></p>
								<p>Now you can continue to work on <a href='http://smida.mipt.ru'>the site</a>.</p>
								<p><strong>Attention! This letter is generated automatically, please do not answer!</strong></p>
							";
							mail($email,"Восстановление пароля в системе SMIDA. Regeneration of the password in the SMIDA system.",$massage,"from:SMIDA<robot@smida.mipt.ru>\r\n".'Content-type:text/html;charset=utf-8');
							echo
							'
								<h1 class="success">E-mail найден в базе данных!</h1>
								<p>Новый пароль выслан на <strong>'.$email.'</strong>. Теперь Вы можете <a href="login.php">войти в систему</a>. Не забудте поменять пароль (в настройках профиля) на более надёжный!</p>
							';
							include("blocks/backup.php");
							
						}
						else
						{
							echo
							'
								<h1 class="fail">Ошибка!</h1>
								<p>Что-то пошло не так... Попробуйте ввести адрес <a href="newpass.php">ещё раз</a>, либо свяжитесь с <a href="mailto:natalym@unis.no">Администратором</a> и сообщите о своей проблеме.</p>
							';
						}
					}
					else
					{
						echo
						'
							<h1 class="fail">Ошибка!</h1>
							<p>Указанный почтовый ящик не был найден в Базе Данных. Возможно, Вы ошиблись. Попробуйте ввести адрес <a href="newpass.php">заново</a>, либо свяжитесь с <a href="mailto:natalym@unis.no">Администратором</a> и сообщите о своей проблеме.</p>
						';
					}
				}
				else
				{
					echo
					'
						<h1>Восстановление пароля</h1>
						<form method="post" action="">
							<label>
								Введите E-Mail, на который Вы зарегистрированы:</br>
								<input class="mbf" type="text" name="email">
							</label></br>
							<input class="submit" type="submit" value="Запросить пароль">
						</form>
					';
				}
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>