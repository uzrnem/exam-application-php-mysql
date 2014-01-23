
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("exam", $con);
	// Specify the query to Insert Record
	$sql = "insert into question (Question,op_1,op_2,op_3,op_4,r_op) 	values('".$_POST['Question']."','".$_POST['Option1']."','".$_POST['Option2']."','".$_POST['Option3']."','".$_POST['Option4']."','".$_POST['Answer']."')";
	// execute query
	$con->query ($sql);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Question Inserted Succesfully");window.location=\'Question.php\';</script>';

?>
</body>
</html>
