<?php
session_start();

include ("connection.php");
if(isset($_POST["fgPass"])){
 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pass  = $_POST['password'];
        $errMsg = "";
        $confirmPass  = $_POST['confirmpassword'];
        if(!empty($pass) && !empty($confirmPass)){
            $query =  "UPDATE FROM users set Password = '$pass' where email = '".$SESSION ['email']."'";
            if(!mysqli_query($con,$query)){
                $errMsg = "Could not update password try again later";
            }
            else{
                header ("Location:Loginform.php");
            }
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
        <form id="myform" method="POST">
            <label for="password">Password
                <input type="password" id="password" name="password" required
                    pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'>
                <div id="passwordError" class="error"></div>
            </label>
            <label for="confirmpassword">Confirm Password
                <input type="password" id="confirmpassword" name="confirmpassword" required>
                <div id="confirmpasswordError" class="error"></div>
            </label>
            <?php
                if(!empty($errMsg)){
            
                    echo '<div class="error"> '.$errMsg.'</div>';
                }
            ?>
            <div class="udtPassButt">
                <button id="passUpdate" type="submit" form="myform">Update Password</button>
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