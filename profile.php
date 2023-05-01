<?php 
session_start();

    include ("connection.php");
    $msg;
    if(isset($_GET["submit"])){
        session_destroy();
        header("Location: mainpage.php");
        die;
    }


    if(isset($_GET['goBackButton'])){
        header("Location: mainpage.php");
        die;
    }


    if(isset($_GET['uploadPic'])){
        print_r($_FILES);
        if(!empty($_FILES["image"]["name"])){
            $fileName = basename($_FILES["image"]["name"]);
            $extension = pathinfo($fileName,PATHINFO_EXTENSION);

            $ext = array('jpg','png','jpeg','gif');
            if(in_array($extension,$ext)){
                $defImg = addSlashes(file_get_contents($_FILES['image']['tmp_name']));
               
                $query = "update from users set image = '$defImg' where UserId = ".$_SESSION['user_id'];
                
                if(!mysqli_query($con,$query)){
                  $msg =  "Error: ". mysqli_error($con);
                }
                else{
                    $msg = "Successful Upload";
                    $_SESSION['image'] = $defImg;
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <form method="POST" enctype="multipart/form-data">
            <div class="signupbutton">
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
                    <?php
                        if(!empty($msg)){
                            echo $msg;
                        }
                    ?>
                </label>
            </div>



        </form>


    </body>

</html>