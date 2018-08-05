<?
	include("blocks/db.php");

	if(isset($_POST['class']))
	{
		$class=$_POST['class'];
		if($class=="")
		{
			unset($class);
		}
	}

	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		if($name=="")
		{
			unset($name);
		}
	}
	
	if(isset($_POST['name_en']))
	{
		$name_en=$_POST['name_en'];
		if($name_en=="")
		{
			unset($name_en);
		}
	}
	
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
			if(isset($name)&&isset($name_en)&&isset($class))
			{
				$result=mysql_query("INSERT INTO link_subclass (name,name_en,class) VALUES ('$name','$name_en','$class')");
				
				if($result)
				{
					$ress=mysql_insert_id();
					mysql_query("ALTER TABLE links ADD COLUMN cat_".$ress." int(1)");
					echo
					"
						<h1 class='success'>Новая категория успешно добавлена!</h1>
						<a class='home' href='index.php'>Вернуться на главную</a>
						<a class='arrow_left' href='links.php'>Вернуться к списку со ссылками</a>
						<a class='add' href='add_link_class.php'>Добавить ещё одну категорию</a>
					";
					include("blocks/backup.php");
				}
				else
				{
					echo
					"
						<h1 class='fail'>Ошибка!</h1>
						<p>
							Не удалось внести изменения. Пожалуйста, заполните ВСЕ поля!<br>
							<a href='add_link_class.php'>Повторить попытку</a>
						</p>
					";
				}
			}
			elseif($_SESSION['priv']==1)
			{
				echo
				'
					<h1>Добавление категории для ссылок</h1>
					<form method="post" action="">
					<label>
						Название:<br>
						<input class="mbf" type="text" name="name">
					</label><br>
					<label>
						Название (английский вариант):<br>
						<input class="mbf" type="text" name="name_en">
					</label><br>
					<label>
						Раздел:
						<select name="class">
				';
				$result3=mysql_query("SELECT * FROM link_class ORDER BY name",$db);
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
						<input class="submit" type="submit" value="Добавить категорию">
					</form>
				';
			}
			else
			{
				echo
				"
					<h1 class='fail'>Ошибка доступа!</h1>
					<p>У Вас недостаточно прав для добавления категорий!</p>
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