<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.84.0">
		<title>Carousel Template · Bootstrap v5.0</title>
	
		<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
	
		
	
		<!-- Bootstrap core CSS -->
		<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	
		<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}
	
		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
			font-size: 3.5rem;
			}
		}
		</style>
	
		
		<!-- Custom styles for this template -->
		<link href="../assets/dist/css/carousel.css" rel="stylesheet">
	</head>
	<body>
		
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Leyte Tourism - </a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
							<li class="nav-item">
								<a class="nav-link <?= $this->page == 'home'? 'active':'' ?>" aria-current="page" href="../pages/home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $this->page == 'services'? 'active':'' ?>" href="../pages/services.php">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $this->page == 'contact'? 'active':'' ?>" href="../pages/contact.php">Contact</a>
							</li>
						</ul>
						<form action="../pages/authentication.php" class="d-flex">
							<button class="btn btn-outline-success" type="submit">Login</button>
						</form>
					</div>
				</div>
			</nav>
		</header>
		