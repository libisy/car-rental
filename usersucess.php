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
				<h3 class="text-center row">Pick up/Drop off info</h3>
				<div class="row text-center">
					<hr class="col-3">
				</div>
				<div class="form-body text-center">
					<form class="Rental Form" action="usersucess.php" method="post">
						<label for="location">
							Location
						</label><input type="text" name="location" id="location" class="input-small">
						<label for="date">
							Date
						</label><input type="date" name="date" id="date" class="input-small">
						<label for="time">
							Time
						</label><input type="time" name="time" id="time" class="input-small">
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
