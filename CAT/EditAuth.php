
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Author</title>
    
</head>
<body>
    <h2>Edit Author</h2>
    <?php include 'navbar.php'; ?>
    <?php
    require_once 'configs/DbConn.php';

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $authorId = $_POST['authorId'];
        $newAuthorFullName = $_POST['newAuthorFullName'];
        $newAuthorEmail = $_POST['newAuthorEmail'];
        $newAuthorAddress = $_POST['newAuthorAddress'];
        $newAuthorBiography = $_POST['newAuthorBiography'];
        $newAuthorDateOfBirth = $_POST['newAuthorDateOfBirth'];

        // Update author details in the database
        $stmt = $DbConn->prepare("UPDATE authorstb SET 
            AuthorFullName = ?, 
            AuthorEmail = ?, 
            AuthorAddress = ?, 
            AuthorBiography = ?, 
            AuthorDateOfBirth = ? 
            WHERE AuthorId = ?");
        $stmt->execute([$newAuthorFullName, $newAuthorEmail, $newAuthorAddress, $newAuthorBiography, $newAuthorDateOfBirth, $authorId]);

        echo "<p>Author details updated successfully.</p>";
    }

    // Check if author ID is provided in the query parameter
    if (isset($_GET['authorId'])) {
        $authorId = $_GET['authorId'];

        // Retrieve author details from the database
        $stmt = $DbConn->prepare("SELECT * FROM authorstb WHERE AuthorId = ?");
        $stmt->execute([$authorId]);
        $author = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        // If no author ID is provided, display an error message or redirect
        echo "<p>Error: Author ID not provided.</p>";
        // You may also add a redirection header or link to go back to the view page
        exit;
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="authorId" value="<?= $author['AuthorId'] ?>">
        
        <label for="newAuthorFullName">New Author Full Name:</label><br>
        <input type="text" name="newAuthorFullName" value="<?= $author['AuthorFullName'] ?>" required><br>

        <label for="newAuthorEmail">New Author Email:</label><br>
        <input type="email" name="newAuthorEmail" value="<?= $author['AuthorEmail'] ?>" required><br>

        <label for="newAuthorAddress">New Author Address:</label><br>
        <input type="text" name="newAuthorAddress" value="<?= $author['AuthorAddress'] ?>" required><br>

        <label for="newAuthorBiography">New Author Biography:</label><br>
        <textarea name="newAuthorBiography" rows="4" required><?= $author['AuthorBiography'] ?></textarea><br>

        <label for="newAuthorDateOfBirth">New Author Date of Birth:</label><br>
        <input type="date" name="newAuthorDateOfBirth" value="<?= $author['AuthorDateOfBirth'] ?>" required><br>

        <button type="submit">Update</button>
    </form>

    <p><a href="ViewAuthors.php">Back to View Authors</a></p>
</body>
</html>
