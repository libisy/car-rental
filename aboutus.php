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
						"About us"
					</p>
					<p class="small-slogan">
						"Whether your auto rental is for business or pleasure, always remember that having the right car for the same makes a lot of difference. Rent-A-Car have emerged keeping in the mind about the same. Rent-A-Car, Nepal is one of the largest rental car arranger in Nepal having own fleet of vehicles of all types with the wide network throughout the kingdom of Nepal. We are the only one arranger in the town with great selection of vehicles of different types available in the local market. Our car rental classes range from economy to luxury car rental or from cargo van to pickup truck rental.
			Rent-A-Car, Nepal is staffed by the professional, enthusiastic group committed to a philosophy of providing any sorts of four-wheel drive product with the highest possible levels of customer satisfaction. All our staffs are professionally trained and can communicate fluently in English, Hindi & Nepali and so do some of the drivers too.
			We also enjoy strategic partnerships with major transport operators in Kathmandu & other locations as well. With our arrangements, no one has to be embarrassed or run here and there. Our vast experience in the related field for more than a decade have made us strong to face any sort of challenges or the problems that may come while in the operation of the cars. We have track records of thousands of happy customers wishing our progress & prosperity with our excellent service.";
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
