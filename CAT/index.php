<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Author Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="index">
    <?php include 'navbar.php'; ?>
    <div class="header">
    <h1>Welcome to the Author Registration System</h1>
</div>

<div class="container">
    
    <p>Authors draw inspiration from various sources, including personal experiences,
         observations, historical events, and imagination. Understanding the creative 
        process and where ideas come from can provide insights into the richness of literature.
        Literature evolves over time, giving rise to different movements and trends.
         Exploring these movements, such as Romanticism, Modernism, or Postmodernism, 
         a historical perspective on how writing styles and themes have changed over the years.</p>

    
</div>  

    <form action="processes/AutRegistration.php" method="post">
        <!--form  for Author details -->
  
        <label for="AuthorFullName">AuthorFullName:</label><br>
    <input type="text" name="AuthorFullName" id="AuthorFullName" placeholder="Enter the Author FullName" maxlength="50" required /><br><br>

    <label for="AuthorEmail">AuthorEmail</label><br>
    <input type="email" name="AuthorEmail" id="AuthorEmail" placeholder="Enter the Author Email" maxlength="50" /><br><br>

    <label for="AuthorAddress">AuthorAddress:</label><br>
    <input type="text" name="AuthorAddress" id="AuthorAddress" placeholder="Enter the AuthorAddress" maxlength="60" required /><br><br>
     
    <label for="AuthorBiography">AuthorBiography:</label><br>
    <textarea name="text" name="AuthorBiography" id="AuthorBiography" placeholder="Enter the AuthorBiography" rows="10" required></textarea><br><br>

    <label for="AAuthorDateOfBirth">AuthorDateOfBirth:</label><br>
    <input type="date" name="AuthorDateOfBirth" id="AuthorDateOfBirth" placeholder="Enter the AuthorDateOfBirth" maxlength="20" required /><br><br>

    <label for="AuthorSuspended">AuthorSuspended:</label><br>
    <input type="checkbox" name="AuthorSuspended"/><br><br>

        <input type="submit" value="Submit">
    </form>

    <div class="footer">
  copyright &copy; @JANET 2023
</div>
        
        <script src="" async defer></script>
    </body>
</html>