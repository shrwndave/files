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
            <title>ABOUT PAGE</title>
        </head>
        <body>
            <!-- Navbar Start -->
            <?php
                include 'navbar.php'; 
                $currentPage = basename($_SERVER['PHP_SELF']);
                renderNavbar($currentPage);
            ?>
            <!-- Navbar End -->
            <!-- About Section Start -->
            <div class="container" id="about">
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-6 py-3 py-md-0">
                        <div>
                            <img src="../images/image 46.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 py-3 py-md-0">
                        <p>Imagine the crisp crunch of a fresh vegetable salad: vibrant cherry tomatoes bursting with sweetness, thinly sliced cucumbers lending their cool, refreshing taste, and an array of mixed greens providing a delightful variety of textures. Add some finely grated carrots for a touch of earthy sweetness, and perhaps a sprinkle of radishes for a bit of peppery bite. Drizzle with a tangy balsamic vinaigrette to bring all the flavors together. It's a simple yet sophisticated dish that satisfies both the palate and the senses, proving that healthy eating can be anything but boring. 🍅🥒🥗</p>
                    </div>
                </div>
            </div>
            <!-- About Section end -->

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
