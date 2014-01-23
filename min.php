<?php
include 'inc/db.php';

$Username=$_POST['mu'];
$Password=$_POST['mp'];
if(strlen($Username)==0){header("index.php?m=1");}
if(strlen($_POST['mp'])==0){header("index.php?m=2");}
$sql = "select * from user where username='".$Username."' and password='".$Password."'";
$result = $con->query($sql);
$records = $result->num_rows;
$row = $result->fetch_assoc();
if ($records==0)
{
	header("location:index.php?m=3");
}
else
{

	session_start();
	$_SESSION["Username"]=$Username;
	$_SESSION["name"]=$row["name"];
	$_SESSION["class"]="member";
	$_SESSION["id"]=$row["id"];
	header("location:member/index.php");
}
$con->close();

?>