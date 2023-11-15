<?php
require_once '../configs/DbConn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data
    $authorFullName = $_POST['AuthorFullName'];
    $authorEmail = $_POST['AuthorEmail'];
    $authorAddress = $_POST['AuthorAddress'];
    $authorBiography = $_POST['AuthorBiography'];
    $authorDateOfBirth = $_POST['AuthorDateOfBirth'];
    $authorSuspended = isset($_POST['AuthorSuspended']) ? 1 : 0;

    // Insert data into the database
    $stmt = $DbConn->prepare("INSERT INTO authorstb (AuthorFullName, AuthorEmail, AuthorAddress, AuthorBiography, AuthorDateOfBirth, AuthorSuspended) 
                              VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->execute([$authorFullName, $authorEmail, $authorAddress, $authorBiography, $authorDateOfBirth, $authorSuspended]);
    // Redirect or display success message
}
?>
