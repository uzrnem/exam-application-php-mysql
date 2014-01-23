<?php
	include 'form.php';
	include 'head.php';
?>
          <h2><span>Students</span></h2>
          <div class="clr"></div>
			<form name="lbs_form" id="lbs_form" method="post" action="member_insert.php">
			<table align="center" border="0" cellspacing="5" cellpadding="0">
			  <tr>
			    <td>Member Name</td>
			    <td><input type="text" name="name" id="name" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Receipt Numb</td>
			    <td><input type="text" name="numb" id="numb" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Contact Numb</td>
			    <td><input type="text" name="mobile" id="mobile" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>College Name</td>
			    <td><input type="text" name="college" id="college" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Username</td>
			    <td><input type="text" name="username" id="username" size="30" onblur="check(this.value)" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Password</td>
			    <td><input type="text" name="password" id="password" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
			  </tr>
			</table>
			</form>
	            </div>
          <div class="clr"></div>
        </div>
      </div>

<?php
	include 'tail.php';
?>
<script language="javascript">
	function check(pass)
	{
		var xmlhttp;
		if (window.XMLHttpRequest)
			xmlhttp=new XMLHttpRequest();
		else
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

		xmlhttp.open("GET","check.php?pass="+pass,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(xmlhttp.responseText=="1")
				{
					alert("Username Already Exist");
					document.getElementById("username").value="";
				}
			}
		}
	}
</script>
