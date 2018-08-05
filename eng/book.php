<?
	include("../blocks/db.php");
	
	if(isset($_GET['id']))
		$id=$_GET['id'];
	
	$result=mysql_query("SELECT * FROM books WHERE id=$id",$db);
	$book=mysql_fetch_array($result);
	include("blocks/style.php");
?>
<link href="../css/books.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<?
			include("blocks/header.php");
			include("blocks/leftbar.php");
			include("blocks/rightbar.php");
		?>
		<div id="content">
			<h1><?=$book['name_en']?></h1>
			<div class="bookbox">
				<img class="book" src="../files/books/cover/<?=$book['id']?>.jpg" alt="<?=$book['name_en']?>">
				<p class="descr"><?=$book['descr_en']?></p>
			</div><br>
			<?
				$pdf='../files/books/pdf/'.$book['id'].'.pdf';
				$djvu='../files/books/djvu/'.$book['id'].'.djvu';
				
				if(file_exists($pdf))
					echo'<a class="pdf" href="'.$pdf.'">Download in PDF</a>';
				
				if(file_exists($djvu))
					echo'<a class="djvu" href="'.$djvu.'">Download in DjVu</a>';
					
				if($_SESSION['priv']==1)
				{
					echo
					'
					<br>
					<a class="edit" href="edit_book.php?id='.$id.'">Edit description</a>
					<a class="delit" id="deletebook" hyref="delete_book.php?id='.$id.'">Delete this book</a>
					';
				}
			?>
			<br>
			<a id="book_button" class="book_button_en" href="downloads.php"></a>
		</div>
		<?
			include("blocks/footer.php");
		?>
	</div>
</body>
</html>