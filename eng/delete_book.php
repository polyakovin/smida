<?
	include("../blocks/db.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
	
	mysql_query("SET NAMES utf8");
	mysql_query("DELETE FROM books WHERE id='$id'");
	$cover='../files/books/cover/'.$id.'.jpg';
	$djvu='../files/books/djvu/'.$id.'.djvu';
	$pdf='../files/books/pdf/'.$id.'.pdf';
	
	if(file_exists($cover))
		unlink($cover);
	
	if(file_exists($djvu))
		unlink($djvu);
	
	if(file_exists($pdf))
		unlink($pdf);
	
	header('Location:library.php?x=The book was successfully deleted!');
?>