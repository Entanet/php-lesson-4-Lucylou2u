<?php
require '../app/Person.php';
$p = new Person();
$people= $p->all();
?>

<html>
<head>
    <title>Lesson 1</title>
    <link rel="stylesheet" href="css/skeleton.css" />
</head>

<body>


    <table class="u-full-width">
        <tbody>
        <tr>
            <th>Name</th>
            <th></th>
        </tr>


<?php
foreach($people as $person){
?>
        <tr>
            <td><?= $person->name ?></td>
            <td><a href="/show.php?id=<?= $person->id ?>">View</a></td>
        </tr>
<?php
}
?>

        </tbody>
    </table>

</body>

</html>