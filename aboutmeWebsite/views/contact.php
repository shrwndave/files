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
        body{
            background-image:url('../img/br.jpg');
            background-size:cover;
          
        }
        .contact-section {
            padding: 100px 0;
        }
        .map {
            height: 300px;
            width: 100%;
        }
        .container{
            height:500px;
           
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
                                <!------ Contact Section ----->
    <div class="contact-section text-center">
        <div class="container">
            <h1>Contact Us</h1>
            <b>If you have any questions, feel free to reach out!</b>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
                                <!------ Google Map ------->
    <div class="container">
        <h2 class="text-center">Our Location</h2>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509016!2d144.95373531531728!3d-37.81627997975121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11b79d%3A0x5045675218ce6f0!2sYour%20Location!5e0!3m2!1sen!2sau!4v1615925474123!5m2!1sen!2sau" allowfullscreen="" loading="lazy"></iframe>
    </div>
        <footer>
            <p>&copy; 2024 Tulip Paradise. All Rights Reserved.</p>
        </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
