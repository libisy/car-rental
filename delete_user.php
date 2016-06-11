<?php
	include("config1.php");
	
	$id = $_GET["id"];
	$sql = "DELETE FROM user_add WHERE id=$id";
	
	mysql_query($sql);
	
	echo mysql_error();
	
	header("Location: user.php"); exit;
?>