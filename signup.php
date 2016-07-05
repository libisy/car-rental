<?php session_start();
	include("config1.php");
	// if(isset($_POST["add"]))
	if(true)
	{

		$fname = $_POST["firstname"];
		$lname = $_POST["lastname"];
		$email = $_POST["email"];
		$username = $_POST["username"];
		$password= password_hash($_POST["password"], PASSWORD_DEFAULT);
		$addressline1 = $_POST["address_line_1"];
		$addressline2 = $_POST["address_line_2"];
		$phone = $_POST["phone_number"];
		$emailErr ="";

	// 	if (empty($_POST["email"])) {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  //   // check if e-mail address is well-formed
  //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //     $emailErr = "Invalid email format";
  //   }
  // }

		$sql="insert into users ( first_name, last_name, email, username, password, address_line_1, address_line_2, phone_number, type )
		values ( '$fname', '$lname', '$email', '$username', '$password', '$addressline1', '$addressline2', '$phone', 'user')";

		if ($con->query($sql) === TRUE) {
			echo "User created successfully";
			// header("location:usersucess.php");
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
			// header("location:index.php");
		}

		$con->close();
		exit;

	}
?>
