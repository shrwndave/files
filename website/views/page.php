<?php 
    // this is the variable page 
    $location = isset($_GET['location']) ? $_GET['location'] : $this->sub_page;
?>
<html>
<head>
    <title>About Website - <?php echo ucwords($location) ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"    
            crossorigin="anonymous">
    </script>
    <link rel="stylesheet" 
          href="../css/style.css">
</head>
<body class="vh-100 overflow-x-hidden bg-half-moon bg-blend-multiply bg-position-center bg-size-cover bg-no-repeat bg-attachment-fixed">
    <nav class="navbar navbar-expand-lg bg-black fixed-top navbar-fixed-width">
        <?php include "../nav/navbar.php" ?>
    </nav>
    <div class="container paddingtop-120px">
        <?php include $location.'.php' ?>
    </div>
    <footer class="paddingtop-120px">
        <?php include "../nav/footer.php" ?>
    </footer>
</body>
</html>