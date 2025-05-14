<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login</title>
		<!-- Bootstrap CSS CDN -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet"> <!-- Custom CSS -->
		<style>
			  /* General CSS for the body*/
            body{
                background-image: url("../img/aurora.jpg");
                background-size:cover;
                color:white;
            }
           
			.login-container {
			max-width: 400px;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}
			.full-height {
			height: 100vh;
			}
		</style>
	</head>
	<body>
		<div class="container d-flex justify-content-center align-items-center full-height">
			<div class="login-container">
				<h2 class="text-center mb-4">Login</h2>
				<?= empty($msg)? '':"<center style='color:red;'>".$msg."</center>" ?>
				<form action="../page/validate.php?function=login&&sub_page=loggedin" method="POST"> <!-- Specify handler script -->
					<div class="mb-3">
						<label for="text" class="form-label">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
						<label class="form-check-label" for="rememberMe">Remember me</label>
					</div>
					<div class="d-grid">
						<button type="submit" class="btn btn-primary" name="login" >Login</button>
					</div>
				</form>
				<p class="mt-3 text-center">Don't have an account? <a href="validate.php?sub_page=register">Register here</a></p>
			</div>
		</div>
	
		<!-- Bootstrap JS CDN -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
