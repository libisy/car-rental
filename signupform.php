<?php
// session_start();
// include("config1.php");
// if(isset($_POST["signup"]))
// {
// 	$fname=$_POST["fname"];
// 	$lname=$_POST["lname"];
// 	$email=$_POST["email"];
// 	$pwd = $_POST["pwd"];
// 	$repwd=$_POST["repwd"];
// 	$gender=$_POST["gender"];
// 	$sql="insert into proj(Firstname,Lastname,Email,Password,Repassword,Gender) values('$fname','$lname','$email','$pwd','$repwd','$gender')";
//
// 		$result =mysql_query($sql);
// 		echo mysql_error();
//
// 		$_SESSION["admin"]="lbef";
//
// 	header("location:login.php");
// 		exit;
// }
?>

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
				<h3 class="text-center row">Sign Up</h3>
				<div class="row text-center">
					<hr class="col-3">
				</div>
				<div class="form-body text-center">
					<form class="sign-up" action="signup.php" method="post">
						<label for="firstname">
							First Name
						</label><input type="text" name="firstname" id="firstname" class="input-small">
						<label for="lastname">
							Last Name
						</label><input type="text" name="lastname" id="lastname" class="input-small">
						<label for="email">
							Email
						</label><input type="text" name="email" id="email" class="input-small">
						<label for="username">
							Username
						</label><input type="text" name="username" id="username" class="input-small">
						<label for="password">
							Password
						</label><input type="password" name="password" id="password" class="input-small">
						<label for="address_line_1">
							Address Line 1
						</label><input type="text" name="address_line_1" id="address_line_1" class="input-small">
						<label for="address_line_2">
							Address Line 2
						</label><input type="text" name="address_line_2" id="address_line_2" class="input-small">
						<label for="phone_number">
							Phone Number
						</label><input type="text" name="phone_number" id="phone_number" class="input-small">
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
