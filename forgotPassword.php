<?php
session_start();
include ("connection.php");
    $log = true;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        
        $email = $_POST['email'];
    
        if ( !empty($email) ){
            echo $email;
            // Checking if email alread exists or not
            $query = "Select * from users where BINARY email = '$email'" ;
            $result = mysqli_query($con,$query);

            if($result && mysqli_num_rows($result)> 0){
            
                $userData = mysqli_fetch_assoc($result);
                $_SESSION['user_id'] = $userData['UserId'];
                header("Location: reset-password.php");
                die;
            }
            else{
                $log = false;
            }
            
        }
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        <link rel="stylesheet" href="./signupfrom.css?v=<?php echo time(); ?>">
        <title>Login</title>
    </head>


    <body style="display: flex;align-items:center">
        <div class="fpass-div">
            <h2 class="" style="text-align:center">Forgot Password</h2>
            <br>
            <form action="" class="fp-form" id="myform" method="POST" enctype="multipart/form-data ">
                <label for="email">Enter Email
                    <input type="email" id="email" name="email" required autocomplete="off">
                    <div id="emailError" class="error"></div>
                    <?php 
                      if (!$log) 
                        echo /*html */'<div class = "error" style = "font-size:16px;color:rgb(255,0,0)">Invalid Login</div>' 
                    ?>
                    <button name="fgPass" id="fpassbutton" type="submit" form="myform">
                        Submit
                    </button>
                </label>

            </form>

        </div>
    </body>

    <script>
    const email = document.querySelector('#email');
    const emailError = document.querySelector('#emailError');
    email.addEventListener("input", function(event) {
        eErr.textContent = '';
        if (email.validity.typeMismatch) {
            emailError.textContent = 'Please enter in a valid Email. ex(johnSmith@email.com)';
        } else {
            emailError.textContent = '';
        }
    });
    </script>

</html>