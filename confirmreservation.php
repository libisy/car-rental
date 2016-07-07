
<!doctype html>
<html>
<head>
		<?php
		session_start();
		include('config1.php');
		if (!isset($_SESSION['user'])) {
			header('location:index.php');
		}
		if ($_SESSION['type'] == 'admin') {
			header('location:addVehicle.php');
		}
		include('components/header.php');
	?>
</head>

<body>
	<!-- header section  -->
	<div class="container">
		<?php
			include("components/new-navigation.php");
		?>

		<div class="content cover center-everything black">
			<?php

			$sql = "select rate from vehicle_type where id = '1'";
			$result = $con->query($sql);
			$row = $result->fetch_assoc();

			$rate = $row['rate'];
			$username = $_SESSION['user'];
			$date = $_POST['date'];
			$duration = $_POST['duration'];
			$type = $_POST['type'];
			$confirmation = 'pending_payment';
			$cost = $rate * $duration;

			$sql = "select id, number from vehicle where type_id = '1'";
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
				$car = $result->fetch_assoc();
				$vehicle_id = $car['id'];
				$dateNew = date("U", strtotime($date));
				$sql="insert into reservation ( vehicle_id, client_id, date, duration, cost, confirmation)
				values ('$vehicle_id', '$username', '$dateNew', '$duration', '$cost', '$confirmation')";
				if ($con->query($sql) == TRUE) {
					$content = "
					<div class='row center-everything'>
							<div class='key'>
								Vehicle Number:
							</div>
							<div class='value'>
								$vehicle_id
							</div>
					</div>
					<div class='row center-everything'>
							<div class='key'>
								Date:
							</div>
							<div class='value'>
								 $date
							</div>
					</div>
					<div class='row center-everything'>
							<div class='key'>
								Duration:
							</div>
							<div class='value'>
								 $duration
							</div>
					</div>
					<div class='row center-everything'>
							<div class='key'>
								Cost:
							</div>
							<div class='value'>
								 $cost
							</div>
					</div>
					<div class='row center-everything'>
							<div class='key'>
								Status:
							</div>
							<div class='value'>
								 $confirmation
							</div>
					</div>
					";
				} else {
					echo "Error: " . $sql . "<br>" . $con->error;
				}
			} else {
				$content = "No Vehicle Available";
			}

			?>

			<div class="form-content-plain summary pull-right">
				<h3 class="text-center row">Summary</h3>
				<div class="row text-center">
					<hr class="col-3">
				</div>
				<div class="form-body summary-body black center-everything cover text-center medium-small-font">
					<?php
					echo $content;
					?>
					<div class="row text-center">
						<form class="padding-vertical-small" action="myreservations.php" method="post">
							<input type="submit" value="OK">
						</form>
					</div>
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
