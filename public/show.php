<html>
<head>
    <title>My books</title>
    <link rel="stylesheet" href="css/skeleton.css" />
</head>

<?php
$id = $_GET['id'];
require '../app/Books.php';
$b = new books();
$books= $b->show($id)


?>

<body>

    <h1>Profile #<?= $books->id ?></h1>

    <table class="u-full-width">
        <tbody>
        <tr>
            <th>bookTitle</th>
            <td><?= $books->bookTitle ?></td>
        </tr>
        <tr>
            <th>author</th>
            <td><?= $books->author ?></td>
        </tr>
        <tr>
            <th>category</th>
            <td><?= $books->category ?></td>
        </tr>
        <tr>
            <th>published</th>
            <td><?= $books->published ?></td>
        </tr>
        <tr>
            <th>rating</th>
            <td><?= $books->rating ?></td>
        </tr>
        <tr>
            <th>comments</th>
            <td><?= $books->comments ?></td>
        </tr>
        
        </tbody>
    </table>

</body>



</html>
