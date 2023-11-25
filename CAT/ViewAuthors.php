<?php require_once('configs/DbConn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Author</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />

    



</head>
    
<body class="view-authors">
    <?php include 'navbar.php'; ?>
    <div class="header">
        <h1>Registered Authors</h1>
    </div>

    <div class="container">
        <b><p>Here are the registered Authors</p></b>
    </div>

    <?php
    $stmt = $DbConn->prepare("SELECT * FROM authorstb ORDER BY AuthorFullName ASC");
    $stmt->execute();
    $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Initialize the serial number
    $sn = 1;
?>

<!-- Display authors -->

    <table class="table table-striped table-hover">

    <thead>
        <tr>
            
            <th scope="col">Author Id</th>
            <th scope="col">Author Full Name</th>
            <th scope="col">Author Email</th>
            <th scope="col">Author Address</th>
            <th scope="col">Author Biography</th>
            <th scope="col">Author Date of Birth</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($authors as $author): ?>
            <tr>
                <td><?php echo $sn; $sn++; ?></td>
               
                <td><?php echo $author['AuthorFullName']; ?></td>
                <td><?php echo $author['AuthorEmail']; ?></td>
                <td><?php echo $author['AuthorAddress']; ?></td>
                <td>
                    <?php
                        $shown_string = implode(' ', array_slice(str_word_count(addslashes($author["AuthorBiography"]), 2), 0, 10)) . ' ... ';
                        print $shown_string;
                    ?>
                </td>
                
                <td><?php echo $author['AuthorDateOfBirth']; ?></td>
                <td><a href="EditAuth.php?authorId=<?= $author['AuthorId'] ?>">Edit</a></td>
                <td><a href="DelAuth.php?authorId=<?= $author['AuthorId'] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
        

    <script src="" async defer></script>
</body>
</html>
