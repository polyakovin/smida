<div id="sidebar-b">
	<div class="menub">
		<ul>
			<li><a id="er" class="rus" href="eng/index.php">English Version</a></li>
			
			<li><a href="login.php">Ваш Профиль</a></li>
			<?
				if($_SESSION['priv']==1)
					echo'<li class="links"><a href="settings.php">Администрирование</a></li>';
			?>
			
			<li class="links">Календарь</li>
			<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=200&amp;wkst=1&amp;hl=en_GB&amp;bgcolor=%23cccccc&amp;src=smida.mipt.ru%40gmail.com&amp;color=%23875509&amp;ctz=Europe%2FMoscow" style=" border:solid 1px #777 " width="150" height="200" frameborder="0" scrolling="no"></iframe>

			<?
				if($_SESSION['priv']==1)
				{
					echo
					'
						<div class="feedback" title="Присылайте свои мнения, замечания, предложения, благодарности через эту форму. Администрация сайта будет очень рада Вашим письмам и, благодаря ним, наш сервис станет многофункциональным и удобным!">
							<li class="links">Обратная связь</li>
					';

				if(isset($_POST['feedback']))
				{
					$feedback=$_POST['feedback'];
					if($feedback=="")
					{
						unset($feedback);
					}
				}

				if(isset($feedback))
				{
					mail("noggatur@ya.ru","Обратная связь SMIDA",$feedback,"from:".$_SESSION['mail']."\r\n"."Content-type:text/html;charset=utf-8");
					echo"<h3 class='success' id='warning' align='center'>Спасибо! :-)</h3>";
				}

				echo
				'
						<form method="post">
							<label>
								<div></div>
								<textarea class="mbf" name="feedback"></textarea>
							</label>
							<input type="submit" value="Отправить">
						</form>
					</div>';}
			?>
		</ul>
	</div>
</div>