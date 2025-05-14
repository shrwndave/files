<!DOCTYPE html>
<html>
<head>
    <title>About Website - Register</title>
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
        <div class="login-row padding-20px marginleft-80px media" style="width:50%; right:50px">
        <h6 class="color-white  "><em>Registering new account don't work</em></h6>
            <div class="card media-margintop-50px bg-transparent padding-50px border-1px-solidwhite " style="height: 500px;width: 700px;">
                <div class="marginleft-80px">
                    <form href="../page/validate.php?function=register&&sub_page=register" method="POST">


                        <input placeholder="First Name" 
                                type="text" 
                                class="css login-input marginbottom-10px width-415 padding-4px border-gray float-left" 
                                id="firstname" 
                                name="name" 
                                required aria-label="First name">


                        <input placeholder="Last Name" 
                                type="text" 
                                class="css login-input marginbottom-10px marginleft-38px width-415 padding-4px border-gray float-left" 
                                id="lastname" 
                                name="lastname" 
                                required aria-label="Last name">

                        <br>

                        <label class="login-label left-text float-left width-20 marginbottom-10px color-gray">
                            Email:
                        </label>

                        <input type="email" placeholder="@gmail.com, @yahoo.com, etc" class="css login-input float-left width-70 padding-4px border-gray marginbottom-10px"
                                id="email"
                                name="email" 
                                required aria-label="Email">


                        <label class="login-label left-text float-left width-20 marginbottom-10px color-gray">
                            Contact:
                        </label>

                        <input placeholder="+63" 
                                type="text" 
                                class="contact login-input float-left width-70 padding-4px border-gray marginbottom-10px"
                                id="contact" 
                                name="contact" 
                                required aria-label="contact">

                        
                        <!--<button class="float-left padding-4px color-white bg-primary font-25px border-none marginleft-105px width-20 marginbottom-20px bolder disabled">Verify</button>

                        <input placeholder="6 - Digit Code" type="text" class="css login-input float-left padding-4px marginleft-38px width-43 border-gray marginbottom-20px">-->

                        <label class="login-label color-gray float-left left-text full-width marginbottom-10px">
                            Password:
                        </label>

                        <input type="password" 
                                class="login-input padding-4px marginbottom-20px width-90 border-gray" 
                                id="password" 
                                name="password"  
                                required aria-label="Password">

                        <label class="login-label color-gray float-left left-text full-width marginbottom-10px">
                            Confirm Password:
                        </label>

                        <input type="password" 
                                class="login-input padding-4px marginbottom-20px width-90 border-gray" 
                                id="confirm_password" 
                                name="confirm_password" 
                                required aria-label="Confirm Password">

                        <button class="width-60 bg-info padding-10px border-none color-white font-15px marginleft-55px marginbottom-20px" type="submit">Sign up</button>
                    </form>
                </div>
                <p class="text-underline text-centered font-13px marginbottom-20px color-white">Dont have an account? <a href="../page/validate.php?sub_page=login"> Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
