<?php session_start();
	if(!isset($_SESSION["admin"]))
	{
		header("Location:login.php");
		exit;
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/dash.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="body">
<u><h1 style="text-align:center;">This is Admin page.</h1></u>
<div class="header">
	<div class = "logout"> 
	<h3><a href="logout.php">Logout</a></h3>
    </div></br></br>
<div class ="meanu">
<h3>contents</h3>
<ul>
	<li><a href="user.php">User Handeling</a></li>
    <li><a href="page.php">Page management	</a></li>
    <li><a href="gallery.php">Gallary</a></li>
    <li><a href="useri_ifom.php">user information</a></li>
</ul>
</div></div>
</div>

</body>
</html>