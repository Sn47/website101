<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="header&footer.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
        <!-- <link rel="stylesheet" href="temp.css?v=<?php echo time(); ?>"> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        <script src="https://kit.fontawesome.com/07ada3bd79.js" crossorigin="anonymous"></script>
        <title>About Us</title>
    </head>

    <body>
        <?php
        require_once 'header.php';
    
    ?>


        <div class="about-section">
            <h1>About Us Page</h1>
            <p>Some text about who we are and what we do.</p>
            <p>Resize the browser window to see that this page is responsive by the way.</p>
       

        <h2 style="text-align:center">Our Team</h2>
        <div class="container">
  <div class="card card0">
    <div class="border">
      <h2>Al Pacino</h2>
      <div class="icons">
        <i class="fa fa-codepen" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-dribbble" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <div class="card card1">
    <div class="border">
      <h2>Ben Stiller</h2>
      <div class="icons">
        <i class="fa fa-codepen" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-dribbble" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <div class="card card2">
    <div class="border">
      <h2>Patrick Stewart</h2>
      <div class="icons">
        <i class="fa fa-codepen" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-dribbble" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </div>
    </div>
  </div>
</div>
        </div>
        <?php
        require_once 'footer.php'
    ?>
    </body>

</html>