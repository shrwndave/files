<?php
   include '../nav/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css"> <!-- Optional external stylesheet -->
    <style>
            /*General CSS for the body*/
        body {
            background-image:url('img/br.jpg');
            background-size:cover;
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #e0e0e0;
        }
        .navbar-brand {
            font-weight: bold;
            color: #e63946;
        }
        .hero {
            background-image: url('../img/flower.jpg');
            height:900px;
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
        .hero h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .card {
            border: none;
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }
        footer {
            background-color:black;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
                            <!-----------Content Section----------->
    <?php renderNavbar(); ?>
        <div class="hero">
            <h1>Different Variety of Tulips</h1>
         </div>
         <div class="container my-5">
            <h2 class="text-center mb-4">Tulip Gallery</h2>
         <div class="row">
                                                   <!-- Tulip Card 1 -->
         <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip1.jpg" class="card-img-top" alt="Tulip 1">
                <div class="card-body">
                    <h5 class="card-title"> Violet Tulips</h5>
                    <p class="card-text">Vibrant red tulips symbolize love and passion.</p>
                </div>
            </div>
        </div>
                                                    <!------- Tulip Card 2---------->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip2.jpg" class="card-img-top" alt="Tulip 2">
                <div class="card-body">
                    <h5 class="card-title">Pink Tulips</h5>
                    <p class="card-text">Bright yellow tulips represent cheerfulness and warmth.</p>
                </div>
            </div>
        </div>
                                                    <!----------Tulip Card 3----------->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip3.jpg" class="card-img-top" alt="Tulip 3">
                <div class="card-body">
                    <h5 class="card-title">Yellow Tulips</h5>
                    <p class="card-text">Elegant purple tulips signify royalty and admiration.</p>
                </div>
            </div>
        </div>
                                                 <!-------Tulip Card 4------------>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip4.jpg" class="card-img-top" alt="Tulip 1">
                <div class="card-body">
                    <h5 class="card-title">Red Tulips</h5>
                    <p class="card-text">Vibrant red tulips symbolize love and passion.</p>
                </div>
            </div>
        </div>
                                                <!-------- Tulip Card 5 --------->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip5.jpg" class="card-img-top" alt="Tulip 2">
                <div class="card-body">
                    <h5 class="card-title">Orange Tulips</h5>
                    <p class="card-text">Bright yellow tulips represent cheerfulness and warmth.</p>
                </div>
            </div>
        </div>

                                                <!------- Tulip Card 6 -------->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip6.jpg" class="card-img-top" alt="Tulip 3">
                <div class="card-body">
                    <h5 class="card-title">Blue Tulips</h5>
                    <p class="card-text">Elegant purple tulips signify royalty and admiration.</p>
                </div>
            </div>
        </div>
                                                <!---------Tulip 7----------->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip7.jpg" class="card-img-top" alt="Tulip 1">
                <div class="card-body">
                    <h5 class="card-title">Black Tulips</h5>
                    <p class="card-text">Vibrant red tulips symbolize love and passion.</p>
                </div>
            </div>
        </div>

                                                <!------ Tulip Card 8-------->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip8.jpg" class="card-img-top" alt="Tulip 2">
                <div class="card-body">
                    <h5 class="card-title">White Tulips</h5>
                    <p class="card-text">Bright yellow tulips represent cheerfulness and warmth.</p>
                </div>
            </div>
        </div>
                                             <!------- Tulip Card 9 ------->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tulip9.jpg" class="card-img-top" alt="Tulip 3">
                <div class="card-body">
                    <h5 class="card-title">Green Tulips</h5>
                    <p class="card-text">Elegant purple tulips signify royalty and admiration.</p>
                </div>
            </div>
        </div>
    </div>
</div>
                                    <!----------Footer----------->
    <footer>
        <p>&copy; 2024 Tulip Paradise. All Rights Reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
