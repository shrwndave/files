
<html>
<head>
    <title>About Website - Contact</title>
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
        <main role="main" class="container color-white bg-transparent margintop-50px marginbottom-10px">
            <div class="row">
                <div class="col-md-6 blog-main border-gray padding-20px">
                    <div class="mb-3">

                        <h3 class="text-centered">Online Inquiry</h3>

                        <input type="email" class="con form-control margintop-50px" id="exampleFormControlInput1" placeholder="Name">

                        <input type="email" class="con form-control margintop-50px" id="exampleFormControlInput1" placeholder="Email Address">

                        <input type="email" class="con form-control margintop-50px" id="exampleFormControlInput1" placeholder="Phone Number">

                        <div class="dropdown"> 
                            <input class="con form-control dropdown-toggle margintop-50px" type="Input" data-bs-toggle="dropdown" aria-expanded="true" placeholder="Select an Internet">
                            <div class="dropdown-menu" style="width:300px;">
                                <li class="dropdown-item">Satellite</li>
                                <li class="dropdown-item">Cable</li>
                                <li class="dropdown-item">Dial-up Connection</li>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class=" con form-control margintop-50px" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button class="marginleft-210px cursive bolder btn bg-purple color-white width-30">Send</button>
                </div>
                <aside class="col-md-6 blog-sidebar fit-height padding-20px text-centered">
                    <h3 class="">Contact Details<h3>

                    <p class=" margintop-50px font-18px">sherwinparado05@gmail.com</p>
                    <p class="font-18px font-lighter">872-456-98-0</p>

                    <p class=" margintop-50px font-18px"><b>Westfield</b></p>
                    <p class="font-18px font-lighter">233 North Avenue E.</p>
                    <p class="font-18px font-lighter">Westfield, NJ 07090</p>

                    <p class=" margintop-50px font-18px"><b>Summit</b></p>
                    <p class="font-18px font-lighter">357 Springfield Ave.</p>
                    <p class="font-18px font-lighter">Short Hills, NJ 07901</p>

                    <p class=" margintop-50px font-18px"><b>Short Hills Office</b></p>
                    <p class="font-18px font-lighter">549 Millburn Ave.</p>
                    <p class="font-18px font-lighter">Short Hills, NJ 07078</p>
                </aside>
            </div>
        </main>
    </div>
    <footer class="paddingtop-120px">
        <?php include "../nav/footer.php" ?>
    </footer>
</body>
</html>