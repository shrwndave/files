<?php
   include '../nav/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="../css/style.css"> <!-- Optional external stylesheet -->
    <style>
                 /* General CSS for the body*/
        .neather-container {
            background-image:url(../img/netherlands.jpg);
            background-size:cover;
            height:1700px
        }
        .hero {
            background-image: url('../img/set3.jpg');
            background-size: cover;
            height:900px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            padding: 30px;
            box-shadow:20px;
        }
        .hero-container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5); 
            padding: 30px;
            border-radius: 10px;
        }
        .hero-h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .hero-p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
       
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color:black;
        }
        .section-header {
            margin: 20px 0;
            color:white;
        }
        .card img {
            height: 200px;
            object-fit: cover;
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
    <?php renderNavbar(); ?>
                            <!------ Hero Section -------->
    <div class="hero">
        <div class="hero-container">
            <h1 class="hero-h1">WELCOME TO NETHERLANDS!</h1>
            <b class="hero-p" style="color:white">Explore to Inspire you.</b>
        </div>
    </div>
    <div class="neather-container"> 
                            <!-------- Tradition Section -------->
        <div class="container text-center" id="culture">
            <h2 class="section-header">Traditional Dish</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/dish1.jpg" class="card-img-top" alt="Art">
                        <div class="card-body">
                            <h5 class="card-title">Stamppot</h5>
                            <p class="card-text">is a traditional Dutch dish made from a combination of potatoes mashed with one or several vegetables and typically garnished with sausages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/dish2.jpg" class="card-img-top" alt="Festivals">
                        <div class="card-body">
                            <h5 class="card-title">Bitterballen</h5>
                            <p class="card-text">a Dutch meat-based snack, made by making a very thick stew thickened with roux and beef stock and generously loaded with meat, refrigerating the stew until it firms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/dish3.jpg" class="card-img-top" alt="Traditions">
                        <div class="card-body">
                            <h5 class="card-title">Poffertjes</h5>
                            <p class="card-text"> traditionally served with powdered sugar and knobs of butter. They are made of a batter that typically includes yeast and buckwheat flour, yielding a light, fluffy texture.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                <!---------- Attractions Section ------------>
        <div class="container text-center" id="attractions">
            <h2 class="section-header">Top Attractions</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/canal.jpg" class="card-img-top" alt="Canals">
                        <div class="card-body">
                            <h5 class="card-title">The Canals of Amsterdam</h5>
                            <p class="card-text"> Originated in the 17th century when Amsterdam was looking for a way to transport food and other goods to the city as quickly and efficiently as possible, while simultaneously controlling the water and keeping potential enemy armies at bay. </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/garden.jpg" class="card-img-top" alt="Keukenhof">
                        <div class="card-body">
                            <h5 class="card-title">Keukenhof Gardens</h5>
                            <p class="card-text">Keukenhof, one of the world's largest flower gardens, situated in the municipality of Lisse, in the Netherlands. According to the official website, Keukenhof Park covers an area of 32 hectares and approximately 7 million flower </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/farm.jpg" class="card-img-top" alt="Zaanse Schans">
                        <div class="card-body">
                            <h5 class="card-title">Zaanse Schans</h5>
                            <p class="card-text">Zaanse Schans is a neighborhood in the Dutch town of Zaandam, near Amsterdam. Historic windmills and distinctive green wooden houses were relocated here to recreate the look of an 18th/19th-century village.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <!------------ Cuisine Section -------------->
        <div class="container text-center" id="food">
            <h2 class="section-header">Dutch Cuisine</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/cousine1.jpg" class="card-img-top" alt="Stroopwafels">
                        <div class="card-body">
                            <h5 class="card-title">Stroopwafels</h5>
                            <p class="card-text"> First made in the city of Gouda in South Holland, stroopwafels are a well-known Dutch treat popular throughout the Netherlands and abroad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/cousine2.jpg" class="card-img-top" alt="Haring">
                        <div class="card-body">
                            <h5 class="card-title">Haring</h5>
                            <p class="card-text">haring, is one not-to-miss local delicacy. With the herring season in full effect from mid June, these well-known Dutch foods are mega fresh and extra tasty.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/cousine3.jpg" class="card-img-top" alt="Patat">
                        <div class="card-body">
                            <h5 class="card-title">Patat</h5>
                            <p class="card-text">Special chips' are served with mayonnaise, ketchup and finely chopped raw onions. You can usually choose between curry ketchup or regular tomato ketchup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <!----------Footer---------->
    <footer>
        <p style="color:white;">&copy; 2024 Tulip Paradise. All Rights Reserved.</p>
    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
