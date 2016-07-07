<?php session_start();
	include("config1.php");
	// if(isset($_POST["add"]))
	if (isset($_SESSION['user'])) {
		if ($_SESSION['type'] == 'user') {
			header('location:myreservations.php');
		}
	} else {
			header('location:index.php');
  }

		$number= $_POST["number"];
		$color= $_POST["color"];
    $type = $_POST["type"];


		$sql="insert into vehicle ( number, color, type_id ) values ( '$number', '$color', '$type')";

		if ($con->query($sql) === TRUE) {
			echo "Vehicle created successfully";
			// header("location:usersucess.php");
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
			// header("location:index.php");
		}

		$con->close();
		exit;

?>
