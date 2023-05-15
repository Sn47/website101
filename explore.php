<?php
    include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="header&footer.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="explore.css?v=<?php echo time(); ?>">
        <script src="https://kit.fontawesome.com/07ada3bd79.js" crossorigin="anonymous"></script>
<<<<<<< HEAD
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        <title>Document</title>
=======

        <title>Explore</title>
>>>>>>> 7a9a1dda763f1af8e93472896941dcd1709327e8
    </head>

    <body>
        <?php
          require_once 'header.php';
        ?>
        <section>
            <div class="proSec">
                <?php

                if($_GET['category'] == 'all'){
                    $query = "select * from products";
                    
                }
                $result = mysqli_query($con,$query);
                if(!$result){
                    echo 'Could Not Fetch all products';
                }
                else{
                    $counter = 0;
                    while($row = mysqli_fetch_assoc($result)){
                
                    if($counter % 3 == 0) echo /*html */'<div class="products">';
            ?>
                <div class=" wrapper">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row['img1']) ?>" alt="gulab jamun">
                    <div class="container">
                        <div class="top"></div>
                        <div class="bottom">
                            <div class="left">
                                <div class="details">
                                    <h1><?php echo $row['Name'] ?></h1>
                                    <p>Rs<?php echo $row['Price'] ?>/-</p>
                                </div>
                                <div class="buy"><button><i class="fas fa-shopping-cart" id="cart-btn"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <div class="contents">
                            <h1>Info card</h1>
                            <h2>Nutrition facts</h2>
                            <p><?php echo $row['Ingredients'] ?></p>
                            <h2>History</h2>
                            <p><?php echo $row['History'] ?></p>
                            <h2>Details</h2>
                            <p><?php echo $row['Detail'] ?></p>

                        </div>
                    </div>
                </div>


                <?php
                $counter++;
                if($counter % 3 == 0) echo /*html */'</div>';
                
                }
            }
            ?>
            </div>
            <button class="orderbutton">Show more</button>
        </section>
        <?php
        
        require_once 'footer.php';
        echo '<script >
        function clickFunction() {
        </script>';
            
        if($_SESSION['user_id'] == 0){

        echo '<script>
        alert("Login First");
        </script>';

        }

        echo '<script>
        };
        </script>';
        ?>
    </body>

</html>