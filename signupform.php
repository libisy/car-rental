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
	<script type="text/javascript" src="public/js/formValidation.js"></script>

	<?php
		include('components/header.php');
		$active_page="about";
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
			<div class="signup-cover white">
				<div class="promotion">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit
				</div>
				<div class="form-content pull-right">
					<h3 class="text-center row">Sign Up</h3>
					<div class="row text-center">
						<hr class="col-3">
					</div>
					<div class="form-body text-center">
						<form class="sign-up" action="signup.php" method="post">
							<!-- <form class="sign-up"> -->

							<label for="firstname">
								First Name
							</label><input type="text" name="firstname" id="firstname" class="input-small" onblur="requiredValue(this)">
							<span class="error" id="error-firstname">Firstname is Empty</span>

							<label for="lastname">
								Last Name
							</label><input type="text" name="lastname" id="lastname" class="input-small" onblur="requiredValue(this)">
							<span class="error" id="error-lastname">lastname is Empty</span>

							<label for="email">
								Email
							</label><input type="text" name="email" id="email" class="input-small" onblur="requiredValue(this)" onkeyup="emailValidate(this)" onchange="emailValidate(this)">
							<span class="error" id="error-email">email is Empty</span>
							<span class="error" id="error-email-validation">invalid email</span>
							<span class="valid" id="email-validation">valid</span>

							<label for="username">
								Username
							</label><input type="text" name="username" id="username" class="input-small" onblur="requiredValue(this)">
							<span class="error" id="error-username">username is Empty</span>

							<label for="password">
								Password
							</label><input type="password" name="password" id="password" class="input-small" onblur="requiredValue(this)">
							<span class="error" id="error-password">password is Empty</span>

							<label for="address_line_1">
								Address Line 1
							</label><input type="text" name="address_line_1" id="address_line_1" class="input-small">

							<label for="address_line_2">
								Address Line 2
							</label><input type="text" name="address_line_2" id="address_line_2" class="input-small">

							<label for="phone_number">
								Phone Number
							</label><input type="text" name="phone_number" id="phone_number" class="input-small" onblur="requiredValue(this);numberValidation(this)">
							<span class="error" id="error-phone_number">phone number is Empty</span>
							<span class="valid" id="valnumber">valid</span>
							<span class="error" id="errornum-phone_number">invalid</span>

							<br>
							<div class="row text-center padding-vertical-small">
								<input type="submit" class="white" name="name" value="submit" onsubmit="event.preventDefault(); validationComplete();">
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
