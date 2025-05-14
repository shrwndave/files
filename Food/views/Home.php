<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
            <title>HOME PAGE</title>
        </head>
        <body>

        <!-- Navbar Start -->
        <?php
            include 'navbar.php'; 
            $currentPage = basename($_SERVER['PHP_SELF']);
            renderNavbar($currentPage);
        ?>

        <!-- Navbar End -->

        <!-- Home Section Start -->
        <section class="home" id="home">
            <div class="home-content">
                <h3>Claim Best Offer <br> On Fast <span>Food</span> & <span>Restaurant</span></h3>
                <p>HEALTHY FOOD FOR HEALTHY BODY</p>
                <a href="../views/Menu.php" id="home-btn">Our Menu</a>
            </div>
            <div class="img">
                 <img src="../images/image 46.png" alt="" class="img-fluid">
            </div>
        </section>
        <!-- Home Section End -->

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