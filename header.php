<?php
session_start();
$login = false;
if(isset($_SESSION['user_id'])){
        if($_SESSION['user_id'] != 0 ) $login = true;
    }
    else{
        $_SESSION['user_id'] = 0;
    }
?>

<header>
    <a href="mainpage.php" style="padding : 25px"> <img class="logo" src="orangeone.png"
            alt="the odin project logo"></a>

    <nav class="navbar">




        <button class="raise"><a href="#review" style="padding : 25px">REVIEW</a> </button>
        <button class="raise"><a href="#about" style="padding : 25px">ABOUT</a> </button>
        <button class="raise"><a href="explore.php?category=all" style="padding : 25px">EXPLORE</a></button>
        <button class="raise"><a href="mainpage.php" style="padding : 25px">HOME</a></button>

    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>

        <?php
                if($login === false)
                {
                    echo '<a class = "" href = "signupform.php"><div class="fas fa-user" id="user-btn"></div></a>';
                }
                else{

                    $result = mysqli_query($con,"select image from users where UserId = ".$_SESSION['user_id']);
                    if($result){
                        $image = mysqli_fetch_assoc($result);
                        echo '<a  class = "avaSty" href = "profile.php" ><img class = "profile_size profile_pic" src="data:image/jpg;base64,'.base64_encode($image['image']).'">  </a>';
                    }
                    else{
                        echo 'Error';
                    
                    }
                    
                }
            ?>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>
    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>

    </div>

    <!-- <div class="cart-item-container">
                <h1>CART</h1>
            </div>
            <div class="cart-item-container">
                <h1>CART</h1>
            </div> -->
    <div class="cart-item-container">
        <h1>Cart</h1>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="gulab.jpg" alt="gulabjamun">
            <div class="content">
                <h3>Gulab jamun</h3>
                <div class="price">Rs10/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="jalebi.jpeg" alt="gulabjamun">
            <div class="content">
                <h3>Jalebi</h3>
                <div class="price">Rs15/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="lado.jpg" alt="gulabjamun">
            <div class="content">
                <h3>Lado</h3>
                <div class="price">Rs5/-</div>
            </div>
        </div>
        <button class="check">CHECK OUT!</button>
    </div>
</header>