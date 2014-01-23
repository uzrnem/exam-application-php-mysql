<?php
	include 'form.php';
?>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <div class="hbg"><img src="../images/header_images.jpg" width="653" height="271" alt="" />
      <div class="text">
        <h3>Quiz Competition</h3>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="content_bg">
      <div class="mainbar">
        <div class="article">
          <h2><span>Results</span></h2>
          <div class="clr"></div>
          	<table cellpadding="5" cellspacing="5" style="padding-left:100px">
          		<tr>
          		<th style="background-color:#d0d0d0;border-radius:5px;width:150px"><div style="color:#000000">Marks</div>
          		</th>
<?php
		$query="SELECT * FROM member where user_id=".$_SESSION["id"];
		$result=$con->query($query);
		$records = $result->num_rows;
		if ($records==0)
		{
			echo '<script type="text/javascript">alert("Start Exam First");window.location=\'index.php\';</script>';
		}
		while($row=$result->fetch_assoc())
		{
			$mrk=$row["marks"];?>
          		<td style="background-color:#e0e0e0;border-radius:5px;width:200px"><div style="color:#000000"><?php echo $mrk; ?></div>
          		</td>
          		</tr>
<?php } ?>
          	</table>
          <div class="clr"></div><br><br><br>
        </div>
      </div>

<?php
	include 'tail.php';
?>