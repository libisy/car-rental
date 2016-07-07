
<?php
  session_start();
  include("config1.php");

	include('components/header.php');
  if (!isset($_SESSION['user']) or $_SESSION['type'] != 'admin') {
    header('location: myreservations.php');
  }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
<body>
	<!-- header section  -->
	<div class="container">
		<?php
			include("components/new-navigation.php");
		?>
		<div class="content">
      <div class="row text-center page-title black">
        <h2>Add Vehicle</h2>
      </div>
			<div class="row services">
				<div class="how-to-box">
					<div class="how-to-icon background-cover car-logo  pointer">
						<a class="cover" href="addCarForm.php">
						</a>
						<!-- <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i> -->
					</div>
					<div class="how-to-label">
						<a href="addCarForm.php">
							Car
						</a>
					</div>
				</div>
				<div class="how-to-box">
					<div class="how-to-icon jeep-logo background-cover pointer">
						<a class="cover" href="addJeepForm.php">
						</a>
					</div>
					<div class="how-to-label">
						<a href="addJeepForm.php">
							Jeep
						</a>
					</div>
				</div>
				<div class="how-to-box">
					<div class="how-to-icon micro-logo background-cover pointer">
						<a class="cover" href="addMicroForm.php">
						</a>
					</div>
					<div class="how-to-label">
						<a href="addMicroForm.php">
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
