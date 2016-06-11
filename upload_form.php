<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<h3>User add</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Firstname:<input type="text" name="fname" />
    <br /><br />
    
    Lastname:<input type="text" name="lname" />
    <br /><br />
    
    Profile picture: <input type="file" name="myfile" />
    <br /><br />
    
    <input type="submit" name="adduser" value="Add" />
</form>
</body>
</html>