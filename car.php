<!doctype html>
<html>
<head>
		<?php
		session_start();
		$active_page="about";
		if (!isset($_SESSION['user'])) {
			header('location:index.php');
		}
		if ($_SESSION['type'] == 'admin') {
			header('location:addVehicle.php');
		}
		include('components/header.php');
		$active_page="about";
	?>
</head>

<body>
	<!-- header section  -->
	<div class="container">
		<?php
			include("components/new-navigation.php");
		?>

		<div class="content cover center-everything black">
			<div class="form-content-plain pull-right">
				<h3 class="text-center row">Car booking</h3>
				<div class="row text-center">
					<hr class="col-3">
				</div>
				<div class="form-body text-center">
					<form class="" action="confirmreservation.php" method="post">
						<!-- <form class="sign-up"> -->
						<label for="number">Number of Vehicle</label>
						<input type="number" min="1" name="number"  id="number" class="input-small">
						<label for="date">Date</label>
						<input type="date" name="date" id="date" class="input-small">
						<label for="duration">Duration(Days)</label>
						<input type="number" min="1" name="duration" id="duration" class="input-x-small">
						<input type="hidden" value="1" name="type">
						<div class="row text-center padding-vertical-small">
							<input type="submit" class="" name="submit" value="submit" onsubmit="event.preventDefault();">
							<!-- <input  type="button" value="submit" name="name"  class="white" onclick=" validationComplete();"> -->
						</div>
					</form>
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
