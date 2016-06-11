<?php
session_start();
		include("config1.php");
		if(isset($_POST["Admin"]))
		{
		$fname=$_POST["fname"];
		$password = $_POST["pwd"];

		 $sql = "select *from admin where Username='$fname' and Password='$password'";

		$result =mysql_query($sql);
		echo mysql_error();
	if(mysql_num_rows($result)>0){
		$row=mysql_fetch_assoc($result);

	$_SESSION["admin"]="lbef";
		header("location:dashboard.php");
		exit;
	}
		echo " Invalid username and password";

		}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/admin1.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>

</head>

<body>
	<div class ="admin" >
	<h3><u>ADMIN LOGIN</h3></u>
    <p> Admiistrator Login Section</p>

	<form action ="" method ="post" >
	Username:<input type="text" name="fname" /><br/>

	password:&nbsp;<input type ="password" name ="pwd" /> <br/>

    <input type = "submit" name ="Admin" value = "login" />
    </form>
</div>
</body>
</html>
