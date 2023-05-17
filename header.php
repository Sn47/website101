<?php

$login = false;
if(isset($_SESSION['user_id'])){
        if($_SESSION['user_id'] != 0 ) $login = true;
    }
    else{
        $_SESSION['user_id'] = 0;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['cartSubmit'])){
            $proId = $_POST['proId'];
            $query = "Delete from addtocart where UserId = '".$_SESSION['user_id']."' AND ProId = '$proId'";
            if(!mysqli_query($con,$query)){
                echo "Could Not delete from cart";
            }
            else{
                echo "<script>alert('Successfully Deleted From Cart');</script>";
            }
        }
    }
?>
<link rel="stylesheet" href="header&footer.css?v=<?php echo time(); ?>">
<header>
    <a href="mainpage.php" style="padding : 25px"> <img class="logo" src="orangeone.png"
            alt="the odin project logo"></a>

    <nav class="navbar">
        <button class="raise"><a href="#review" style="padding : 25px">REVIEW</a> </button>
        <button class="raise"><a href="about.php" style="padding : 25px">ABOUT</a> </button>
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
        <?php
            if($_SESSION['user_id'] != 0){
                
            
                $query = "Select Pro_Id,a.Quantity,Name,Price from addtocart a,products p,users u where u.UserId = ".$_SESSION['user_id']." AND a.UserId = ".$_SESSION['user_id']." AND a.ProId = p.Pro_Id";
                $result = mysqli_query($con,$query); 
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
        <div class="cart-item">
            <form method="POST" id="myform<?php echo $row['Pro_Id'] ?>">

                <button form="myform<?php echo $row['Pro_Id'] ?>" type="submit" name="cartSubmit"><span
                        class="fas fa-times"></span></button>
                <input type="hidden" id="proId" name="proId" value="<?php echo $row['Pro_Id'] ?>">
            </form>

            <img src="gulab.jpg" alt="gulabjamun">
            <div class="content">
                <h3><?php echo $row['Name'] ?></h3>
                <div class="price">Rs.<?php echo $row['Price'] ?>-/</div>
                <div style="font-size:13px;" class="quantity">Quantity: <?php echo $row['Quantity'] ?>
                </div>
            </div>
        </div>
        <?php
                    }
                }
            }
        
        ?>

        <?php 
        if($_SESSION['user_id'] != 0) 
            echo '<button class="check">CHECK OUT!</button>';
        ?>
    </div>
</header>