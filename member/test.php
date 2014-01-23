<?php
	include 'form.php';
	$query="SELECT * FROM member where user_id=".$_SESSION["id"];
	$result=$con->query($query);
	$records = $result->num_rows;
	if ($records!=0)
	{
		echo '<script type="text/javascript">alert("Exam Already Taken");window.location=\'index.php\';</script>';
	}else{
	$marks=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../inc/style.css" rel="stylesheet" type="text/css" />
<link href="../inc/stdtheme.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/arial.js"></script>
<script type="text/javascript" src="../js/cuf_run.js"></script>
<script type="text/javascript" src="../inc/jquery.min.js"></script>
<title id="countdown">60</title>
<script language="javascript">
var countDownTime=60 + 1;
function countDown(){
countDownTime--;
if (countDownTime <= 0){
    submitform();
}
document.getElementById('countdown').innerHTML = countDownTime;
counter=setTimeout("countDown()", 1000);
}
function startit(){
    countDown();
}
window.onload=startit();
function submitform()
{
	document.getElementById("myForm").submit();
}
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="logo">
      <h1><a href="index.html"><span>Quiz</span> test<small>Win Exclusive Prizes</small></a></h1>
    </div>
    <div class="menu_nav">
      <ul>
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="../faq.php">FAQ</a></li>
        <li><a href="../feedback.php">Feedback</a></li>
        <li><a href="../about.php">About Us</a></li>
      </ul>
    </div>
  </div>
  <div class="content">
    <div class="content_bg">
      <div class="mainbar">
        <div class="article">
          <h2><span>Question Table</span></h2>
          <div class="clr"></div>
				<form id="myForm" name="myForm" method="post" onsubmit="timebomb()" action="./checking.php?">
<?php
 $question = array("0. ","1. ", "2. ", "3. ","4. ", "5. ", "6. ", "7. ","8. ", "9. ", "10. ");
 $questions="";
 $model="";
 $sr=1;
 $query="SELECT * FROM question ORDER BY RAND() LIMIT 10";
 $result=$con->query($query);
 while($row=$result->fetch_assoc()){
 $question[$sr]=substr($row["Question"],0,25);
 $questions.=$row["id"].",";
 $model.=$row["r_op"];

?>
                   <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="36" colspan="2" bgcolor="#808080" id="que<?php echo $sr; ?>"><span class="style1" style="color:Black;padding-left:10px;font-size:13px"><?php echo $sr.". ".$row["Question"]; ?></span></td>
                    </tr>
                    <tr>
                      <td  colspan="2">
                      	<table width="100%" height="64" border="2" cellpadding="0" cellspacing="0" bordercolor="#757575">
                       		<tr>
                             <td height="32" width="50%"><p style="color:#000000"><input type="radio" name="ans<?php echo $sr; ?>" value="A" id="OptionA" />
                              <?php echo $row["op_1"]; ?></p></td>
                             <td width="50%"><p style="color:#000000"><input type="radio" name="ans<?php echo $sr; ?>" value="C" id="OptionC" />
                               <?php echo $row["op_3"]; ?></p></td>
                            </tr>
                            <tr>
                             <td height="32" width="50%"><p style="color:#000000"><input type="radio" name="ans<?php echo $sr; ?>" value="B" id="OptionB" />
                               <?php echo $row["op_2"]; ?></p></td>
                             <td width="50%"><p style="color:#000000"><input type="radio" name="ans<?php echo $sr; ?>" value="D" id="OptionD" />
                              <?php echo $row["op_4"]; ?></p></td>
                           </tr>
                    	 </table>
                      </td>
                    </tr>
                  </table>
<?php $sr=$sr+1; }

if($con->query("INSERT INTO member(user_id, subject_id, questions, model) VALUES('".$_SESSION["id"]."', '".$_SESSION["id"]."', '".$questions."', '".$model."')"))
{

	$_SESSION["numb"]=$con->insert_id()();
}
?>

				<p align="center"><input type="submit" name="button" id="button" value="Submit" /></p>
			  </form>
          	<div class="clr"></div>
        </div>
      </div>
      <div class="sidebar" style="position: fixed;">
        <div class="gadget">
          <h2><span>Question</span> Bar</h2>
          <div class="clr"></div>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que1"><?php echo $question[1]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que2"><?php echo $question[2]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que3"><?php echo $question[3]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que4"><?php echo $question[4]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que5"><?php echo $question[5]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que6"><?php echo $question[6]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que7"><?php echo $question[7]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que8"><?php echo $question[8]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que9"><?php echo $question[9]; ?></A>
          	<A class="tryitbtn" style="width:185px;padding-top:2px;padding-bottom:2px" href="#que10"><?php echo $question[10]; ?></A>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>

<?php }
	include 'tail.php';
?>