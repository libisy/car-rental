<!doctype html>
<html>
<head>
	<?php
		session_start();
		if (!isset($_SESSION['user'])) {
	  	header("location:myreservations.php");
		}
		include('components/header.php');
	?>
</head>
	<link rel="shortcut icon" href="photos/car.png" type="image/png" />
<body>
	<!-- header section  -->
	<div class="container">
		<?php
			include("components/new-navigation.php");
		?>
		<div class="content">
			<div class="row services">
				<div class="how-to-box">
					<div class="how-to-icon background-cover car-logo  pointer">
						<a class="cover" href="car.php">
						</a>
						<!-- <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i> -->
					</div>
					<div class="how-to-label">
						<a href="car.php">
							Car
						</a>
					</div>
				</div>
				<div class="how-to-box">
					<div class="how-to-icon jeep-logo background-cover pointer">
						<a class="cover" href="#">
						</a>
					</div>
					<div class="how-to-label">
						<a href="#">
							Jeep
						</a>
					</div>
				</div>
				<div class="how-to-box">
					<div class="how-to-icon micro-logo background-cover pointer">
						<a class="cover" href="#">
						</a>
					</div>
					<div class="how-to-label">
						<a href="#">
							Micro
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
		</div>
		<?php
			include('components/footer.php');
		?>

	</div>
	</body>
</html>
