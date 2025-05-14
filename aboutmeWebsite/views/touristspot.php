<?php
   include '../nav/header.php';
   $page = isset($_GET)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css"> <!-- Optional external stylesheet -->
    <style>
        /*General CSS for the body*/
        body{
            background-image:url('../img/br.jpg');
            background-size:cover;
        }
        .hero-carousel img {
            max-height: 900px;
            object-fit: cover;
        }
        .content-section {
            margin: 40px 0;
        }
        .description-card {
            margin: 20px;
            box-shadow:0 8px 16px 0 grey;
           
        }
        .big-image {
            height: 100%;
            object-fit: cover;
            width:100%;
            box-shadow:0 8px 16px 0 grey;
        }
        footer {
            background-color:black;
            color: white;
            
            padding: 20px 0;
        }
    </style>
</head>
<body>
                                    <!----------------Content Section------------------>
    <?php renderNavbar(); ?>
    <div id="heroCarousel" class="carousel slide hero-carousel" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/set1.jpg" class="d-block w-100" alt="Beautiful Canals">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Windmills of Kinderdijk</h5>
                    <p>Visit the historic windmills in a stunning landscape.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/set2.avif" class="d-block w-100" alt="Windmills of Kinderdijk">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hague</h5>
                    <p>The Hague is perhaps best known among visitors for its beaches, monuments and bustling shopping district.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/set3.jpg" class="d-block w-100" alt="Keukenhof Gardens">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Amsterdam Canal</h5>
                    <p>Experience the colorful tulip fields in spring.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
                        <!-- First Content Section: Left Image, Right Description -->
        <div class="content-section row align-items-center">
            <div class="col-md-6">
                <img src="../img/pic1.jpg" class="img-fluid big-image" alt="Canal View">
            </div>
            <div class="col-md-6">
                <div class="card description-card">
                    <div class="card-body">
                        <h5 class="card-title">Discover the Canals</h5>
                        <p class="card-text">The canals of Amsterdam are a UNESCO World Heritage site, known for their beautiful architecture and vibrant atmosphere. Take a stroll along the banks or enjoy a boat tour for a unique perspective.</p>
                    </div>
                </div>
            </div>
        </div>

                        <!-- Second Content Section: Left Description, Right Image -->
        <div class="content-section row align-items-center">
            <div class="col-md-6">
                <div class="card description-card">
                    <div class="card-body">
                        <h5 class="card-title">Visit Kinderdijk</h5>
                        <p class="card-text">Home to iconic windmills, Kinderdijk offers visitors a glimpse into Dutch history and engineering. Explore the area by bike or on foot and take in the stunning landscapes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../img/pic2.jpg" class="img-fluid big-image" alt="Windmill View">
            </div>
        </div>
                         <!-- Fourth Content Section: Left Image, Right Description -->
        <div class="content-section row align-items-center">
            <div class="col-md-6">
                <img src="../img/pic3.jpg" class="img-fluid big-image" alt="Keukenhof Gardens">
            </div>
            <div class="col-md-6">
                <div class="card description-card">
                    <div class="card-body">
                        <h5 class="card-title">Experience Keukenhof</h5>
                        <p class="card-text">Keukenhof is the largest flower garden in the world, featuring millions of blooming tulips and other flowers. It's only open in spring, making it a must-see for flower lovers.</p>
                    </div>
                </div>
            </div>
        </div>
                         <!-- Fifth Content Section: Left Description, Right Image -->
        <div class="content-section row align-items-center">
            <div class="col-md-6">
                <div class="card description-card">
                    <div class="card-body">
                        <h5 class="card-title">Hague</h5>
                        <p class="card-text">The Hague is a city on the North Sea coast of the western Netherlands. Its Gothic-style Binnenhof (or Inner Court) complex is the seat of the Dutch parliament, and 16th-century Noordeinde Palace is the king’s workplace. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../img/pic4.jpg" class="img-fluid big-image" alt="Windmill View">
            </div>
        </div>
                        <!-- Sixth Content Section: Left Image, Right Description -->

        <div class="content-section row align-items-center">
            <div class="col-md-6">
                <img src="../img/pic5.webp" class="img-fluid big-image" alt="Keukenhof Gardens">
            </div>
            <div class="col-md-6">
                <div class="card description-card">
                    <div class="card-body">
                        <h5 class="card-title">Van Vogh Museum</h5>
                        <p class="card-text">The Van Gogh Museum is a Dutch art museum dedicated to the works of Vincent van Gogh and his contemporaries in the Museum Square in Amsterdam South, close to the Stedelijk Museum, the Rijksmuseum, and the Concertgebouw.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    <footer>
        <p>&copy; 2024 Tulip Paradise. All Rights Reserved.</p>
    </footer>
                                    <!-- Include Bootstrap and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</htm