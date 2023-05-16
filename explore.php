<?php
    include ("connection.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!isset($_POST['quantity'])){
            ?>
alert("No Quantity Added");

<?php
        
        }
    }




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


        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        <title>Explore</title>
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
                                <form action="POST" id="myform" enctype="multipart/form-data ">
                                    <div class="details">
                                        <h1><?php echo $row['Name'] ?></h1>
                                        <p>Rs<?php echo $row['Price'] ?>/-</p>
                                        <div class="quanDiv">
                                            <label for="quantity" required>Quantity</label>
                                            <input type="number" name="quantity"> </input>
                                        </div>

                                    </div>

                                   
                                    <input type="hidden" id="proId" name="proId" value="<?php echo $row['Pro_Id'] ?>">
                                    <div class="buy"><button form="myform" type="submit" name="submit"><i
                                                class="fas fa-shopping-cart" id="cart-btn"></i></button>

                                                class="fas fa-shopping-cart" id="cart-btn"></i></button>
                                    </div>
                                </form>

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
        ?>
    </body>

</html>