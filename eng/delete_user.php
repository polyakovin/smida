<?
	include("../blocks/db.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
	
	mysql_query("SET NAMES utf8");
	
	if($id!=$_SESSION['id'])
	{
		mysql_query("DELETE FROM users WHERE id='$id'");
		header('Location:users.php?x=User successfully deleted!');
	}
	else
		header('Location:users.php?y=Error! You can not delete yourself! But you can ask another administrator to do it for you.');
?>