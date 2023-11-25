<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Author Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
        
       <link rel="stylesheet" href="css/formstyle.css" />


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
<form class="mt-4" action="processes/AutRegistration.php" method="post">
    

   
    <label for="AuthorFullName" class="form-label">Author Full Name:</label>
    <input type="text" name="AuthorFullName" id="AuthorFullName" class="form-control" placeholder="Enter the Author Full Name" maxlength="50" required>

    <label for="AuthorEmail" class="form-label">Author Email:</label>
    <input type="email" name="AuthorEmail" id="AuthorEmail" class="form-control" placeholder="Enter the Author Email" maxlength="50">

    <label for="AuthorAddress" class="form-label">Author Address:</label>
    <input type="text" name="AuthorAddress" id="AuthorAddress" class="form-control" placeholder="Enter the Author Address" maxlength="60" required>

    <label for="AuthorBiography" class="form-label">Author Biography:</label>
    <textarea name="AuthorBiography" id="AuthorBiography" class="form-control" placeholder="Enter the Author Biography" rows="5" required></textarea>

    <label for="AuthorDateOfBirth" class="form-label">Author Date of Birth:</label>
    <input type="date" name="AuthorDateOfBirth" id="AuthorDateOfBirth" class="form-control" placeholder="Enter the Author Date of Birth" maxlength="20" required>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="AuthorSuspended" name="AuthorSuspended">
        <label class="form-check-label" for="AuthorSuspended">Author Suspended</label>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

    <div class="footer">
  copyright &copy; @JANET 2023
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-2OQ27QsLc7FqH6d77YbVRNwlGY/NK/h3bG3jcgM6yY8A" crossorigin="anonymous"></script> 
        <script src="" async defer></script>
    </body>
</html>