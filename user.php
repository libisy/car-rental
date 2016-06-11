<?php
	include("config1.php");
?>

<h3>User Handling</h3>
<form action = "user.php" method = "post" >
fname:<input type = "text" name = "fname" />
<input type = "submit" name = "search"  value ="Go "/>
</form>

<table width="100%" border="1">
	<tr>
    	<th>Id</th>
        <th>fname</th>
        <th>lname</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>

    <?php
		if(isset($_POST["search"])){
			$fname = $_POST["fname"];
			$sql = "SELECT * FROM user_add WHERE fname LIKE '%$fname%'";
		}
		else{
		$sql = "SELECT * FROM user_add";
		}
		$result = mysql_query($sql);

		while($row = mysql_fetch_assoc($result)){
	?>

        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["fname"];?></td>
            <td><?php echo $row["lname"];?></td>
            <td><?php echo $row["Email"];?></td>
            <td><?php echo $row["Gender"];?></td>
            <td>
            	<a href="edit_user.php?id=<?php echo $row["id"];?>">Edit</a> |
                <a href="delete_user.php?id=<?php echo $row["id"];?>">Delete</a>
            </td>
        </tr>

    <?php }?>

</table>
<p><a href="add_user.php">New user</a></p>
