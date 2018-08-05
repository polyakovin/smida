<?
	include("blocks/db.php");

	if(isset($_GET['id']))
		$id=$_GET['id'];

	mysql_query("SET NAMES utf8");
	mysql_query("DELETE FROM news WHERE id='$id'");
	include("blocks/backup.php");
	header('Location:index.php?notice=deleted');
?>