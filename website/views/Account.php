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