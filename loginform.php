<?php session_start();
	// include("config1.php");
	// if(isset($_POST["login"]))
	// {
	// $email = $_POST["email"];
	// $pwd = $_POST["pwd"];
	// $sql = "SELECT * FROM proj WHERE Email = '$email' AND Password = '$pwd'";
	// $result = mysql_query($sql);
	// if(mysql_num_rows($result)>0)
	// {
	// 	$_SESSION["admin"] = "admin";
	//
	// header("Location:index2.php");
	// exit;
	// echo mysql_error();
	// }
	// else
	// {
	// 	echo "invalid user name and password";
	// }
	//
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
			<div class="form-content">
				<h3 class="text-center row">Login</h3>
				<div class="row text-center">
					<hr class="col-3">
				</div>
				<div class="form-body text-center">
					<form class="sign-up" action="login.php" method="post">
						<label for="email-username">
							Email/Username
						</label><input type="text" name="email-username" id="email" class="input-small">
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
