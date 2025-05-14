<?php
	include 'nav/admin_topnav.php';
	include 'nav/admin_sidebar.php';
?>
				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Tourism Address</h1>
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
					<div class="row">
						<div class="w3-bar w3-black">
							<button class="w3-bar-item w3-button" onclick="openCity('prov')">Province</button>
							<button class="w3-bar-item w3-button" onclick="openCity('mncp')">Municipality</button>
							<button class="w3-bar-item w3-button" onclick="openCity('brgy')">Barangay</button>
						</div>
						<div id="prov" class="w3-container w3-display-container city">
							<span onclick="this.parentElement.style.display='none'"
							class="w3-button w3-large w3-display-topright">&times;</span>
						</div>
						
						<div id="mncp" class="w3-container w3-display-container city" style="display:none">
							<span onclick="this.parentElement.style.display='none'"
							class="w3-button w3-large w3-display-topright">&times;</span>
							<h2>Municipality</h2>
							
							<div class="row">
								<div class="col-md-4">
									<h3>Add Municipality</h3>
									<form action="../pages/admin.php?function=addMunicipality&&sub_page=addMunicipality" method="POST" align="right">
										<select class="form-control" name="prov_id">
											<option disabled selected>**SELECT PROVINCE**</option>
											<option disabled></option>
											<?php
												foreach ($province as $prov){
													?>
														<option value="<?= $prov['prov_id']?>"><?= $prov['prov_name']?></option>
													<?php
												}
											?>
										</select>
										<input class="form-control" name="name" placeholder="Municipality Name" />
										<button class="mt-2 btn btn-primary btn-sm" type="submit">
											Add
										</button>
									</form>
								</div>
								<div class="col-md-8">
									<h3>List of Municipalities</h3>
									<table class="table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Province Name</th>
												<th>Municipality Name</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$n = 0;
												foreach ($municipality as $mncp){
														$n++;
													?>
														<tr>
															<td><?= $n ?></td>
															<td><?= $mncp['prov_name'] ?></td>
															<td><?= $mncp['mncp_name'] ?></td>
															<td>
																<a class="btn btn-primary btn-sm" href="../pages/admin.php?function=deleteMunicipality&&sub_page=deleteMunicipality">Edit</a>
																| 
																<a class="btn btn-danger btn-sm" href="../pages/admin.php?function=deleteMunicipality&&sub_page=deleteMunicipality&&id=<?= $mncp['mncp_id'] ?>">Delete</a>
															</td>
														</tr>
													<?php
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
						<div id="brgy" class="w3-container w3-display-container city" style="display:none">
							<span onclick="this.parentElement.style.display='none'"
							class="w3-button w3-large w3-display-topright">&times;</span>
							<h2>Barangay</h2>
							
							<div class="row">
								<div class="col-md-3">
									<h3>Add Barangay</h3>
									<form action="../pages/admin.php?function=addBarangay&&sub_page=addBarangay" method="POST" align="right">
										<select class="form-control" name="mncp_id">
											<option disabled selected>**SELECT MINICIPALITY**</option>
											<option disabled></option>
											<?php
												foreach ($municipality as $mncp){
													?>
														<option value="<?= $mncp['mncp_id']?>"><?= $mncp['mncp_name'].", ".$mncp['prov_name']?></option>
													<?php
												}
											?>
										</select>
										<input class="form-control" name="name" placeholder="Barangay Name" />
										<button class="mt-2 btn btn-primary btn-sm" type="submit">
											Add
										</button>
									</form>
								</div>
								<div class="col-md-9">
									<h3>List of Barangays</h3>
									<table class="table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Province Name</th>
												<th>Municipality Name</th>
												<th>Barangay Name</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$n = 0;
												foreach ($barangay as $brgy){
														$n++;
													?>
														<tr>
															<td><?= $n ?></td>
															<td><?= $brgy['prov_name'] ?></td>
															<td><?= $brgy['mncp_name'] ?></td>
															<td><?= $brgy['brgy_name'] ?></td>
															<td>
																<a class="btn btn-primary btn-sm" href="../pages/admin.php?function=deleteMunicipality&&sub_page=deleteMunicipality">Edit</a>
																| 
																<a class="btn btn-danger btn-sm" href="../pages/admin.php?function=deleteBarangay&&sub_page=deleteBarangay&&id=<?= $brgy['brgy_id'] ?>">Delete</a>
															</td>
														</tr>
													<?php
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</main>
<?php
	include 'nav/admin_footer.php';
?>