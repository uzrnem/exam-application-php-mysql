<?php
include 'inc/db.php';

$Username=$_POST['au'];
$Password=$_POST['ap'];
if(strlen($Username)==0){header("index.php?a=1");}
if(strlen($_POST['ap'])==0){header("index.php?a=2");}
$sql = "select * from admin where username='".$Username."' and password='".$Password."'";
$result = $con->query($sql);
$records = $result->num_rows;
$row = $result->fetch_assoc();
if ($records==0)
{
	header("location:index.php?a=3");
}
else
{

	session_start();
	$_SESSION["Username"]=$Username;
	$_SESSION["name"]=$row["name"];
	$_SESSION["class"]="admin";
	$_SESSION["id"]=$row["id"];
	header("location:admin/index.php");
}
$con->close();

?>