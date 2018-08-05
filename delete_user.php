<?
	include("blocks/db.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];

	mysql_query("SET NAMES utf8");

	if($id!=$_SESSION['id'])
	{
		mysql_query("DELETE FROM users WHERE id='$id'");
		include("blocks/backup.php");
		header('Location:users.php?x=Пользователь успешно удалён!');
	}
	else
		header('Location:users.php?y=Ошибка! Вы не можете удалить самого себя! Но вы можете попросить другого администратора сделать это за Вас.');
?>