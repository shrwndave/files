<html>
<head>
    <title>About Website - Accounts</title>
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
	<div class="container my-5 paddingtop-120px">
    <table class="table table-striped text-centered">
		<thead>
			<tr>
				<th>Fullname</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				//get users using foreach
				foreach ($account as $user){
					?>
						<tr>
							<td><?= $user['username'] ?></td>
							<td><?= $user['email'] ?></td>
							<td><?= $user['password'] ?></td>
							<td>
								<a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#update<?= $user['id'] ?>">Update</a> | 
								<a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $user['id'] ?>">Delete</a>
							</td>
						</tr>
						<div class="modal fade" id="update<?= $user['id'] ?>" >
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5>Update Account</h5>
									</div>
									<form action="account.php?function=update&&sub_page=update" method="post">
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4" style="text-align:right;">
															<label>User ID:</label><br/>
															<label>Fullname:</label><br/>
															<label>Email:</label><br/>
															<label>Password:</label>
														</div>
														<div class="col-md-6" style="text-slign:left;">
															<input class="form-control btn-sm" name="id" value="<?= $user['id'] ?>" readonly />
															<input class="form-control btn-sm" name="name" value="<?= $user['username'] ?>" />
															<input class="form-control btn-sm" name="email" value="<?= $user['email'] ?>" />
															<input class="form-control btn-sm" name="password" value="<?= $user['password'] ?>" />
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-primary" type="submit">Save</button>
											<button class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="modal fade" id="delete<?= $user['id'] ?>" >
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5>Delete Account</h5>
									</div>
									<form action="account.php?function=delete&&sub_page=deleteUser" method="post">
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4" style="text-align:right;">
															<label>User ID:</label><br/>
															<label>Fullname:</label><br/>
															<label>Email:</label><br/>
															<label>Password:</label>
														</div>
														<div class="col-md-6" style="text-slign:left;">
															<input class="form-control btn-sm" name="id" value="<?= $user['id'] ?>" readonly />
															<input class="form-control btn-sm" name="name" value="<?= $user['username'] ?>" readonly />
															<input class="form-control btn-sm" name="email" value="<?= $user['email'] ?>" readonly />
															<input class="form-control btn-sm" name="password" value="<?= $user['password'] ?>" readonly />
														</div>
													</div>
												</div>
												<h5>Are you sure to delete this account?</h5>
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-primary" type="submit">Save</button>
											<button class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php
				}
			?>
		</tbody>
    </table>
  </div>
    </div>
    <footer class="paddingtop-120px">
        <?php include "../nav/footer.php" ?>
    </footer>
</body>
</html>