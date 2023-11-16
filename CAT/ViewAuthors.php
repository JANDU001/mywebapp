<!DOCTYPE <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<?php

require_once('configs/DbConn.php');

$stmt = $DbConn->prepare("SELECT * FROM authorstb ORDER BY AuthorFullName ASC");
$stmt->execute();
$authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Display authors -->
<table>
    <tr>
        <th>Author Id</th>
        <th>Author Full Name</th>
        <th>AuthorEmail</th>
        <th>AuthorAddress</th>
        <th>AuthorBiography</th>
        <th>AuthorDateOfBirth</th>

        
    </tr>
    <?php foreach ($authors as $author): ?>
        <tr>
            <td><?php echo $author['AuthorId']; ?></td>
            <td><?php echo $author['AuthorFullName']; ?></td>
            <td><?php echo $author['AuthorEmail']; ?></td>
            <td><?php echo $author['AuthorAddress']; ?></td>
            <td><?php echo $author['AuthorBiography']; ?></td>
            <td><?php echo $author['AuthorDateOfBirth']; ?></td>
            
        </tr>
    <?php endforeach; ?>
</table>

        <script src="" async defer></script>
    </body>
</html>