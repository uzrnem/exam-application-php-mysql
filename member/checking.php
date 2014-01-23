<?php
	include '../inc/db.php';
	session_start();
	$here=$_SESSION["numb"];
	$query="SELECT * FROM member where id=".$here;
	$result=$con->query(query);
	$marks=0;
	if($row=$result->fetch_assoc())
	{
		$model=$row["model"];
		$ans="EEEEEEEEEEEEEEEEEEEEEEEEE";
		if(isset($_POST["ans1"])){$ans[0]=$_POST["ans1"];}
		if(isset($_POST["ans2"])){$ans[1]=$_POST["ans2"];}
		if(isset($_POST["ans3"])){$ans[2]=$_POST["ans3"];}
		if(isset($_POST["ans4"])){$ans[3]=$_POST["ans4"];}
		if(isset($_POST["ans5"])){$ans[4]=$_POST["ans5"];}
		if(isset($_POST["ans6"])){$ans[5]=$_POST["ans6"];}
		if(isset($_POST["ans7"])){$ans[6]=$_POST["ans7"];}
		if(isset($_POST["ans8"])){$ans[7]=$_POST["ans8"];}
		if(isset($_POST["ans9"])){$ans[8]=$_POST["ans9"];}
		if(isset($_POST["ans10"])){$ans[9]=$_POST["ans10"];}
		for($i=0;$i<strlen($model);$i++)
		{
			if($model[$i]==$ans[$i])
			{
				$marks+=4;
			}
			else
			if("E"==$ans[$i])
			{
			}
			else
			{
				$marks-=1;
			}

		}
	if ($con->query("UPDATE member SET ans='".$ans."',marks='".$marks."' WHERE id=".$here))
    	header("location:Available.php?marks=".$marks);
	}
?>