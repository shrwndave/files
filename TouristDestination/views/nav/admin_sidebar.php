
		
		<div class="container-fluid">
			<div class="row">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
					<div class="position-sticky pt-3">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link <?=
									$this->sub_page == 'admin'?
									'active':''
									?>" aria-current="page" href="#">
									<span data-feather="home"></span>
									Dashboard
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file"></span>
									Home
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="shopping-cart"></span>
									Services
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="users"></span>
									Contact
								</a>
							</li>
							<hr style="margin-left:15px; width:80%;" />
							<li class="nav-item">
								<a class="nav-link <?=
									$this->sub_page == "tourAddress"
									|| 
									$this->sub_page == "addBarangay"
									|| 
									$this->sub_page == "addMunicipality"
									|| 
									$this->sub_page == "deleteMunicipality"
									|| 
									$this->sub_page == "addprovince"?
									'active':''
									?>" href="../pages/admin.php?sub_page=tourAddress">
									<span data-feather="bar-chart-2"></span>
									Tourism Address
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?=
									$this->sub_page == 'tourDest'
									||
									$this->sub_page == 'addTouDest'
									|| 
									$this->sub_page == 'deleteDest'?
									'active':''
									?>" href="../pages/admin.php?sub_page=tourDest">
									<span data-feather="layers"></span>
									Tourist Destination
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="layers"></span>
									Package
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="layers"></span>
									Reservation
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="layers"></span>
									Feedback
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="layers"></span>
									Accounts
								</a>
							</li>
						</ul>
							<hr style="margin-left:15px; width:80%;" />
				
						<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
							<span>Reports</span>
							<a class="link-secondary" href="#" aria-label="Add a new report">
								<span data-feather="plus-circle"></span>
							</a>
						</h6>
						<ul class="nav flex-column mb-2">
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Current month
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Last quarter
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Social engagement
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Year-end sale
								</a>
							</li>
						</ul>
					</div>
				</nav>
			