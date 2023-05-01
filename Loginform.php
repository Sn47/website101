<?php

  include("connection.php");
  include("functions.php");
  $log = true;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ( !empty($email)&& !empty($password) ){
      
      // Checking if email alread exists or not
      $query = "Select * from users where email = '$email' AND password = '$password'" ;
      $result = mysqli_query($con,$query);

      if($result && mysqli_num_rows($result)> 0){
        
        $userData = mysqli_fetch_assoc($result);
        $defImg = file_get_contents("localhost/website101/images/defProfImg.png");
        $query = "Insert into users (image) values ('$defImg') ";

        $_SESSION['user_id'] = $userData['UserId'];
        header("Location: mainpage.php");
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
    <link rel="stylesheet" href="./signupfrom.css">
    <title>Login</title>
</head>
<body>
    <div class="splitscreen">
    <div class="left">
        
      <a href ="mainpage.php"><img class="logo" src="soghat.png" alt="the odin project logo"></img></a>
    </div>
    <div class="right">
        <div class="signuphead">
            <h1>Log in </h1>
            <p class="firstp">This is not a real online service! You know you need something like this in your life to help you realize your deepest dreams. Sign up now to get started.</p>
            <p class="secondp"><br>You know you want to.</p>
        </div>
        <div>
        <div class="form">
            <h1 class="formhead">Let's do this!</h1>
            <form id="myform" method = "POST" enctype="multipart/form-data ">
                <label for="email">Email
                    <input type="email" id="email" name="email" required autocomplete="off">
                    <div id="emailError" class="error"></div>
                </label>
                <label for="password">Password
                    <input type="password" id="password" name="password" required pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'>
                    <div id="passwordError" class="error"></div>
                </label>    
            </form>
            <?php 
              if (!$log) 
                echo '<p class = "error">Invalid Login</p>' 
            ?>
        </div>
    </div>
    <div class="signupbutton">
        <button zid="signupbutton" type="submit" form="myform"><a href="mainage.html">Log in</a></button>
        <p>Don't have an account? Sign up now <a href="signupform.php">Sign up</a> </p>
    </div>
</div>
</div>
<script>
    const password = document.querySelector('#password');
    const confirmpassword = document.querySelector('#confirmpassword');
    const firstname = document.querySelector('#firstname');
    const lastname = document.querySelector('#lastname');
    const email = document.querySelector('#email');
    const phone = document.querySelector('#phone');
    const passwordwError = document.querySelector('#passwordError');
    const confirmpasswordError = document.querySelector('#confirmpasswordError');
    const firstnameError = document.querySelector('#firstnameError');
    const lastnameError = document.querySelector('#lastnameError');
    const emailError = document.querySelector('#emailError');
    const phoneError = document.querySelector('#phoneError');
     
    email.addEventListener("input", function (event) {
        if (email.validity.typeMismatch) {
        emailError.textContent = 'Please enter in a valid Email. ex(johnSmith@email.com)';
      } else {
        emailError.textContent = '';
      }
    }); 
   
    password.addEventListener("input", function (event) {
      if (password.validity.patternMismatch){
        const currentValue = password.value;
        const regExpCap = /[A-Z]/g;
        const regExpDig = /[0-9]/g;
        let result = '';
        if (regExpCap.test(currentValue)){
          result += '';
        } else {
          result += `Missing at least 1 capital letter. `;
          result += '\n';
        }
        
        
        if (regExpDig.test(currentValue)){
          result += '';
        } else {
          result += 'Missing at least 1 number. ';
          result += '\n';
        }
        
        if (currentValue.length < 9){
          result += 'Password must be at least 8 characters. '
          result += '\n';
        } else {
          result += '';
        }

        console.log(result);
        passwordError.textContent = result;

  
      } else {
        passwordError.textContent = '';
      }
    });
    
   
    </script>

</body>
</html>