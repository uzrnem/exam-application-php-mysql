<?php
	include 'form.php';
	include 'head.php';
?>
          <h2><span>Results</span></h2>
          <div class="clr"></div>
          	<table cellpadding="5" cellspacing="5" style="padding-left:100px">
          		<tr>
          		<th style="background-color:#d0d0d0;border-radius:5px;width:150px"><div style="color:#000000">Student</div>
          		</th>
          		<th style="background-color:#d0d0d0;border-radius:5px;width:150px"><div style="color:#000000">Marks</div>
          		</th>
          		</tr>
<?php
		$query="SELECT * FROM member ORDER BY id ASC";
		$result=$con->query(query);
		while($row=$result->fetch_assoc())
		{
			$stu=$row["user_id"];
			$mrk=$row["marks"];?>
          		<tr>
          		<td style="background-color:#d0d0d0;border-radius:5px;width:200px"><div style="color:#000000">
          		<?php	$sql="SELECT name FROM user where id=".$stu;
						$mysql=$con->query($sql);
						if($db=$mysql->fetch_assoc()){echo $db["name"];} else{echo "Loading...";}?>
          		</div>
          		</td>
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