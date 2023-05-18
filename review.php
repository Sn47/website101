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
        <link rel="stylesheet" href="review.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        <script src="https://kit.fontawesome.com/07ada3bd79.js" crossorigin="anonymous"></script>
        <title>About Us</title>
    </head>

    <body>
        <?php
        require_once 'header.php';
    
    ?>
<h1 class="review">Review Form</h1>
<form>
  <ul class="items"></ul>

  <fieldset class="username enable">
    <div class="icon left"><i class="fa-solid fa-user fa-xl "style="color: #fff"></i></i></div>
    <input type="text" name="username" placeholder="Username">
    <div class="icon right button"><i class="fa-solid fa-arrow-down fa-xl" style="color: #fff"></i></div>
  </fieldset>

  <fieldset class="email">
    <div class="icon left"><i class="fa-solid fa-envelope fa-xl" style="color: #fff"></i></div>
    <input type="email" name="email" placeholder="Email">
    <div class="icon right button"><i class="fa-solid fa-arrow-down fa-xl" style="color: #fff"></i></div>
  </fieldset>

  <fieldset class="password">
    <div class="icon left"><i class="fa-solid fa-lock fa-xl" style="color: #fff"></i></div>
    <input type="password" name="password" placeholder="Password">
    <div class="icon right button"><i class="fa-solid fa-arrow-down fa-xl" style="color: #fff"></i></div>
  </fieldset>

  <fieldset class="password">
    <div class="icon left"><i class="fa-sharp fa-solid fa-comments fa-xl" style="color: #fff"></i></div>
    <input type="Review" name="Review" placeholder="Did you like our services?Tell us more">
    <div class="icon right button"><i class="fa-solid fa-arrow-down fa-xl" style="color: #fff"></i></div>
  </fieldset>

  <fieldset class="thanks">
    <div class="icon left"><i class="fa-sharp fa-solid fa-heart fa-xl" style="color: #ff0000;"></i></i></i></div>
    <p class="thanktext"> Thanks for your time</p>
    <div class="icon right"><i class="fa-sharp fa-solid fa-heart fa-xl" style="color: #ff0000;"></i></div>
  </fieldset>
</form>
<!-- <?php
        require_once 'footer.php'
    ?> -->
        <section>
            <div class="third">
                <script src="script.js"></script>
                <script src="review.js"></script>

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