
<!doctype html>
<html>
<head>
	<script type="text/javascript" src="public/js/formValidation.js"></script>

	<?php
		session_start();
		include('components/header.php');
		$active_page="about";
		if (isset($_SESSION['user'])) {
			if ($_SESSION['type'] == 'user') {
				header('location:myreservations.php');
			}
		} else {
				header('location:index.php');
    }
	?>
</head>

<body>
	<!-- header section  -->
	<div class="container">
		<?php
			include("components/new-navigation.php");
		?>

		<?php if (false) { ?> true <?php } ?>
		<div class="content cover center-everything">
			<div class="cover center-everything">
				<div class="black add-car center-everything">
					<div class="form-content-plain pull-right">
						<h3 class="text-center row">Add Car</h3>
						<div class="row text-center">
							<hr class="col-3">
						</div>
						<div class="form-body text-center">
							<form class="sign-up" action="addVehicletoDb.php" method="post">
								<!-- <form class="sign-up"> -->
								<label for="number">Number</label>
								<input type="text" name="number"  id="number" class="input-small">
								<label for="color">Color</label>
								<input type="color" name="color" id="color" class="input-small">
								<input type="hidden" name="type" id="type" value="1" class="input-small">
								<div class="row text-center padding-vertical-small">
								<input type="submit" class="black" value="Submit">
									<!-- <input  type="button" value="submit" name="name"  class="white" onclick=" validationComplete();"> -->
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- content goes here -->

		</div>
		<div class="clearfix">
		</div>
		<!-- footer -->
		<?php
			include('components/footer.php');
		?>
	</div>
	</body>
</html>
