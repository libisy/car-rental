<?php
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	
	echo $fname . " " . $lname;
	
	move_uploaded_file($_FILES["myfile"]["tmp_name"], "asset/" . $_FILES["myfile"]["name"]);
?>