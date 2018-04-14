<?php
require '../app/books.php';
$b = new books();
$booktitle= $b->all();
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
			<th>booktitle</th>
        	</tr>
		
<?php
foreach($My_Library-> as $booktitle){
?>
		<tr>
			<td><?= $booktitle->booktitle ?></td>
			<td><a href="/show.php?id=<?= $booktitle->id ?>">View</a></td>
		</tr>
<?php
}
?>
	</table>
</body>
</html>
