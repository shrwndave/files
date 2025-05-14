<?php
	include 'nav/admin_topnav.php';
	include 'nav/admin_sidebar.php';
?>
				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Tourist Destination</h1>
						<div class="btn-toolbar mb-2 mb-md-0">
							<div class="btn-group me-2">
								<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
							</div>
							<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
								<span data-feather="calendar"></span>
								This week
							</button>
						</div>
					</div>
					
					<h2>Add Tourist Destination</h2>
					<div class="row">
						<form action="../pages/admin.php?function=addTouDest&&sub_page=addTouDest" method="POST" enctype="multipart/form-data" align="right">
							<select class="form-control" name="brgy_id" required>
								<option disabled selected>**SELECT BARANGAY**</option>
								<option disabled></option>
								<?php
									foreach ($barangay as $brgy){
										?>
											<option value="<?= $brgy['brgy_id'] ?>"><?= "Brgy. ".$brgy['brgy_name'].", ".$brgy['mncp_name'].", ".$brgy['prov_name'] ?></option>
										<?php
									}
								?>
							</select>
							<input class="form-control" type="text" name="dest" placeholder="Tourist Destination Name" required />
							<input class="form-control" type="text" name="desc" placeholder="Description" required />
							<input class="form-control" type="file" name="logo" required />
							<button class="mt-2 btn btn-sm btn-primary">
								Save
							</button>
						</form>
					</div>
					
					<hr/>
					
					<h2>List of Tourist Destination</h2>
					<div class="table-responsive">
						<table class="table table-striped table-sm">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Address</th>
									<th scope="col">Destination Name</th>
									<th scope="col">Description</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(!empty($destination)){
									$n = 0;
									foreach($destination as $dest){
										$n++;
										?>
											<tr>
												<td><?= $n ?></td>
												<td><?= "Brgy. ".$dest['brgy_name'].", ".$dest['mncp_name'].", ".$dest['prov_name'] ?></td>
												<td>
													<img src="../images/<?= $dest['dest_logo'] ?>" width="20px" height="20px" />
													<?= $dest['dest_name'] ?>
												</td>
												<td><?= $dest['dest_description'] ?></td>
												<td>
													<a class="btn btn-primary btn-sm " href="" >Edit</a>
													<a class="btn btn-danger btn-sm " href="../pages/admin.php?function=deleteDest&&sub_page=deleteDest&&id=<?= $dest['dest_id'] ?>" >Delete</a>
												</td>
											</tr>
										<?php
									}
								}else{
									echo "No Data Entry.";
								}
								?>
							</tbody>
						</table>
					</div>
				</main>
<?php
	include 'nav/admin_footer.php';
?>