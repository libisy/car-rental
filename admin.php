<!doctype html>
<html>
<head>
	<?php
		include('components/header.php');
		$active_page="about";
	?>
</head>

<body>
	<!-- header section  -->
	<div class="container">
		<?php
			include("components/navigation-bar.php");
		?>

		<?php if (false) { ?> true <?php } ?>
		<div class="content">
			<!-- content goes here -->
			<div class="promo pull-left">
					<h3>Promotional stuffs</h3>
			</div>
			<div class="form-content pull-right">
				<h3 class="text-center row">Admin Login</h3>
				<div class="row text-center">
					<hr class="col-3">
				</div>
				<div class="form-body text-center">
					<form class="admin-log" action="adminlog.php" method="post">

						<label for="username">
							Username
						</label><input type="text" name="username" id="username" class="input-small">
						<label for="password">
							Password
						</label><input type="password" name="password" id="password" class="input-small">
						<br>
						<div class="row text-center padding-vertical-small">
						  <input type="submit" name="name" value="submit">
						</div>
					</form>
				</div>
			</div>
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
