
      <div class="sidebar">
        <div class="gadget">
          <h2><span>Student</span> Login</h2>
          <div class="clr"></div>
				<form method="post" action="min.php" onsubmit="return member()">
					<label>Username : </label>
					<input type="text" name="mu" id="mu"/><font color="red" size="5px"><sup>*</sup></font><br />
					<label>Password : </label>
					<input type="password" name="mp" id="mp"/><font color="red" size="5px"><sup>*</sup></font><br/>
					<?php
						if(isset($_GET["m"]))
							{ ?>
					<font color="red">
					<?php if($_GET["m"]==1)
							{ echo "Enter Username";}
						elseif($_GET["m"]==2)
							{ echo "Enter Password";}
							else
							{ echo "Wronge Username or Password";}
					?></font><br/>
							<?php	}	?>
					<label>Forgot Password </label> - <input type="submit" value=" Login "/>
				</form>
        </div>
        <div class="gadget">
          <h2><span>Admin</span>Login</h2>
          <div class="clr"></div>
				<form method="post" action="ain.php" onsubmit="return admin()">
					<label>Username :</label>
					<input type="text" name="au" id="au"/><font color="red" size="5px"><sup>*</sup></font><br />
					<label>Password : </label>
					<input type="password" name="ap" id="ap"/><font color="red" size="5px"><sup>*</sup></font><br/>
					<?php
						if(isset($_GET["a"]))
							{ ?>
					<font color="red">
					<?php if($_GET["a"]==1)
							{ echo "Enter Username";}
						elseif($_GET["a"]==2)
							{ echo "Enter Password";}
							else
							{ echo "Wronge Username or Password";}
					?></font><br/>
							<?php	}	?>
					<label>Forgot Password </label> - <input type="submit" value=" Login "/>
				</form>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="col c1">
      <h2><span>Image Gallery</span></h2>
      <a href="#"><img src="images/pic_1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_6.jpg" width="58" height="58" alt="" /></a> </div>
    <div class="col c2">
      <h2><span>Contact</span> Gisue</h2>
      <p>Gisue Inc...<br />
       GisueInc@gmail.com<br />
       GisueInc@gmail.com<br />
       GisueInc@gmail.com<br />
       GisueInc@gmail.com<br />
       GisueInc@gmail.com<br />
       GisueInc@gmail.com<br />
       GisueInc@gmail.com</p>
    </div>
    <div class="col c3">
      <h2><span>About</span> Gisue</h2>
      <p>Gisue is Software Development Company<br />
      Gisue is Software Development Company<br />
      Gisue is Software Development Company<br />
      Gisue is Software Development Company<br />
      Gisue is Software Development Company<br />
      Gisue is Software Development Company<br />
      Gisue is Software Development Company<br />
      Gisue is Software Development Company</p>
    </div>
    <div class="clr"></div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">Gisue Inc</a>.</p>
      <p class="rf">Project By <a href="#">Bhagyesh Sunil Patel</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div align=center>All Copyright are Reserved &copy; <a href='#'>Gisue.in</a></div></body>
</html>
<script language="javascript">

function admin()
{
	if(document.getElementById("au").value=="")
	{
		alert("Please Enter Username");
		document.getElementById("au").focus();
		return false;
	}
	else if(document.getElementById("ap").value=="")
	{
		alert("Please Enter Password");
		document.getElementById("ap").focus();
		return false;
	}
}
function member()
{
	if(document.getElementById("mu").value=="")
	{
		alert("Please Select Username");
		document.getElementById("mu").focus();
		return false;
	}
	else if(document.getElementById("mp").value=="")
	{
		alert("Please Select Password");
		document.getElementById("mp").focus();
		return false;
	}
}
</script>