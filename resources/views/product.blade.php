<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
        <h1>Product</h1>
        <table width="100%">
            <thead>
                <tr>
                    <th>Kode Product</th>
                    <th>Nama</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BR001</td>
                    <td>Sandal Jepit</td>
                    <td>5.000</td>
                </tr>
                <tr>
                    <td>BR001</td>
                    <td>Sandal Jepit</td>
                    <td>5.000</td>
                </tr>
                <tr>
                    <td>BR001</td>
                    <td>Sandal Jepit</td>
                    <td>5.000</td>
                </tr>
                <tr>
                    <td>BR001</td>
                    <td>Sandal Jepit</td>
                    <td>5.000</td>
                </tr>
            </tbody>
        </table>

        <!-- List Product  -->
        <div id="product">
            <div class="product-item">
                <span class="diskon">10% OFF</span>
                <img src="images/product1.jpeg" alt="Product 1">
                <div class="meta">
                    <h3>Celana Santai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, aperiam?</p>
                    <p class="price">Rp 30.000,-</p>
                    <a href="#">Buy</a>
                </div>
            </div>
            <div class="product-item">
                <img src="images/product2.jpeg" alt="Product 1">
                <div class="meta">
                    <h3>Celana Santai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, aperiam?</p>
                    <p class="price">Rp 30.000,-</p>
                    <a href="#">Buy</a>
                </div>
            </div>
            <div class="product-item">
                <span class="diskon">15% OFF</span>
                <img src="images/product1.jpeg" alt="Product 1">
                <div class="meta">
                    <h3>Celana Santai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, aperiam?</p>
                    <p class="price">Rp 30.000,-</p>
                    <a href="#">Buy</a>
                </div>
            </div>
            <div class="product-item">
                <span class="diskon">10% OFF</span>
                <img src="images/product1.jpeg" alt="Product 1">
                <div class="meta">
                    <h3>Celana Santai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, aperiam?</p>
                    <p class="price">Rp 30.000,-</p>
                    <a href="#">Buy</a>
                </div>
            </div>
            <div class="product-item">
                <img src="images/product2.jpeg" alt="Product 1">
                <div class="meta">
                    <h3>Celana Santai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, aperiam?</p>
                    <p class="price">Rp 30.000,-</p>
                    <a href="#">Buy</a>
                </div>
            </div>
            <div class="product-item">
                <span class="diskon">15% OFF</span>
                <img src="images/product1.jpeg" alt="Product 1">
                <div class="meta">
                    <h3>Celana Santai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, aperiam?</p>
                    <p class="price">Rp 30.000,-</p>
                    <a href="#">Buy</a>
                </div>
            </div>                                       
            <div class="clear"></div>
        </div>
        <!-- End List Product  -->

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