<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/07ada3bd79.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<header>
            <a href="mainpage.php" style="padding : 25px"> <img class="logo" src="orangeone.png"
                    alt="the odin project logo"></a>

            <nav class="navbar">

                
              
                
                <button class="raise"><a href="#review" style="padding : 25px">REVIEW</a> </button>
                <button class="raise"><a href="#about" style="padding : 25px">ABOUT</a> </button>
                <button class="raise"><a href="#explore" style="padding : 25px">EXPLORE</a></button>
                <button class="raise"><a href="#home" style="padding : 25px">HOME</a></button>

            </nav>

            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
            



                <div class="fas fa-bars" id="menu-btn"></div>
            </div>
            <div class="search-form">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>


                </div>
            
           <div class="cart-item-container">
                <h1>CART</h1>
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






      
 <section>       
<div class="products">
    <div class="wrapper"> 
    <img src="gulab.jpg" alt="gulab jamun">
        <div class="container">
          <div class="top"></div>
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h1>Gulabjamun</h1>
                <p>Rs10/-</p>
              </div>
              <div class="buy"><i class="fas fa-shopping-cart" id="cart-btn"></i></div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fa-solid fa-circle-info" ></i></div>
          <div class="contents">
            <h1>Info card</h1>
          <h2>Nutrition facts</h2>        
          <p>13% Total Fat 8.5g <br>
           3% Cholesterol 7.8mg <br>
           4% Sodium 58.5mg <br>
           15% Total Carbohydrate 19.9g <br></p>
           <h2>History</h2>
           <p>Gulab jamun was first prepared in medieval India and was derived from a fritter that Central Asian Turkic invaders brought to India. Another theory claims that it was accidentally prepared by the Mughal emperor Shah Jahan's personal chef.</p>

          </div>
        </div>
      </div>

      <div class="wrapper">
      <img src="jalebi.jpeg" alt="jalebi">
        <div class="container">
          <div class="top">  </div>
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h1>Jalebi</h1>
                <p>Rs5/-</p>
              </div>
              <div class="buy"><i class="fas fa-shopping-cart" id="cart-btn"></i></div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fa-solid fa-circle-info" ></i></div>
          <div class="contents">
            <h1>Info card</h1>
          <h2>Nutrition facts</h2>        
          <p>13% Total Fat 8.5g <br>
           3% Cholesterol 7.8mg <br>
           4% Sodium 58.5mg <br>
           15% Total Carbohydrate 19.9g <br></p>
           <h2>History</h2>
           <p>The earliest known history of this food in Western Asia comes from the 10th century in the Arabic cookbook Kitab al-Tabikh (English: The Book of Dishes) by Ibn Sayyar al-Warraq.</p>

          </div>
        </div>
      </div>


      <div class="wrapper">
      <img src="lado.jpg" alt="lado">
        <div class="container">
          <div class="top">  </div>
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h1>Lado</h1>
                <p>Rs25/-</p>
              </div>
              <div class="buy"><i class="fas fa-shopping-cart" id="cart-btn"></i></div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fa-solid fa-circle-info" ></i></div>
          <div class="contents">
            <h1>Info card</h1>
          <h2>Nutrition facts</h2>        
          <p>13% Total Fat 8.5g <br>
           3% Cholesterol 7.8mg <br>
           4% Sodium 58.5mg <br>
           15% Total Carbohydrate 19.9g <br></p>
           <h2>History</h2>
           <p>Lado, as part of the Bahr-el-Ghazal, came under the control of the Khedivate of Egypt and in 1869 Sir Samuel Baker created an administration in the area, based in Gondokoro, suppressed the slave trade and opened up the area to commerce.</p>

          </div>
        </div>
      </div>
      
  </div>
	<button class="orderbutton">Show more</button>
  </section>
  <script src="script.js" ></script>
</body>
</html>