<?php
include 'head.php';

	$query="INSERT INTO user(username, password,name,college,numb,mobile) VALUES('".$_POST["username"]."','".$_POST["password"]."','".$_POST["name"]."','".$_POST["college"]."','".$_POST["receipt"]."','".$_POST["mobile"]."')";
	if($con->query($query))
	echo '<script type="text/javascript">alert("Student Inserted Succesfully");window.location=\'user.php\';</script>';
?>