<?php
require_once('constants.php');

try {
    $DbConn = new PDO("mysql:host=$hostname; dbname=$dbname", $username, $userpass);
    $DbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $successMessage = "Connected successfully";
} catch(PDOException $e) {
    $errorMessage = "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database Connection</title>
    
</head>
<body>

<?php
if (isset($successMessage)) {
    echo '<div id="successMessage">' . $successMessage . '</div>';
}
if (isset($errorMessage)) {
    echo '<div id="errorMessage">' . $errorMessage . '</div>';
}
?>



<script>
document.addEventListener('DOMContentLoaded', function () {
    var successMessage = document.getElementById('successMessage');
    if (successMessage) {
        setTimeout(function () {
            successMessage.style.display = 'none';
        }, 5000); // Hide the message after 5 seconds 
    }
});
</script>

</body>
</html>
