<?php
session_start();
  include("connection.php");
  include("functions.php");
  $emailExists = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword  = $_POST['confirmpassword'];
    $phone = $_POST['phone']; 

    if (!empty($firstName) && !empty($lastName) && !empty($email)&& !empty($password) && !empty($confirmPassword) && !empty($phone)){
      
      $userId = maxUserId();
      // Checking if email alread exists or not
      $query = "Select * from users where email = '$email'" ;
      $result = mysqli_query($con,$query);
      if($result && mysqli_num_rows($result) > 0){
        $emailExists = true;
      }
      else{
        $defImg = addSlashes(file_get_contents("http://localhost/website101/images/defProfImg.png"));
        $query = "insert into users (UserId, Fname, Lname, Password, email, phone,image) VALUES ('$userId','$firstName', '$lastName', '$password', '$email', '$phone','$defImg')";
        
        if(!mysqli_query($con,$query)){
          echo "Error: ". mysqli_error($con);
        }
        header("Location:loginform.php");
        die;
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
        <link rel="stylesheet" href="signupfrom.css?v=<?php echo time(); ?>">
        <title>Signup</title>
    </head>

    <body>
        <div class="splitscreen">
            <div class="left"><a href="mainpage.php"> <img class="logo" src="soghat.png"
                        alt="the odin project logo"></img></a>
            </div>
            <div class="right">
                <div class="signuphead">
                    <h1>Sign up</h1>
                    <p class="firstp">This is not a real online service! You know you need something like this in your
                        life to help you realize your deepest dreams. Sign up now to get started.</p>
                    <p class="secondp"><br>You know you want to.</p>
                </div>
                <div>
                    <div class="form">
                        <h1 class="formhead">Let's do this!</h1>
                        <form id="myform" method="POST">
                            <label for="firstname">First Name
                                <input type="text" id="firstname" name="firstname" required>
                                <div id="firstnameError" class="error"></div>
                            </label>
                            <label for="lastname">Last Name
                                <input type="text" id="lastname" name="lastname" required>
                                <div id="lastnameError" class="error"></div>
                            </label>
                            <label for="email">Email
                                <input type="email" id="email" name="email" required autocomplete="off">
                                <div id="emailError" class="error"></div>
                                <?php
                                  if($emailExists){
                                    echo '<div id= "eErr" class = "error">Email Already Exists</div>';
                                  }

                                ?>
                            </label>
                            <label for="phone">Phone Number
                                <input type="phone" id="phone" name="phone" required pattern='[0-9]{11}'>
                                <div id="phoneError" class="error"></div>
                            </label>
                            <label for="password">Password
                                <input type="password" id="password" name="password" required
                                    pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'>
                                <div id="passwordError" class="error"></div>
                            </label>
                            <label for="confirmpassword">Confirm Password
                                <input type="password" id="confirmpassword" name="confirmpassword" required>
                                <div id="confirmpasswordError" class="error"></div>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="forgot-password">
                    <a href="forgotPassword.php">Forgot Password?</a>
                </div>
                <div class="signupbutton">
                    <button id="signupbutton" type="submit" form="myform">Sign Up</button>
                    <p>Already have an account?<a href="loginform.php">Log in</a> </p>
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
        const eErr = document.querySelector('#eErr');
        firstname.addEventListener("input", function(event) {
            if (firstname.value === '') {
                firstnameError.textContent = 'Please type in your first name.';
            } else {
                firstnameError.textContent = '';
            }
        });
        lastname.addEventListener("input", function(event) {
            if (lastname.value === '') {
                lastnameError.textContent = 'Please type in your last name.';
            } else {
                lastnameError.textContent = '';
            }
        });
        email.addEventListener("input", function(event) {
            eErr.textContent = '';
            if (email.validity.typeMismatch) {
                emailError.textContent = 'Please enter in a valid Email. ex(johnSmith@email.com)';
            } else {
                emailError.textContent = '';
            }
        });
        phone.addEventListener("input", function(event) {
            if (phone.validity.patternMismatch) {
                phoneError.textContent = 'Please enter in a 10 digit phone number';
            } else {
                phoneError.textContent = '';
            }
        });
        password.addEventListener("input", function(event) {
            if (password.validity.patternMismatch) {
                const currentValue = password.value;
                const regExpCap = /[A-Z]/g;
                const regExpDig = /[0-9]/g;
                let result = '';
                if (regExpCap.test(currentValue)) {
                    result += '';
                } else {
                    result += `Missing at least 1 capital letter. `;
                    result += '\n';
                }


                if (regExpDig.test(currentValue)) {
                    result += '';
                } else {
                    result += 'Missing at least 1 number. ';
                    result += '\n';
                }

                if (currentValue.length < 9) {
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

        confirmpassword.addEventListener("input", function(event) {
            if (confirmpassword.value !== password.value) {
                confirmpasswordError.textContent = 'Passwords do not match.';
            } else {
                confirmpasswordError.textContent = '';
            }
        });
        </script>

    </body>

</html>