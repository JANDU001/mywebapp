<!-- DelAuth.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Author</title>
</head>
<body>
    
    <h2>Delete Author</h2>
    <?php include 'navbar.php'; ?>
    <?php
    require_once 'configs/DbConn.php';

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the selected author ID
        $authorIdToDelete = $_POST['authorIdToDelete'];

        // Perform the deletion
        $stmt = $DbConn->prepare("DELETE FROM authorstb WHERE AuthorId = ?");
        $stmt->execute([$authorIdToDelete]);

        echo "<p>Author deleted successfully.</p>";
    }

    // Retrieve the list of authors
    $stmt = $DbConn->prepare("SELECT * FROM authorstb ORDER BY AuthorFullName ASC");
    $stmt->execute();
    $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <form action="" method="post">
        <label for="authorIdToDelete">Select Author to Delete:</label>
        <select name="authorIdToDelete" required>
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['AuthorId'] ?>"><?= $author['AuthorFullName'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Delete</button>
    </form>

    <p><a href="ViewAuthors.php">Back to View Authors</a></p>
</body>
</html>

