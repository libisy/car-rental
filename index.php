<!doctype html>
<html>
<head>
	<?php
		include('components/header.php');
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
						Lorem ipsum dolor sit amet
					</p>
					<p class="small-slogan">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					</p>
				</div>
			</div>
			<div class="row how-to">
				<div class="how-to-box">
					<div class="image">
					</div>
					<a href="signupform.php">
						Signup
					</a>
				</div>
				<div class="how-to-box">
					<div class="image">
					</div>
					Signup
				</div>
				<div class="how-to-box">
					<div class="image">
					</div>
					Signup
				</div>
				<div class="how-to-box">
					<div class="image">
					</div>
					Signup
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
