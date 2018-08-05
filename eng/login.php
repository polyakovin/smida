<?
	session_start();//сооздание сессии
	
	$db=mysql_connect("localhost","admin","1234")or die("MySQL Error: ".mysql_error());//подключение к базе
	mysql_select_db("smida_eroom",$db)or die("MySQL Error: ".mysql_error());
	
	mysql_query("SET NAMES utf8");//перекодировка в utf-8
	
	include("blocks/style.php");
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
				if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['mail'])) 
				{
					$userid=$_SESSION['id'];
					$user=mysql_fetch_array(mysql_query("SELECT * FROM users WHERE id=$userid"));
					$id_comp=$user['id_comp'];
					$result=mysql_query("SELECT * FROM comps WHERE id=$id_comp",$db);
					$myrow=mysql_fetch_array($result);
					
					function addinfo($name,$data)
					{
					if($data!="")
						echo"<pre><strong>".$name.":</strong> <i>".$data."</i></pre>";
					}
			?>
			<h1>Hello, <b><?=$user["name_en"]?> <?=$user["fami_en"]?></b>!</h1>
			<div class="user_block">
				<div class='userbox'>
					<?
							$foto='../files/foto/'.$user["id"].'.jpg';
							if(file_exists($foto))
								echo
								"
									<img id='user_photo'src='".$foto."'>
								";
							else
								echo
								'
									<div id="user_photo"></div>
								';
					?>
					<p style="text-align:right">
						<i>
							<?=$user["rang_en"]?></br>
							<strong><?=$myrow["name_en"]?></strong> Representative
						</i>
					</p>
					<pre><strong>Position:</strong> <i><?
														if($user["pos_en"]!="")
															echo$user["pos_en"];
														else
															echo"unknown";
														?></i></pre>
					<?
							addinfo("E-mail",$user["mail"]);
							addinfo("Business phone",$user["tel1"]);
							addinfo("Mobile phone",$user["tel2"]);
							addinfo("Fax",$user["fax"]);
							
							if(strlen($user["web"])<=38)
								$antitle=$user["web"];
							else
								$antitle=substr($user["web"],0,39)."..";
							
							if($user["web"]!="")
								echo"<pre><strong>Web-page:</strong> <i><a href='".$user["web"]."'>".$antitle."</a></i></pre>";
					?>
				</div>
				<?
						$cvpdf='../files/cv/'.$user["id"].'.pdf';
						$pubpdf='../files/pub/'.$user["id"].'.pdf';
						
						if(file_exists($cvpdf))
							echo"<a class='pdf' href='".$cvpdf."'>Curriculum Vitae</a>";
						
						if(file_exists($pubpdf))
							echo"<a class='pdf' href='".$pubpdf."'>List of publications</a>";
							
						addinfo("Comments",$user["comment"]);
						addinfo("Attached files",$user["attach"]);
				?>
				</br>
			</div>
			<a class='edit' href='edit_profile.php'>Edit profile</a>
			<a class="lock" id="changepass">Change password</a>
			<form method="post" id="newpass" action="changepass.php">
				<label>
					Old password:</br>
					<input class="mbf" type="password" name="oldpass">
				</label></br> 
				<label>
					New password:</br>
					<input class="mbf" type="password" name="newpass">
				</label></br> 
				<label>
					Re-enter password:</br>
					<input class="mbf" type="password" name="newpass2">
				</label></br>
				<input class="submit" type="submit" value="Change password">
			</form>
			<a class="logout" href="logout.php">Logout</a>
			<?
				} 
				elseif(!empty($_POST['email'])&&!empty($_POST['password'])) 
				{
					$email = mysql_real_escape_string($_POST['email']); 
					$password = md5(mysql_real_escape_string($_POST['password'])); 
					$checklogin = mysql_query("SELECT * FROM users WHERE mail='".$email."' AND password='".$password."'"); 
					
					if(mysql_num_rows($checklogin)==1)
					{
						$row=mysql_fetch_array($checklogin);
						$_SESSION['mail']=$email;
						$_SESSION['priv']=$row['priv'];
						$_SESSION['id_comp']=$row['id_comp'];
						$_SESSION['id']=$row['id'];
						$_SESSION['LoggedIn']=1;
						echo
						"
							<h1 class='success'>You have successfully logged in!</h1>
							<a class='home' href='index.php'>Back to homepage</a>
							<a class='profile' href='login.php'>Edit profile</a>
						";
					} 
					else
						echo
						"
							<h1 class='fail'>Error!</h1>
							<p>E-mail or password is incorrect. <a href=\"login.php\">Try again</a>.</p>
						";
				} 
				else
					echo
					'
						<h1>Login</h1> 
						<form method="post" action="#">
							<label for="email">
								E-mail:</br>
								<input class="mbf" type="text" name="email">
							</label></br> 
							<label for="password">
								Password:</br>
								<input class="mbf" type="password" name="password">
							</label></br> 
							<input class="submit" type="submit" value="Login">
						</form>
						<p class="right"><a href="newpass.php">Forgot the password?</a></p> 
						<p>In the absence of an account, contact <a href="mailto:natalym@unis.no">administrator</a>.</p> 
					';
			?>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>