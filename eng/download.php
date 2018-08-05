<?
	session_start();
	
	if(empty($_SESSION['LoggedIn'])&&empty($_SESSION['mail']))
		header('location:login.php');
	
	if(isset($_GET['id_comp']))
		$id_comp=$_GET['id_comp'];
	
	if(isset($_GET['file']))
		$file=$_GET['file'];
	
	if(isset($_GET['comp']))
		$comp=$_GET['comp'];
	
	header('Content-type: multipart/form-data');
	header('Content-Disposition: attachment; filename="'.$file.'"');
	readfile('../files/'.$comp.'/'.$file);
	header('Location: workspace.php?id_comp='.$id_comp);
?>