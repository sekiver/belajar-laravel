<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <!-- Animate.css  -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="plugins/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl/assets/owl.theme.default.min.css">

    <!-- Library jQuery  -->
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>    
    <!-- Header  -->
    <header>
        <img src="images/logo.png" alt="Logo" width="160">
    </header>
    <!-- End Header  -->

    @include("navigation")

    <!-- Content  -->
    <div id="content">
        <h1 class="animate__animated animate__backInLeft">Welcome to Informatika 1 - 2021</h1>
         <!-- SLider Image  -->
        <div class="owl-carousel owl-theme">
            <div class="gambar">
                <img src="images/slide1.jpg" alt="">
            </div>
            <div class="gambar">
                <img src="images/slide2.jpg" alt="">
            </div>
            <div class="gambar">
                <img src="images/slide3.jpg" alt="">
            </div>
        </div>
        <!-- End Slider  -->
        <h2>Sejarah Informatika</h2>
        <p><a href="https://kompas.com">Kompas</a> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis magnam ipsam error, laboriosam quo delectus dignissimos! Obcaecati ducimus itaque, rem velit vero odio, tenetur possimus a fugit, distinctio exercitationem. Dicta?</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa quibusdam deserunt non distinctio minus consectetur.</p>
        <h2>Sub Title 2</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam iusto natus soluta quaerat fugit explicabo nulla! Accusantium recusandae ab animi perspiciatis beatae dolorem aspernatur consequuntur, magni tempore hic cumque!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam iusto natus soluta quaerat fugit explicabo nulla! Accusantium recusandae ab animi perspiciatis beatae dolorem aspernatur consequuntur, magni tempore hic cumque!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam iusto natus soluta quaerat fugit explicabo nulla! Accusantium recusandae ab animi perspiciatis beatae dolorem aspernatur consequuntur, magni tempore hic cumque!</p>
    </div>
    <!-- End Content  -->

    <!-- Footer  -->
    <footer>
        <p>&#169; Informatika 1 - 2021/2022</p>
    </footer>
    <!-- End Footer  -->
    <!-- Javascript  -->
    <script src="plugins/owl/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>


