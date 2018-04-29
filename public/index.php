<?php
require '../app/Books.php';
$b = new Books();
$bookTitles= $b->all();
?>

<html>
<head>
	<title>My Book Library</title>
	<link rel="stylesheet" href="css/skeleton.css" />
</head>

<body>
	<table class="u-full-width">
        <tbody>
        	<tr>
			<th>bookTitle</th>
        	</tr>
		
<?php
foreach($bookTitles as $book){
?>
		<tr>
			<td><?= $bookTitle->bookTitle ?></td>
			<td><a href="/show.php?id=<?= $bookTitle->id ?>">View</a></td>
		</tr>
<?php
}
?>
	</table>
</body>
</html>
