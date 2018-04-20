<html>
<head>
    <title>My books</title>
    <link rel="stylesheet" href="css/skeleton.css" />
</head>

<?php
$id = $_GET['id'];
require '../app/Books.php';
$p = new Books();
$books= $p->show($id)


?>

<body>

    <h1>Profile #<?= $books->id ?></h1>

    <table class="u-full-width">
        <tbody>
        <tr>
            <th>BookTitle</th>
            <td><?= $books->BookTitle ?></td>
        </tr>
        <tr>
            <th>Author</th>
            <td><?= $books->Author ?></td>
        </tr>
        <tr>
            <th>Category</th>
            <td><?= $books->Category ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $books->Published ?></td>
        </tr>
        <tr>
            <th>Rating</th>
            <td><?= $books->Rating ?></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><?= $books->Comments ?></td>
        </tr>
        
        </tbody>
    </table>

</body>



</html>
