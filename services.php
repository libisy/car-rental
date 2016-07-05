<!doctype html>
<html>
<head>
	<?php
	include('components/header.php');
	$active_page="services";
	?>
</head>

<body>
	<!-- header section  -->
	<div class="container">
		<?php
		include("components/navigation-bar.php")
		?>
		<div class="low-header"></div>
		<div class="promo pull-left">
			<h3>Promotional stuffs</h3>
		</div>


		<div class="content">
			<table class="rate">
				<thead>
					<tr>
						<th>Vehicle Type</th>
						<th>Capacity</th>
						<th>Rate(rs)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Car</td>
						<td>3 pax</td>
						<td>5000/day</td>
					</tr>
					<tr>
						<td>Jeep</td>
						<td>5 pax</td>
						<td>10000/day</td>
					</tr>
					<tr>
						<td>Microbus</td>
						<td>14 pax</td>
						<td>15000/day</td>
					</tr>
				</tbody>
			</table>
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
