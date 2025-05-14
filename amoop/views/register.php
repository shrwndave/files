<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register</title>
		<!-- Bootstrap CSS CDN -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet"> <!-- Custom CSS -->
		<style>
			.register-container {
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
			<div class="register-container">
				<h2 class="text-center mb-4">Register</h2>
				<?= empty($msg)? '':"<center style='color:red;'>".$msg."</center>" ?>
				<form action="../page/validate.php?function=register&&sub_page=register" method="POST"> <!-- Specify handler script -->
					<div class="mb-3">
						<label for="name" class="form-label">Full Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
					</div>
					<div class="mb-3">
						<label for="confirm_password" class="form-label">Confirm Password</label>
						<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
					</div>
					<div class="d-grid">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</form>
				<p class="mt-3 text-center">Already have an account? <a href="validate.php?sub_page=login">Login here</a></p>
			</div>
		</div>
		
		<!-- Bootstrap JS CDN -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
