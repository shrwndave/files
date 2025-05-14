<?php
	include 'nav/header.php';
?>
		<main>
		<div class="container py-4">
				<div class="p-5 mb-4 bg-light rounded-3">
					<div class="container-fluid py-5">
						<h1 class="display-5 fw-bold"><?= $info['cont_wlcm_heading'] ?></h1>
						<p class="col-md-8 fs-4">
							<?= $info['cont_wlcm_msg'] ?>
						</p>
					</div>
				</div>
			
				<div class="row align-items-md-stretch">
					<div class="col-md-6">
						<div class="h-100 p-5 text-white bg-dark rounded-3">
							<h2><?= $info['cont_sec_heading'] ?></h2>
							<p><?= $info['cont_address'] ?></p>
							<p><?= $info['cont_num'] ?></p>
							<p><?= $info['cont_email'] ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-light border rounded-3">
							<h2>Add borders</h2>
							<p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
							<button class="btn btn-outline-secondary" type="button">Example button</button>
						</div>
					</div>
				</div>
			</div>

<?php
	include 'nav/footer.php';
?>