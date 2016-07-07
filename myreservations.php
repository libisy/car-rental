
<!doctype html>
<html>
<head>
	<?php
		include('components/header.php');
	  include("config1.php");
    session_start();
		if (!isset($_SESSION['user'])) {
	  	header("location:index.php");
		}
		$username = $_SESSION['user'];
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
			<div class="row text-center page-title black">
				<h2>Reservations</h2>
			</div>
			<?php
			$sql = "select * from reservation where client_id = '$username'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				echo "
				<div class='cover center-everything padding-vertical-medium black medium-small-font'>
					<table class='reservations'>
						<thead>
							<th style='width: 15%'>
								Reservation Id
							</th>
							<th style='width: 15%'>
								Vehicle Id
							</th>
							<th style='width: 20%'>
								Date
							</th>
							<th style='width: 15%'>
								Duration
							</th>
							<th style='width: 15%'>
								Cost
							</th>
							<th style='width: 20%'>
								Status
							</th>
						</thead>
				";
				while ($row = $result->fetch_assoc() ){
					$date = date('c', $row['date']);
					$date = date('Y-m-d', strtotime($date));
					echo "<tbody><tr>";
					echo "<td>";
					echo $row['id'];
					echo "</td>";
					echo "<td>";
					echo $row['vehicle_id'];
					echo "</td>";
					echo "<td>";
					echo $date;
					echo "</td>";
					echo "<td>";
					echo $row['duration'];
					echo "</td>";
					echo "<td>";
					echo $row['cost'];
					echo "</td>";
					echo "<td>";
					echo $row['confirmation'];
					echo "</td></tr></tbody>";
				}
				echo "
				</table>
				</div>";
			} else {
				echo " <div class='center-everything row black medium-font block'> No Active Reservations</div>";
			}
			?>



			<div class="center-everything row">
				<input type="button" onclick="location.href='services.php';" value="Add Reservation" />
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
