<?php 
session_start();

    include ("connection.php");
    $msg = '';
    if(isset($_POST["submit"])){
        session_destroy();
        header("Location: mainpage.php");
        die;
    }
    else if(isset($_POST['goBackButton'])){
        header("Location: mainpage.php");
        die;
    }


    else if(isset($_POST['uploadPic'])){
        if(!empty($_FILES["changeAvt"]["name"])){
            $fileName = basename($_FILES["changeAvt"]["name"]);
            $extension = pathinfo($fileName,PATHINFO_EXTENSION);

            $ext = array('jpg','png','jpeg','gif');
            if(in_array($extension,$ext)){
                $defImg = addSlashes(file_get_contents($_FILES['changeAvt']['tmp_name']));
               
                $query = "update users set image = '$defImg' where UserId = ".$_SESSION['user_id'];
                
                if(!mysqli_query($con,$query)){
                  $msg =  "Error: ". mysqli_error($con);
                }
                else{
                    $msg = "Successful Upload";
                    
                }
                
            }
            else{
                $msg = "Extension Not Allowed";
            }
        }
        else{
            $msg = "File Not Chosen";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="profile.css?v=<?php echo time(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <form method="POST" enctype="multipart/form-data">
            <!-- <div class="signupbutton">
                <button name="submit" type="submit">Log Out</button>
            </div>
            <div class="goBackButton">
                <button name="goBackButton" type="submit">Go To Main Page</button>
            </div>
            <br>
            <br>
            <div class="changeAvatar">
                <input name="changeAvt" type="file">Chose Avatar</input>
                <label for="changeAvt">Select Your Own Avatar Pic</label>
            </div>
            <div class="Upload">
                <button name="uploadPic" type="submit">Upload Pic</button>
                <label for="uploadPic">
                  //  <?php
                     //   if(!empty($msg)){
                    //        echo $msg;
                    //    }
                   // ?>
                </label>
            </div> -->



            <div class="card" data-state="#about">
    <div class="card-header">
      <div class="card-cover" ></div>
      <img class="card-avatar" src="https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="avatar" />
      <h1 class="card-fullname">William Rocheald</h1>
      <h2 class="card-jobtitle">UI Developer</h2>
    </div>
    <div class="card-main">
      <div class="card-main">
        <div class="card-section is-active" id="about">
          <div class="card-content">
            <div class="card-subtitle">ABOUT</div>
            <p class="card-desc">Whatever tattooed stumptown art party sriracha gentrify hashtag intelligentsia readymade schlitz brooklyn disrupt.
            </p>
            <div class="card-subtitle">EMAIL</div>
            <p class="card-desc">AHAHS@GMAIL.COM
            </p>
            <div class="card-subtitle">ABOUT</div>
            <p class="card-desc">Whatever tattooed stumptown art party sriracha gentrify hashtag intelligentsia readymade schlitz brooklyn disrupt.
            </p>
          </div>
        
        </div>
      </div>



      <div class="signupbutton">
        <button class="orderbutton" name="submit" type="submit">Log Out</button>
    </div>
    <!-- <div class="goBackButton">
        <button name="goBackButton" type="submit">Go To Main Page</button>
    </div> -->
  
  
    <button  class="orderbutton" name="submit" type="submit"><a href="seller.php">Become seller</a></button>
    <div class="Upload">
        <button class="orderbutton" name="uploadPic" type="submit">Upload Pic</button>
        <label for="uploadPic">
            <?php
                if(!empty($msg)){
                    echo $msg;
                }
            ?>
        </label>
    </div>
     
    <div class="changeAvatar">
    <label class="l"> Enter Your File
    <input class="orderbutton" name="changeAvt" type="file">Chose Avatar</input>
    </label> 
        
        
    </div>      


                     </form>

    </body>

</html>