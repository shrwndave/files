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
            <title>CONTACT PAGE</title>
        </head>
        <body>
            <!-- Navbar Start -->
            <?php
                include 'navbar.php'; 
                $currentPage = basename($_SERVER['PHP_SELF']);
                renderNavbar($currentPage);
            ?>
            <!-- Navbar End -->

            <!-- Contact Section Start -->
            <section class="contact" id="contact">
                <div class="heading">
                    Contact <span>us</span>
                </div>
                <div class="row">
                    <div class="col-md-5 py-3 py-md-0">
                        <h3>Let's Get In Touch</h3>
                        <p></p>
                        <i class="fa-solid fa-phone"><span>9200000000000</span></i><br><br>
                        <i class="fa-solid fa-envelope"><span>info@mail.com</span></i><br><br>
                        <i class="fa-solid fa-location-dot"><span>Karachi Sindh Pakistan</span></i>
                    </div>

                    <div class="col-md-7 py-3 py-md-0">
                        <form action="#">
                            <div class="mb-3 mt-3">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
                            </div>

                            <div class="mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>

                            <div class="mb-3 mt-3">
                                <input type="number" class="form-control" id="number" placeholder="Enter Number" required>
                            </div>

                            <textarea class="form-control" id="comment" rows="5" name="text" placeholder="Enter Address" required></textarea>

                            <button type="submit" class="order-btn">Order Now</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Contact Section End -->

            <!-- Footer Start -->
            <footer id="footer">
                <div class="f-content">
                    <div class="f-logo"><img src="../images/logo.png" alt=""></div>
                    <p>&copy;Copyright All Rights Reserved</p>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <br>
            </footer>
            <!-- Footer End -->

            <!-- BOOTSTRAP CDN LINK -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!-- BOOTSTRAP CDN LINK -->
        </body>
    </html>
