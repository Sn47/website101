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
        </div>

        <h2 style="text-align:center">Our Team</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="http://localhost/website101/images/ahmad.jpg" alt="Ahmad" style="width:100%">
                    <div class="container">
                        <h2>M.Ahmad Ali</h2>
                        <p class="title">BackEnd Designer</p>
                        <p>Minecraft.</p>
                        <p>ahmadshykh2015@gmail.com</p>
                        <p>Contact: 0321-4669811</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="http://localhost/website101/images/ahmed.jpg" alt="Ahmed" style="width:100%">
                    <div class="container">
                        <h2>Ahmed Abdullah</h2>
                        <p class="title">Founder Of Soghat</p>
                        <p>No Please No</p>
                        <p>ahmed40152@gmail.com</p>
                        <p>Contact: 0316-4995399</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="http://localhost/website101/images/ahsan.png" alt="Ahsan" style="width:100%">
                    <div class="container">
                        <h2>Ahsan Naveed</h2>
                        <p class="title">Frontend Designer</p>
                        <p>there are ways to be beautiful that don’t involve your appearance ‹𝟯.</p>
                        <p>john@example.com</p>
                        <p>Contact: 0333-4030884</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once 'footer.php'
    ?>
    </body>

</html>