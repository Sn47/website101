<?php
session_start();
include ("connection.php");
    require_once '../vendor/autoload.php';
    use Symfony\Component\Mailer\Transport;
    use Symfony\Component\Mailer\Mailer;
    use Symfony\Component\Mime\Email;
    $log = true;
    $msg =$cdErrMsg= "";
    $succMsg = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if(isset($_POST["email"]) && isset($_POST['code'])){
            $code = $_POST['code'];
            $emailPost = $_POST['email'];
            if ( !empty($emailPost) ){
                // Checking if email already exists or not
                $query = "Select * from users where BINARY email = '$emailPost'" ;
                $result = mysqli_query($con,$query);

                if($result && mysqli_num_rows($result)> 0){
                    $token = bin2hex(random_bytes(8));
                    date_default_timezone_set('Asia/Karachi');
                    $expires = date('Y-m-d H:i:s', strtotime("+5 minute"));
                    $query = "DELETE from pwdreset where pwdResetEmail = '$emailPost'";
                    if(!mysqli_query($con,$query)){
                        $msg = "Error in password reset password"; 
                        
                    }
                    else{
                        $transport = Transport::fromDsn('smtp://ahmadshykh2015@gmail.com:ikknbqpjpdphtlhz@smtp.gmail.com:587');
                        $mailer = new Mailer($transport); 
                        $email = (new Email());
                        $email->from('ahmadshykh2015@gmail.com');
                        $email->to($emailPost);
                        $email->subject('Password Recovery');
                        $email->html('<p>The token for your password recovery is <b>'.$token.'</b><br>Remember the code will retire in 5 minutes</p>');
                        $mailer->send($email);
                        
                        $query = "INSERT INTO pwdReset (pwdResetEmail,pwdResetToken,pwdResetExpires) VALUES ('$emailPost','$token','$expires')";
                        if(!mysqli_query($con,$query)){
                            $msg = "Could not provide code";
                        }
                        $succMsg = "Email Sent, If not write your email again and press submit email";
                        $Open = true;
                    }
                }
                else{
                    $msg = "Invalid Email";
                }
                
            
            
            }
            else if(!empty($code)){
                if(strlen($code) < 8){
                    $cdErrMsg = "Code Length Not Proper";
                }
                else{
                    $query = "select * from pwdreset where pwdResetToken = '$code' ";
                    $result =mysqli_query($con,$query); 
                    if(!$result){
                        $cdErrMsg = "Could Not Check Code";
                    }
                    else if (mysqli_num_rows($result) <= 0){
                        $cdErrMsg = "Maybe code you gave is wrong";
                    }
                    else{
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['email'] = $row['pwdResetEmail'];
                        header ("Location:reset-password.php");
                        die;
                    }
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
                <div style="display: grid">
                    <label class="forPassLabl" for="email">Enter Email</label>
                    <input class="forPassInp" type="email" id="email" name="email" autocomplete="off">
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
                </div>

                <br>
                <br>
                <div style="display: grid">
                    <label class="forPassLabl" for="code">Enter Code</label>
                    <input class="forPassInp" type="text" id="code" name="code" autocomplete="off">
                    <?php 
                            if (!empty($cdErrMsg)) 
                                echo /*html */'<div class = "error" style = "font-size:16px;color:rgb(255,0,0)">'.$cdErrMsg.'</div>' ;
                            
                        ?>
                    <button name="codeButt" id="codeButt" type="submit" form="myform">
                        Submit Code
                    </button>
                </div>


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