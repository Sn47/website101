<?php

$defImg = addSlashes(file_get_contents('jalebi.jpeg'));
include ("connection.php");

$query = "insert into products (Name,City,Price,Detail,History,Ingredients,img1) values ('GulabJamun2','text',5.4,'sdf','sdf','sdf','$defImg')";
if(!mysqli_query($con,$query)){
    echo 'Query Failed';
}
else{
    echo "Query Ran";
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
        <title>Seller sign up</title>
    </head>

    <body>
        <div class="splitscreen">
            <div class="left"><a href="mainpage.php"> <img class="logo" src="soghat.png"
                        alt="the odin project logo"></img></a>
            </div>
            <div class="right">
                <div class="signuphead">
                    <h1>Seller Sign up</h1>
                   
                </div>
                <div>
                    <div class="form">
                       
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
                            <label for="PIN">PIN
                                <input type="password" id="PIN" name="PIN" required>
                                <div id="confirmpasswordError" class="error"></div>
                            </label>
                            <label for="PIN">CITY
                                <input type="password" id="PIN" name="PIN" required>
                                <div id="confirmpasswordError" class="error"></div>
                            </label>
                            <label for="PIN">ACC NO
                                <input type="password" id="PIN" name="PIN" required>
                                <div id="confirmpasswordError" class="error"></div>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="forgot-password">
                    <a href="forgotPassword.php">Forgot Password?</a>
                </div>
                <div class="signupbutton">
                    <button id="signupbutton" type="submit" form="myform">Sign up</button>
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