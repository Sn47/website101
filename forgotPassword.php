<?php
session_start();
include ("connection.php");
    $log = true;
    $msg =$cdErrMsg= "";
    $succMsg = "";
    $codeSend = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if(isset($_POST["email"])){
            $email = $_POST['email'];
            
            if ( !empty($email) ){
                // Checking if email alread exists or not
                $query = "Select * from users where BINARY email = '$email'" ;
                $result = mysqli_query($con,$query);

                if($result && mysqli_num_rows($result)> 0){
                
                    $codeSend = true;
                    $token = bin2hex(random_bytes(8));
                    
                    $expires = date("U")+300;
                    $query = "DELETE from pwdreset where pwdResetEmail = '$email'";
                    if(!mysqli_query($con,$query)){
                        $msg = "Error in password reset password"; 
                        
                    }
                    
                    
                    else{
                        $to = $email;
                        $subject = "Reset Your Password Soghat";
                        $message = /*html  */"<p>Your Code is ".$token.".</p>";
                        //$header = "From: ahmadshykh2015@gmail.com\r\n";
                        // $header .= "Reply-To: l217711@lhr.nu.edu.pk\r\n";
                        // $header .= "Content-type: text/html\r\n";
                        if (!mail($to,$subject,$message)){
                            $msg = "Could not send mail";
                        }
                        else{
                            $query = "INSERT INTO pwdReset (pwdResetEmail,pwdResetToken,pwdResetExpires) VALUES ('$email','$token','$expires')";
                            if(!mysqli_query($con,$query)){
                                $msg = "Could not provide code";
                            }
                            $_SESSION['email'] = $email;
                            $succMsg = "Email Sent, If not write your email again and send";
                        }
                       
                    }
                }
                else{
                    $msg = "Invalid Email";
                }
                
            }    
        }
        else if (isset($_POST['codeButt'])){
            $code = $_POST['code'];

            if(empty($code)){
                $cdErrMsg = "Code Not Given";
                exit();
            }
            else{

                $actCode = hex2bin($code);
                $query = "select * from pwdreset where pwdResetEmail = '".$_SESSION['email']."'and pwdResetSelector = '$actCode' ";
                $result =mysqli_query($con,$query); 
                if(!$result){
                    $cdErrMsg = "Could Not Check Code";
                }
                else if (mysqli_num_rows($result) != 1){
                    $cdErrMsg = "Maybe code you gave is wrong";
                }
                else{
                    header ("Location:reset-password.php");
                    die;
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
        <link rel="stylesheet" href="./signupfrom.css?v=<?php echo time(); ?>">
        <title>Forgot Password</title>
    </head>


    <body style="display: flex;align-items:center">
        <div class="fpass-div">
            <h2 class="" style="text-align:center">Forgot Password</h2>
            <br>
            <form action="" class="fp-form" id="myform" method="POST" enctype="multipart/form-data ">
                <label for="email">Enter Email
                    <input type="email" id="email" name="email" autocomplete="off">
                    <div id="emailError" class="error"></div>
                    <?php 
                        if (!empty($msg)) 
                            echo /*html */'<div class = "error" style = "font-size:16px;color:rgb(255,0,0)">'.$msg.'</div>' ;
                        if(!empty($succMsg)){
                            echo /*html */ '<div class = "succ" style = "font-size:16px;color:green">'.$succMsg.'</div>';
                        }
                    ?>

                    <button name="fgPass" id="fpassbutton" type="submit" form="myform">
                        Submit Email
                    </button>
                    <br>
                    <br>
                    <?php 
                        if($codeSend)
                        {
                    ?>
                    <input type="text" id="code" name="code" autocomplete="off">
                    <?php 
                        if (!empty($cdErrMsg)) 
                            echo /*html */'<div class = "error" style = "font-size:16px;color:rgb(255,0,0)">'.$cdErrMsg.'</div>' ;
                        
                    ?>
                    <button name="codeButt" id="codeButt" type="submit" form="myform">
                        Submit Code
                    </button>
                    <?php 
                        }
                    ?>
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