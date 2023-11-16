<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Author Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <form action="processes/AutRegistration.php" method="post">
        <!--form  for Author details -->
        AuthorFullName: <input type="text" name="AuthorFullName"><br>
        AuthorEmail: <input type="text" name="AuthorEmail"><br>
        AuthorAddress: <input type="text" name="AuthorAddress"><br>
        AuthorBiography: <textarea name="AuthorBiography"></textarea><br>
        AuthorDateOfBirth: <input type="date" name="AuthorDateOfBirth"><br>
        AuthorSuspended: <input type="checkbox" name="AuthorSuspended"><br>
        <input type="submit" value="Submit">
    </form>
        
        <script src="" async defer></script>
    </body>
</html>