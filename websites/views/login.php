
<!DOCTYPE html>
<html>
<head>
    <title>About Website - Login</title>
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="login-body bg-half-moon bg-blend-multiply bg-position-center bg-size-cover bg-no-repeat bg-attachment-fixed">
    <div class="full-width margin-auto paddingtop-60px position-relative display-flex">
            <div class="card border-1px-solidwhite bg-transparent" style="height: 770px; width: 600px;">
                <section class="imgcontainer height-230px">
                    <img src="../img/profiles/users.png" alt="Avatar" class=" border-radius-50 width-150px height-150px marginleft-37 margintop-50px">
                </section>
                <div class="login-form full-width marginleft-47px">
                    <form action="../page/validate.php?sub_page=Home" method="POST">
                        <label class="login-label margin-10px color-white">Username: </label>
                        <br>
                        <input type="email" id="email" name="email" placeholder="username" required aria-label="Email" class="login-input margin-10px width-90 padding-4px">
                        <br>
                        <label class="login-label margin-10px color-white">Password: </label>
                        <br>
                        <input type="password" id="password" name="password" placeholder="password" required aria-label="Password" class="login-input margin-10px width-90 padding-4px">
                </div>
                <div class="height-250px full-width padding-20px">
                        <button class="color-white font-15px text-decoration-none width-60 bg-purple border-none marginbottom-20px padding-15px bg-purple marginleft-140px" type="submit">
                            Login
                        </button>
                    </form> 
                    <p class="text-underline text-centered font-13px marginbottom-20px color-white">Forgot Password?</p>
                    <p class="text-centered font-15px color-white">or</p>
                    <a href="../pages/validate.php?sub_page=register">
                        <button class="bg-info box-shadow font-12px padding-15px width-60 marginleft-140px border-none color-white">
                            Create New Account
                        </button>
                    </a>
                </div>
                <div class="height-250px display-flex">
                    <div class="full-width">
                        <button class="padding-15px bg-white border-none marginleft-47px width-40 marginbottom-20px bolder">
                            Continue with <span class="fa fa-google-plus font-15px"></span>
                        </button>
                        <button class="padding-15px bg-white border-none marginleft-38px width-40 marginbottom-20px bolder">
                            Continue with <span class="fa fa-facebook font-15px"></span>
                        </button>
                        <button class="padding-15px bg-white border-none marginleft-47px width-40 marginbottom-20px bolder">
                            Continue with <span class="fa fa-snapchat font-15px"></span>
                        </button>
                        <button class="padding-15px bg-white border-none marginleft-38px width-40 marginbottom-20px bolder">
                            Continue with <span class="fa fa-twitter font-15px"></span>
                        </button>
                    </div>
                </div>
            </div>
    </div>
</body>
</html> 