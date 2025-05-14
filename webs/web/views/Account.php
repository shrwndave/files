
<html>
<head>
    <title>About Website - Home</title>
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
	<div class="container my-5">
    <table class="table table-dark text-centered">
		<thead>
			<tr>
				<th><h5>Fullname</h5></th>
				<th><h5>Email</h5></th>
				<th><h5>Contact</h5></th>
				<th><h5>Password</h5></th>
				<th><h5>Action</h5></th>
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
							<td><?= $user['contact'] ?></td>
							<td><?= $user['password'] ?></td>
							<td>
								<a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#update<?= $user['id'] ?>"><span class="fa fa-pencil"></span> Update</a> | | 
								<a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $user['id'] ?>"><span class="fa fa-trash"></span> Delete</a>
							</td>
						</tr>
					<?php
					include '../modals/AccountModal.php';
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