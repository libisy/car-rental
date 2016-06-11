<!doctype html>
<html>
<head>
	<?php
		include('components/header.php');
		$active_page="home";
	?>
</head>

<body>
	<!-- header section  -->
	<div class="container">
		<?php
			include("components/navigation-bar.php");
		?>
		<div class="low-header"></div>
		<div class="content">
			<h3>HOME</h3>
			<div class="image"><img src ="photos/home.jpg" width="100px" height="100px" /> </div>
			<div class="image"><img src ="photos/home1.jpg" width="100px" height="100px" /> </div>
			<div class="image"><img src ="photos/home2.jpg" width="100px" height="100px" /> </div>
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
