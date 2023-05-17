<?php
session_start();
include ("connection.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_SESSION['user_id'] == 0){
            echo '<script>alert("Kindly Login First");</script>';
        }
        else{
            if(isset($_POST['quantity'])){
                if(!empty($_POST['quantity'])){
                    $quan = $_POST['quantity'];
                    $proId = $_POST['proId'];
                    $query = "insert into addtocart values ('".$_SESSION['user_id']."','$proId','$quan')";
                    if(!mysqli_query($con,$query)){
                        echo 'Failed to add to Cart';
                    }
                    else{
                        echo '<script>alert("Successfully Added to Cart");</script>';
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
            <div class="noProFound" id="noProFound">
                <h1>No Product Was Found</h1>
            </div>
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
                    if(mysqli_num_rows($result) > 0){    
                        $counter = 0;
                        echo '<script>getElementsByClassName("noProFound").style.visibility="hidden"</script>';
                        while($row = mysqli_fetch_assoc($result)){
                    
                        if($counter % 3 == 0) echo /*html */'<div class="products">';
            ?>
                <div class=" wrapper">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row['img1']) ?>" alt="gulab jamun">
                    <div class="container">
                        <div class="top"></div>
                        <div class="bottom">
                            <div class="left">

                                <form method="POST" id="myform<?php echo $row['Pro_Id'] ?>"
                                    enctype="multipart/form-data ">
                                    <div class="details">
                                        <h1><?php echo $row['Name'] ?></h1>
                                        <p>Rs<?php echo $row['Price'] ?>/-</p>
                                        <div class="quanDiv">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" name="quantity" required> </input>
                                        </div>

                                    </div>

                                    <input type="hidden" id="proId" name="proId" value="<?php echo $row['Pro_Id'] ?>">
                                    <div class="buy"><button form="myform<?php echo $row['Pro_Id'] ?>" type="submit"
                                            name="submit"><i class="fas fa-shopping-cart" id="cart-btn"></i></button>
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
                    echo '<button class="orderbutton">Show more</button>';
                }
                else{
                    echo "<script>
                    const NoFound = document.querySelector('#noProFound');
                    NoFound.style.display='block';</script>";
                }
            }
            ?>

            </div>

        </section>
        <?php
        
        require_once 'footer.php';
        ?>
        <section>
            <div class="third">
                <script src="script.js"></script>
                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script>
                AOS.init({
                    // Global settings:
                    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
                    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                    initClassName: 'aos-init', // class applied after initialization
                    animatedClassName: 'aos-animate', // class applied on animation
                    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


                    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                    offset: 120, // offset (in px) from the original trigger point
                    delay: 0, // values from 0 to 3000, with step 50ms
                    duration: 400, // values from 0 to 3000, with step 50ms
                    easing: 'ease-in-out-quart', // default easing for AOS animations
                    once: false, // whether animation should happen only once - while scrolling down
                    mirror: true, // whether elements should animate out while scrolling past them
                    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

                });
                </script>
            </div>
        </section>
    </body>

</html>