
<?php


$con= mysqli_connect("localhost:3306","root", "");
if(!$con)
{
	die("error in database connection");
}
$db= mysqli_select_db($con, "myproject");
if(!$db)
{
	die("error in database selection");
}
?>
