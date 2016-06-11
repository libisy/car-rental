<?php
	include("config1.php");
	
	if(isset($_POST["edituser"])){
		$id = $_POST["userid"];
		$firstname = $_POST["fname"];
		$lastname = $_POST["lname"];
		$gender= $_POST["gender"];
		
		$sql = "UPDATE user_add SET fname='$firstname', lname='$lastname',gender='$gender'WHERE id=$id";
		
		mysql_query($sql);
		echo mysql_error();
		
		header("Location: user.php"); exit;
	}
	
	$id = $_GET["id"];
	$sql = "SELECT * FROM user_add WHERE id=$id";
	$result = mysql_query($sql);
	
	$data = mysql_fetch_assoc($result);
?>

<h3>User Edit</h3>
<form action="" method="post">
	<input type="hidden" name="userid" value="<?php echo $id;?>" />
	Firstname:<input type="text" name="fname" value="<?php echo $data["fname"];?>" />
    <br /><br />
    
    Lastname:<input type="text" name="lname" value="<?php echo $data["lname"];?>" />
    <br /><br />
    <label>Gender</label></br>
    <input type ="radio" name="gender" value="male" />male
        <input type ="radio" name="gender" value="female" />female</br>
  
   
    <input type="submit" name="edituser" value="Update" />
</form>
