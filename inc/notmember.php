<?php
	session_start();
	if(!isset($_SESSION["Username"]))
		{header("location:../index.php");}
	if($_SESSION["class"]!="member")
		{header("location:../index.php");}
?>