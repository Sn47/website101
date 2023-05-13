<?php
session_start();

    $login = false;
    include("connection.php");
    include("functions.php");

    if(isset($_SESSION['user_id'])){
        $login = true;
    }
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        <script src="https://kit.fontawesome.com/07ada3bd79.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="temp.css?v=<?php echo time(); ?>">
        <link rel=”stylesheet”
            href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css”rel=”nofollow”
            integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
        <link rel=”stylesheet”
            href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow”
            integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
       
        
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
       
        <title>Mainpage</title>
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

<<<<<<< HEAD

                </div>
            
           <div class="cart-item-container">
                <h1>CART</h1>
=======
            </div>
            <div class="cart-item-container">
                <h1>CART</h1>
            </div>
            <div class="cart-item-container">
>>>>>>> 1ea60fd98d2a148d1be724a8c74a3ab7069c5d3f
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
            <section>
                <div class="first">
                    <div class="sidewrite" data-aos="fade">
                        <h1>Soghat </h1>
                        <p class="discrip">Unique Traditional and Regional Food and Desserts , so called Soghat </p>
                        <button class="orderbutton">ORDER NOW</button>
                    </div>


                    <div class="right" data-aos="fade-left">
                        <img class="picture"
                            src="https://images.unsplash.com/photo-1631120821877-11c76d4671a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGluZGlhbiUyMHN3ZWV0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="the odin project logo"><img>

                    </div>
                </div>
            </section>

            <div class="spacer1 layer1"></div>
            <section>
                <div class="second">
                    <div data-aos="fade">
                        <h1>Food regional to all Pakistan</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="tilt-box-wrap">
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <div class="tilt-box">

                                <strong>
                                    <h2>Pakistan</h2>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="tilt-box-wrap">
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <div class="tilt-box">
                                <strong>
                                    <h2>City wise</h2>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="tilt-box-wrap">
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <div class="tilt-box">
                                <strong>
                                    <h2>Tradition wise</h2>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="tilt-box-wrap">
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <span class="t_over"></span>
                            <div class="tilt-box">
                                <strong>
                                    <h2>Region wise</h2>
                                </strong>
                            </div>
                        </div>
                    </div>



                </div>
            </section>
            <div class="spacer layer"></div>
            <div class="spacer11 layer11"></div>
            <section>
                <div class="third">
                <script src="script.js" ></script>
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
        </section>

        <footer class="footer">
            <div class="footer__addr" data-aos="fade">
                <img class="logo1" src="orangeone.png" alt="the odin project logo"><img>

                <h2>Contact</h2>

                <address>
                    Dunder Mifflin , 1725 Slough Avenue , Suite 200<br>

                    <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
                </address>
            </div>

            <ul>
                <li><a href="https://twitter.com/romeofrom1888" target="blank">Twitter</a></li>
                <li><a href="https://www.instagram.com/another_ahsan/" target="blank">Instagram</a></li>
                <li><a href="mailto:ahsan47sn@gmail.com" target="blank">Email</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100004731819279" target="blank">Facebook</a></li>
                <li><a href="https://github.com/Sn47" target="blank">Github</a></li>
                <li>
                    <p>👋</p>
                </li>
            </ul>

            <div class="legal" data-aos="fade">
                <p>&copy; 2023 Something But AAA. All rights reserved.</p>

                <div class="legal__links">
                    <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
                </div>
            </div>
        </footer>
    </body>

</html>