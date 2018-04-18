<?php
require '../app/books.php';
$b = new books();
$BookTitle= $b->all();
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
			<th>BookTitle</th>
        	</tr>
		
<?php
foreach($Book_Library-> as $BookTitle){
?>
		<tr>
			<td><?= $BookTitle->BookTitle ?></td>
			<td><a href="/show.php?id=<?= $BookTitle->id ?>">View</a></td>
		</tr>
<?php
}
?>
	</table>
</body>
</html>
