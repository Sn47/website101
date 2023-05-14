<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="explore.css?v=<?php echo time(); ?>">
        <script src="https://kit.fontawesome.com/07ada3bd79.js" crossorigin="anonymous"></script>

        <title>Document</title>
    </head>

    <body>
        <?php
          require_once 'header.php';
        ?>
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
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <div class="contents">
                            <h1>Info card</h1>
                            <h2>Nutrition facts</h2>
                            <p>13% Total Fat 8.5g <br>
                                3% Cholesterol 7.8mg <br>
                                4% Sodium 58.5mg <br>
                                15% Total Carbohydrate 19.9g <br></p>
                            <h2>History</h2>
                            <p>Gulab jamun was first prepared in medieval India and was derived from a fritter that
                                Central Asian Turkic invaders brought to India. Another theory claims that it was
                                accidentally prepared by the Mughal emperor Shah Jahan's personal chef.</p>

                        </div>
                    </div>
                </div>

                <div class="wrapper">
                    <img src="jalebi.jpeg" alt="jalebi">
                    <div class="container">
                        <div class="top"> </div>
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
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <div class="contents">
                            <h1>Info card</h1>
                            <h2>Nutrition facts</h2>
                            <p>13% Total Fat 8.5g <br>
                                3% Cholesterol 7.8mg <br>
                                4% Sodium 58.5mg <br>
                                15% Total Carbohydrate 19.9g <br></p>
                            <h2>History</h2>
                            <p>The earliest known history of this food in Western Asia comes from the 10th century in
                                the Arabic cookbook Kitab al-Tabikh (English: The Book of Dishes) by Ibn Sayyar
                                al-Warraq.</p>

                        </div>
                    </div>
                </div>


                <div class="wrapper">
                    <img src="lado.jpg" alt="lado">
                    <div class="container">
                        <div class="top"> </div>
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
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <div class="contents">
                            <h1>Info card</h1>
                            <h2>Nutrition facts</h2>
                            <p>13% Total Fat 8.5g <br>
                                3% Cholesterol 7.8mg <br>
                                4% Sodium 58.5mg <br>
                                15% Total Carbohydrate 19.9g <br></p>
                            <h2>History</h2>
                            <p>Lado, as part of the Bahr-el-Ghazal, came under the control of the Khedivate of Egypt and
                                in 1869 Sir Samuel Baker created an administration in the area, based in Gondokoro,
                                suppressed the slave trade and opened up the area to commerce.</p>

                        </div>
                    </div>
                </div>

            </div>
            <button class="orderbutton">Show more</button>
        </section>
        <?php
          require_once 'footer.php';
        ?>
        <script src="script.js"></script>
    </body>

</html>