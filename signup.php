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

		$sql="insert into users ( first_name, last_name, email, username, password, address_line_1, address_line_2, phone_number, type )
		values ( '$fname', '$lname', '$email', '$username', '$password', '$addressline1', '$addressline2', '$phone', 'user')";

		if ($con->query($sql) === TRUE) {
			echo "User created successfully";
			header("location:usersuccess.php");
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
			header("location:userfail.php");
		}

		$con->close();
		exit;

	}
?>
