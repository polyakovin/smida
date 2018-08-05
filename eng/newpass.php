<?
	$db=mysql_connect("localhost","admin","1234")or die("MySQL Error: ".mysql_error());//подключение к базе
	mysql_select_db("smida_eroom",$db)or die("MySQL Error: ".mysql_error());
	
	mysql_query("SET NAMES utf8");//перекодировка в utf-8
	
	include("blocks/style.php");
?>
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
						$arr=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','X','Y','Z','1','2','3','4','5','6','7','8','9','0');$pass="";
						
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
								<p><strong>Dear, ".$x["name_en"]." ".$x["fami_en"]."!</strong></p>
								<p style='color:blue'>Your new password in the system: <strong>".$pass."</strong></p>
								<p>Now you can continue to work on <a href='http://smida.mipt.ru'>the site</a>.</p>
								<p><strong>Attention! This letter is generated automatically, please do not answer!</strong></p>
								<hr>
								
								<p><strong>Здравствуйте, ".$x["name"]." ".$x["otch"]."!</strong></p>
								<p style='color:blue'>Ваш новый пароль в системе: <strong>".$pass."</strong></p>
								<p>Теперь Вы можете продолжить работу <a href='http://smida.mipt.ru'>на сайте</a>.</p>
								<p><strong>Внимание! Это письмо сгенерировано роботом, на него отвечать не надо!</strong></p>
							";
							mail($email,"Regeneration of the password in the SMIDA system. Восстановление пароля в системе SMIDA.",$massage,"from:SMIDA<robot@smida.mipt.ru>\r\n".'Content-type:text/html;charset=utf-8');
							echo
							'
								<h1 class="success">E-mail found in the database!</h1>
								<p>New password was sent to <strong>'.$email.'</strong>. Now you can <a href="login.php">login</a>. Do not forget to change your password (in the profile settings) to more reliable!</p>
							';
						}
						else
							echo
							'
								<h1 class="fail">Error!</h1>
								<p>Something went wrong ... Try to enter the address <a href="newpass.php">again</a>, or contact with <a href="mailto:natalym@unis.no">Administrator</a> and report your problem.</p>
							';
					}
					else
						echo
						'
							<h1 class="fail">Error!</h1>
							<p>Specified E-mail was not found in the database.You may have made ​​a mistake. Try to enter the address <a href="newpass.php">again</a>, or contact with <a href="mailto:natalym@unis.no">Administrator</a> and report your problem.</p>
						';
				}
				else
					echo
					'
						<h1>Password recovery</h1>
						<form method="post" action="">
							<label>
								Enter your E-Mail address:</br>
								<input class="mbf" type="text" name="email">
							</label></br>
							<input class="submit" type="submit" value="Request password">
						</form>
					';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>