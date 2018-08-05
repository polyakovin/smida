<?
	include("../blocks/db.php");
	include("blocks/style.php");
?>
<link href="../css/users.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?include("blocks/header.php");
		include("blocks/leftbar.php");
		include("blocks/rightbar.php");?>
		<div id="content">	
			<?
				if(!empty($_POST['email']) && !empty($_POST['password'])) 
				{
					$name=mysql_real_escape_string($_POST['name']);
					$fami=mysql_real_escape_string($_POST['fami']);
					$otch=mysql_real_escape_string($_POST['otch']);
					$rang=mysql_real_escape_string($_POST['rang']);
					$name_en=mysql_real_escape_string($_POST['name_en']);
					$fami_en=mysql_real_escape_string($_POST['fami_en']);
					$otch_en=mysql_real_escape_string($_POST['otch_en']);
					$rang_en=mysql_real_escape_string($_POST['rang_en']);
					$pass=mysql_real_escape_string($_POST['password']);
					$comp=mysql_real_escape_string($_POST['comp']);
					$priv=mysql_real_escape_string($_POST['priv']);
					$password=md5(mysql_real_escape_string($_POST['password'])); 
					$email=mysql_real_escape_string($_POST['email']);  
					$checkusername = mysql_query("SELECT * FROM users WHERE mail='".$email."'"); 
					
					if(mysql_num_rows($checkusername) == 1) 
					{
						echo"<h1 class='fail'>Error!</h1>"; 
						echo
						"
							<p>
								User with this email is already registered!</br>
								<a href='register.php'>Creat another user -></a>
							</p>
						";
					} 
					else 
					{
						$registerquery = mysql_query("INSERT INTO users (name,fami,otch,rang,name_en,fami_en,otch_en,rang_en,id_comp,priv,password,mail) VALUES('$name','$fami','$otch','$rang','$name_en','$fami_en','$otch_en','$rang_en','$comp','$priv','$password','$email')");
						
						if($registerquery) 
						{
							$massage=
							"
								<p><strong>Здравствуйте, ".$name." ".$otch."!</strong></p>
								<p>Для Вас был создан аккаунт в информационном пространстве проекта SMIDA (e-room - <a href='http://smida.mipt.ru'>smida.mipt.ru</a>). 
								Доступ в личный кабинет на сайте осуществляется с использованием электронной почты.</p>
								<p style='color:blue'>Ваш временный пароль: <strong>".$pass."</strong></p>
								<p>Управлять своей учётной записью и поменять пароль можно в <a href='http://smida.mipt.ru/login.php'>личном кабинете.</a></p>
								<p>Если это действие было совершено без Вашего ведома и желания, пожалуйста, сообщите об этом координатору проекта SMIDA <a href='mailto:nataly.marchenko@unis.no'>Марченко Н.A.</a></p><br>
								
								<p><strong>Коротко о проекте SMIDA</strong></p>
								<p>Цель проекта - развитие образовательного и научно-исследовательского сотрудничества между норвежскими и российскими университетами для повышения базовых знаний, необходимых для устойчивого развития Арктических технологий.</p>
								<p>Проект ориентирован на развитие морских и прибрежных регионов в Баренцевом и Карском морях. Основные виды деятельности в рамках проекта: обучение и обмен магистров и аспирантов, создание условий для плодотворного сотрудничества между учеными и преподавателями, синхронизация программ обучения в норвежских и российских университетах и организация совместных полевых работ на Шпицбергене и в Российской Арктике.</p>
								<p>Заходите на <a href='http://www.unis.no/20_RESEARCH/2050_Arctic_Technology/Smida/homepage.htm'>интернет-страничку</a> нашего проекта, теперь и <a href='http://faki.fizteh.ru/smida.html'>на русском языке</a>.</p>
								<p><strong>Внимание! Это письмо сгенерировано роботом, на него отвечать не надо!</strong></p>
								<hr>
								
								<p><strong>Dear, ".$name_en." ".$fami_en."!</strong></p>
								<p>An account in the informational space of the SMIDA project was created for you (e-room - <a href='http://smida.mipt.ru'>smida.mipt.ru</a>). You can use this e-mail address to enter into your personal cabinet.</p>
								<p style='color:blue'>Your temporary password: <strong>".$pass."</strong></p>
								<p>You can manage your account and change the password in <a href='http://smida.mipt.ru/login.php'>your cabinet.</a></p>
								<p>If this action was carried out without your knowledge and desire, please report it to the SMIDA project coordinator <a href='mailto:nataly.marchenko@unis.no'>Mrs. N. Marchenko</a></p><br>
								
								<p><strong>About SMIDA Project</strong></p>
								<p>The aim of the project is to develop the educational and research cooperation between Norwegian and Russian Universities to increase the knowledge required for sustainable development of Arctic offshore and coastal Technology.</p>
								<p>The project study is focused on the regions of offshore and coastal development in the Barents and Kara Seas. Main activities within the projects are the teaching and exchange of MSc/PhD students, increase of communications between academic, technical and administrative staff, synchronization of the teaching procedures in Norwegian and Russian Universities and organizing of joined field works in Svalbard and the Russian Arctic.</p>
								<p>Visit our project <a href='http://www.unis.no/20_RESEARCH/2050_Arctic_Technology/Smida/homepage.htm'>home page</a>.</p>
								<p><strong>Attention! This letter is generated automatically, please do not answer!</strong></p>
							";
							mail($email,"Регистрация в проекте SMIDA. Registration is SMIDA project.",$massage,"from:SMIDA<robot@smida.mipt.ru>\r\n".'Content-type:text/html;charset=utf-8');
							echo
							"
								<h1 class='success'><strong>".$name_en." ".$fami_en."</strong> was invited to the SMIDA system!</h1>
								<a class='arrow_left' href='users.php'>Back to the list of users</a>
								<a class='add' href='register.php'>Add another user</a>
							";
						}
						else 
						{
							echo"<h1 class='fail'>Error!</h1>"; 
							echo"<p>Try to re-register or contact your administrator.</p>";
						}
					}
				} 
				else 
				{
					if($_SESSION['priv']==1)
					{
						echo
						'
							<h1>Create an account</h1>
							<form method="post" action="#" align="center">
								<label for="email">
									E-mail:</br>
									<input class="mbf" type="text" name="email" id="email">
								</label></br>
								<hr>
								
								<label for="fami">
									Surname (in Russian):</br>
									<input class="mbf" type="text" name="fami" id="fami">
								</label></br>
								<label for="fami_en">
									Surname:</br>
									<input class="mbf" type="text" name="fami_en" id="fami_en">
								</label></br>
								<hr>
								
								<label for="name">
									Name (in Russian):</br>
									<input class="mbf" type="text" name="name" id="name">
								</label></br>
								<label for="name_en">
									Name:</br>
									<input class="mbf" type="text" name="name_en" id="name_en"/>
								</label></br>
								<hr>
								
								<label for="otch">
									Patronymic (in Russian):</br>
									<input type="text" name="otch" id="otch"/>
								</label></br>
								<label for="otch_en">
									Patronymic:</br>
									<input type="text" name="otch_en" id="otch_en"/>
								</label></br>
								<hr>
								
								<label for="rang">
									Project position (in Russian):</br>
									<input class="mbf" type="text" name="rang" id="rang">
								</label></br>
								<label for="rang_en">
									Project position:</br>
									<input class="mbf" type="text" name="rang_en" id="rang_en">
								</br>
								<hr>
								
								<input type="hidden" name="password" id="password" value="
						';
						$arr = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','X','Y','Z','1','2','3','4','5','6','7','8','9','0');$pass = "";for($i=0;$i<8;$i++){$index=rand(0,count($arr)-1);$pass.=$arr[$index];}echo$pass;
						echo
						'
								"/>
								<table id="endreg">
									<tr>
										<td align="right">
											<label for="comp">Organisation:</label>
										</td>
										<td align="left">
											<select type="text" name="comp" id="comp">
						';
						$result3=mysql_query("SELECT * FROM comps ORDER BY id",$db);
						$myrow3=mysql_fetch_array($result3);
						
						do
						{
							printf(
							'
								<option value="%s">%s</option>
							', $myrow3["id"], $myrow3["name"]);
						}
						while($myrow3=mysql_fetch_array($result3));
						
						echo
						'
											</select>
										</td>
									</tr>
									<tr>
										<td align="right">
											<label for="priv">Privilege:</label>
										</td>
										<td align="left">
											<select type="text" name="priv" id="priv">
												<option value="2">User</option>
												<option value="1">Administrator</option>
											</select>
										</td>
									</tr>
								</table>
								<input type="submit" class="submit" value="Registration"/>
							</form>
						';
					}
					else
						echo
						"
							<h1 class='fail'>Access is denied!</h1>
							<p>You are not allowed to add users. You can offer the administrator has placed a new participant in the project.</p>
						";
				} 
			?> 
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>