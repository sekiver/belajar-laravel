<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
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
        <h1>@yield("page_title")</h1>
        @yield("content")
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


