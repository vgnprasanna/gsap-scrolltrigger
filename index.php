<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Test Site</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Hero -->
    <section class="hero-section">
        <h1 class="hero-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non placerat neque.</h1>
        <p class="hero-paragraph">Sed mollis diam in dapibus ultricies. Duis auctor arcu ac egestas posuere. Pellentesque porttitor, mi et maximus pretium, leo leo pharetra orci, ac ullamcorper orci nulla at felis.</p>
        <a href="#" class="hero-link">Explore Us</a>
    </section>
    <!-- /Hero -->

    <!-- Welcome -->
    <section class="welcome-section">
        <div class="scroll-text-up">Nunc lorem justo, pharetra</div>
        <div class="left-wrapper">
            <h2>Suspendisse maximus erat sed massa elementum</h2>
            <h3>Nunc lorem justo, pharetra nec arcu id, efficitur scelerisque lectus</h3>
        </div>
        <div class="right-wrapper">
            <p>Nam sodales convallis massa in tristique. Suspendisse ut tortor nunc. Proin molestie mauris sem, nec sollicitudin enim ultricies et. Etiam lectus magna, vehicula vitae leo nec, vehicula fringilla nunc. Sed id nibh leo. Pellentesque pulvinar elementum cursus. Vestibulum maximus nisl nec mollis faucibus. Etiam ornare mi vitae placerat laoreet. Vivamus auctor risus non libero iaculis scelerisque. Curabitur ut lacus facilisis, pretium est nec, gravida metus. Vestibulum quis facilisis nunc, vitae sollicitudin mi.</p>
        </div>
        <?php /* for ( $x = 0; $x < 20; $x++ ) : ?>
            <div class="ball"></div>
            <?php endfor; */ ?>
        <div class="scroll-text-down">Nunc lorem justo, pharetra</div>
    </section>
    <!-- /Welcome -->
    <!-- Video -->
    <section class="video-section">
        <video id="scrollVideo" muted playsinline>
            <source src="videos/cocktail-2-output.mp4" type="video/mp4">
        </video>
        <div class="left-wrapper">
            <?php for ( $x = 0; $x < 3; $x++ ) : ?>
                <div class="single-item">
                    <h2>Cras sed porttitor tortor</h2>
                    <p>Aliquam facilisis odio ac augue porta cursus. Sed efficitur consectetur erat non vestibulum. Proin tincidunt orci augue, feugiat scelerisque neque elementum ultrices</p>
                </div>
            <?php endfor; ?>
        </div>
        <div class="right-wrapper">
            <?php for ( $x = 0; $x < 3; $x++ ) : ?>
                <div class="single-item">
                    <h2>Cras sed porttitor tortor</h2>
                    <p>Aliquam facilisis odio ac augue porta cursus. Sed efficitur consectetur erat non vestibulum. Proin tincidunt orci augue, feugiat scelerisque neque elementum ultrices</p>
                </div>
            <?php endfor; ?>
        </div>
    </section>
    <!-- /Video -->
    <!-- About -->
    <section class="about-section">
        <h2>Nam sodales convallis massa in tristique</h2>
        <p>Proin non dolor sagittis, convallis est eget, tincidunt erat. Etiam commodo magna purus, eu ultricies mi vehicula vel. Pellentesque elementum cursus leo et fermentum. Duis felis nisl, dictum eget magna nec, maximus pellentesque eros. Sed sagittis eleifend nisl at volutpat. Vivamus elementum erat nec lorem consequat gravida. Maecenas porttitor scelerisque mollis. Aenean ac ipsum facilisis, molestie nibh eget, molestie nulla. Nullam tellus dolor, condimentum nec diam vitae, tempor tincidunt libero. Praesent eget nisl lobortis sapien posuere varius. Donec facilisis lorem libero. Mauris leo nisl, tempus eu vestibulum eget, malesuada et ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed rutrum magna eget erat tincidunt tristique. Cras posuere a nisi et tempor.</p>
        <div class="masked-wrapper">
            <img src="images/it-team.jpg" alt="">
        </div>
    </section>
    <!-- /About -->
    <!-- Services -->
    <section class="services-section" id="myScene">
        <h2 class="service-heading">Pellentesque porttitor</h2>
        <div class="services-wrapper">
            <div class="single-service">
                <div class="service-inner">
                    <img src="images/service-icon-1.png" alt="">
                    <h3>Nam sodales convallis</h3>
                    <p>Proin non dolor sagittis, convallis est eget, tincidunt erat. Etiam commodo magna purus, eu ultricies mi vehicula vel. Pellentesque elementum cursus leo et fermentum</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
            <div class="single-service">
                <div class="service-inner">
                    <img src="images/service-icon-2.png" alt="">
                    <h3>Nam sodales convallis</h3>
                    <p>Proin non dolor sagittis, convallis est eget, tincidunt erat. Etiam commodo magna purus, eu ultricies mi vehicula vel. Pellentesque elementum cursus leo et fermentum</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
            <div class="single-service">
                <div class="service-inner">
                    <img src="images/service-icon-3.png" alt="">
                    <h3>Nam sodales convallis</h3>
                    <p>Proin non dolor sagittis, convallis est eget, tincidunt erat. Etiam commodo magna purus, eu ultricies mi vehicula vel. Pellentesque elementum cursus leo et fermentum</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
            <div class="single-service">
                <div class="service-inner">
                    <img src="images/service-icon-4.png" alt="">
                    <h3>Nam sodales convallis</h3>
                    <p>Proin non dolor sagittis, convallis est eget, tincidunt erat. Etiam commodo magna purus, eu ultricies mi vehicula vel. Pellentesque elementum cursus leo et fermentum</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services -->
    <!-- Icons -->
    <section class="icon-section">
        <div class="icon-wrapper">
            <?php for ( $x = 1; $x <= 18; $x++ ) : ?>
                <div class="single-icon">
                    <img src="images/icons/icon-<?php echo $x; ?>.png" alt="">
                </div>
            <?php endfor; ?>
        </div>
    </section>
    <!-- /Icons -->
    <!-- Footer -->
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
    <script src="js/script.js"></script>
    <!-- <script src="js/three.js" type="module"></script> -->
</body>
</html>