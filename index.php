<!doctype html>
<html>
<head>
	<?php
		include('components/header.php');
		session_start();
		if (isset($_SESSION['user'])) {
	  	header("location:myreservations.php");
		}
		$active_page="home";
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
			<div class="home-cover white">
				<div class="home-slogan">
					<p class="big-slogan">
						"Journey is for everyone."
					</p>
					<p class="small-slogan">
						Travel made easy with Online Vehicle Rental. Hire now to get exclusive offer.
					</p>
				</div>
			</div>
			<div class="row how-to">
				<div class="how-to-box">
					<div class="how-to-icon sign-up-logo background-cover pointer">
						<a class="cover" href="signupform.php">
						</a>
						<!-- <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i> -->
					</div>
					<div class="how-to-label">
						<a href="signupform.php">
							Signup
						</a>
					</div>
				</div>
				<div class="how-to-box">
					<div class="how-to-icon book-logo background-cover pointer">
						<a class="cover" href="#">
						</a>
					</div>
					<div class="how-to-label">
						<a href="#">
							Booking
						</a>
					</div>
				</div>
				<div class="how-to-box">
					<div class="how-to-icon pay-logo background-cover pointer">
						<a class="cover" href="#">
						</a>
					</div>
					<div class="how-to-label">
						<a href="#">
							Pay
						</a>
					</div>
				</div>
				<div class="how-to-box">

					<div class="how-to-icon ride-logo background-cover pointer">
						<a class="cover" href="#">
						</a>
					</div>
					<div class="how-to-label">
						<a href="#">
							Enjoy
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
