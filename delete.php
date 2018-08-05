<?
	include("blocks/db.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];

	if(isset($_GET['file']))
		$file=$_GET['file'];

	if(isset($_GET['comp']))
		$comp=$_GET['comp'];

	if(isset($_GET['id_comp']))
		$id_comp=$_GET['id_comp'];

	mysql_query("SET NAMES utf8");
	mysql_query("DELETE FROM files WHERE id='$id'");
	unlink('files/'.$comp.'/'.$file);
	include("blocks/backup.php");
	header('Location: workspace.php?id_comp='.$id_comp);
?>