<?php
session_start();
echo $_SESSION['email'];
include ("connection.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pass  = $_POST['password'];
        $errMsg = "";
        $confirmPass  = $_POST['confirmpassword'];
        if(!empty($pass) && !empty($confirmPass)){
            $query =  "UPDATE users set Password = '$pass' where email = '".$_SESSION ['email']."'";
            if(!mysqli_query($con,$query)){
                $errMsg = "Could not update password try again later";
            }
            else{
                unset($_SESSION['email']);
                header ("Location:Loginform.php");
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
        <title>Reset Password</title>
    </head>

    <body>
        <form class="rsPassForm center" id="myform" method="POST">
            <div class="rsPassInpDiv">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required
                    pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'>
                <div style="color:red" id="passwordError" class="error"></div>

            </div>
            <div class="rsPassInpDiv">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required>
                <div style="color:red" id="confirmpasswordError" class="error"></div>

            </div>
            <div class="rsPassInpDiv">
                <?php
                if(!empty($errMsg)){
            
                    echo '<div class="error"> '.$errMsg.'</div>';
                }
            ?>
                <div class="udtPassButt">
                    <button id="passUpdate" type="submit" form="myform">Update Password</button>
                </div>
            </div>
        </form>
    </body>
    <script>
    const password = document.querySelector('#password');
    const confirmpassword = document.querySelector('#confirmpassword');
    const passwordwError = document.querySelector('#passwordError');
    const confirmpasswordError = document.querySelector('#confirmpasswordError');
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

</html>