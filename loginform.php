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
			} else if ($_SESSION['type'] == 'admin') {
				header('location:addVehicle.php');
			}
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
		<div class="content">
			<div class="signin-cover white">
				<div class="form-content pull-right">
					<h3 class="text-center row">Sign In</h3>
					<div class="row text-center">
						<hr class="col-3">
					</div>
					<div class="form-body text-center">
						<form class="sign-up" action="login.php" method="post">
						<!-- <form class="sign-up"> -->
						<div class="login-input row">
							<input type="text" name="username" placeholder="Username" id="username" class="input-small">
						</div>
						<div class="login-input row">
							<input type="password" name="password" id="password" placeholder="Password" class="input-small" onblur="requiredValue(this)">
						</div>
							<div class="row text-center padding-vertical-small">
								<input type="submit" class="white" name="login" value="Login" onsubmit="event.preventDefault();">
								<!-- <input  type="button" value="submit" name="name"  class="white" onclick=" validationComplete();"> -->
							</div>
						</form>
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
