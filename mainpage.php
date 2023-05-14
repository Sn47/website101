<?php

    
    include("connection.php");
    include("functions.php");

    
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
        <?php
            require_once 'header.php';
        ?>

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
        </section>

        <?php
    require_once 'footer.php';
?>
    </body>

</html>