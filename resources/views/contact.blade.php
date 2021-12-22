<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>    
</head>
<body>    
    <!-- Header  -->
    <header>
        <img src="images/logo.png" alt="Logo" width="160">
    </header>
    <!-- End Header  -->

    <!-- navigation  -->
    @include("navigation")
    <!-- End navigation  -->

    <!-- Content  -->
    <div id="content">
        <h1>Contact Us</h1>
        <form action="">
            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </p>  
            <p>
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject">
            </p>
            <p>
                <label for="pesan">Pesan</label>
                <textarea name="pesan" id="pesan" cols="30" rows="5"></textarea>
            </p>
            <p>
                <input type="submit" value="KIRIM">
                <input type="reset" value="RESET">
            </p>       
        </form>
    </div>
    <!-- End Content  -->

    <!-- Footer  -->
    <footer>
        <p>&#169; Informatika 1 - 2021/2022</p>
    </footer>
    <!-- End Footer  -->
    <!-- Javascript  -->    
    <script src="js/custom.js"></script>
</body>
</html>