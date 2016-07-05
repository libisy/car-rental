<?php session_start();
	include("config1.php");
	// if(isset($_POST["add"]))
	if(true)
	{

		$username = $_POST["username"];
		$password= password_hash($_POST["password"], PASSWORD_DEFAULT);
				$sql="insert into admin (username, password, type )
		values ('$username', '$password',  'admin')";

		if ($con->query($sql) === TRUE) {
			header("location:edit_user.php");
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
			header("location:userfail.php");
		}

		$con->close();
		exit;

	}
?>
