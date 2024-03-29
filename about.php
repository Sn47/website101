<?php
session_start();
include ("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        <script src="https://kit.fontawesome.com/07ada3bd79.js" crossorigin="anonymous"></script>
        <title>About Us</title>
    </head>

    <body>
        <?php
        require_once 'header.php';
    
    ?>


        <div class="about-section">
            <h1>About Us </h1>
            <p>Made  this site to promote the concept of soghat</p>
            <p>We hope this helps people spread love through sweet.</p>


            <h2 style="text-align:center">Our Team</h2>
            <div class="container">
                <div class="card card0">
                    <div class="border">
                        <h2>Ahsan Naveed</h2>

                    </div>
                </div>
                <div class="card card1">
                    <div class="border">
                        <h2>Ahmed Abdullah</h2>

                    </div>
                </div>
                <div class="card card2">
                    <div class="border">
                        <h2>Ahmad Ali</h2>

                    </div>
                </div>
            </div>
            <h1>Made with love ♥</h1>
        </div>
        <?php
        require_once 'footer.php'
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