<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
            <title>MENU</title>
        </head>
        <body>

            <!-- Navbar Start -->
            <?php
                include 'navbar.php'; 
                $currentPage = basename($_SERVER['PHP_SELF']);
                renderNavbar($currentPage);
            ?>
            <!-- Navbar End -->

            <!-- Top Section Start -->
            <div class="top-section">
                <h5>WHAT WE SERVE</h5>
                <h3>Your Favourite Food <br> Delivery Partner</h3>
                <div class="row">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/img1.png" alt="">
                            <div class="card-body">
                                <h1>Easy To Order</h1>
                                <p>You only need a few steps in <br> ordering food</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/img2.png" alt="">
                            <div class="card-body">
                                <h1>Fastest Delivery</h1>
                                <p>Delivery that is always ontime <br> even faster</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/img3.png" alt="">
                            <div class="card-body">
                                <h1>Best Quality</h1>
                                <p>Not only fast for us quality is also <br> number one</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Section End -->

            <!-- Our Menu Start -->
            <section class="menu" id="menu">
                <h3>Menu</h3>
                <h2>Delicious Dishes Is Here <i class="fa-solid fa-arrow-down"></i></h2>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/Mangalorean_Chicken.png" alt="">
                            <div class="card-body">
                                <h3>M Chicken</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$20 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/Garlic_Fried.png" alt="">
                            <div class="card-body">
                                <h3>Garlic Fried</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$30 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/Grilled_beef_steak.png" alt="">
                            <div class="card-body">
                                <h3>G Beef Steak</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$120 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/Pineapple_Fried_Rice.png" alt="">
                            <div class="card-body">
                                <h3>Fried Rice</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$200 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/Grilled_pork_ribs.png" alt="">
                            <div class="card-body">
                                <h3>Pork Ribs</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$300 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/crispy_fried.png" alt="">
                            <div class="card-body">
                                <h3>Crispy Fried</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$10 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/sushi__japanese.png" alt="">
                            <div class="card-body">
                                <h3>Sushi Japanes</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$150 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="../images/Lyulya_kebab.png" alt="">
                            <div class="card-body">
                                <h3>Lyulya Kebab</h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <p>$250 <i class="fa-solid fa-credit-card"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Menu End -->

            <!-- Footer Start -->
            <footer id="footer">
                <div class="f-content">
                    <div class="f-logo"><img src="../images/logo.png" alt=""></div>
                    <p>&copy;Copyright All Rights Reserved</p>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
                <br>
            </footer>
            <!-- Footer End -->

            <!-- BOOTSTRAP CDN LINK -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!-- BOOTSTRAP CDN LINK -->

        </body>
    </html>