<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /*----LOGIN CSS----*/
        .forms {
            background: #2c81a3;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /*-------LOG IN FORM CSS-----*/
        .wrapper {
            width: 100%;
            max-width: 520px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(10px);
            color: #ebe5e5;
            border-radius: 12px;
            padding: 50px 70px;
        }
        .wrapper h1 {
            font-size: 45px;
            text-align: center;
        }
        .input-box {
            position: relative;
            width: 100%;
            height: 70px;
            margin: 40px 0;
        }
        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgb(0, 225, 37);
            border-radius: 40px;
            font-size: 20px;
            color: #131111;
            padding: 20px 45px 20px 20px;
        }
        .input-box input::placeholder {
            color: #e6c2c2;
        }
        .wrapper .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 15.5px;
            margin: -15px 0 15px;
        }
        .remember-forgot a {
            color: #fff;
            text-decoration: none;
        }
        .remember-forgot a:hover {
            text-decoration: underline;
        }
        .wrapper .low {
            width: 100%;
            height: 45px;
            background: #b11919;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 18px;
            color: #333;
            font-weight: 600;
        }
        .register-link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 15px;
        }
        .register-link p a {
            color: #0e0d0d;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <section id="forms" class="forms section-padding">
        <div class="wrapper">
            <form action="../page/validate.php?sub_page=Home" method="POST">
                <h1>LOG IN</h1>
                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Email" required aria-label="Email">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Password" required aria-label="Password">
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" class="low">Log In</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="validate.php?sub_page=register">Register</a></p>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
