<?php
include "../inc/db.php";
include '../inc/notadmin.php';

$query="SELECT id FROM user where username='".$_GET["pass"]."'";
$result=$con->query(query);
if($result->num_rows)
	echo "1";
?>