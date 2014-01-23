<?php
	include 'form.php';
	include 'head.php';
?>
          <h2><span>Your Account</span></h2>
          <div class="clr"></div>
          	<table cellpadding="5" cellspacing="5" style="padding-left:100px">
          		<tr>
          		<th style="background-color:#d0d0d0;border-radius:5px;width:150px"><div style="color:#000000">ID</div>
          		</th>
          		<td style="background-color:#e0e0e0;border-radius:5px;;width:200px"><div style="color:#000000"><?php echo $_SESSION["id"]; ?></div>
          		</td>
          		</tr>
          		<tr>
          		<th style="background-color:#e0e0e0;border-radius:5px;width:150px"><div style="color:#000000">Name</div>
          		</th>
          		<td style="background-color:#d0d0d0;border-radius:5px;width:200px"><div style="color:#000000"><?php echo $_SESSION["name"]; ?></div>
          		</td>
          		</tr>
          		<tr>
          		<th style="background-color:#d0d0d0;border-radius:5px;width:150px"><div style="color:#000000">Username</div>
          		</th>
          		<td style="background-color:#e0e0e0;border-radius:5px;width:200px"><div style="color:#000000"><?php echo $_SESSION["Username"]; ?></div>
          		</td>
          		</tr>
          	</table>
          <div class="clr"></div><br><br><br>
        </div>
      </div>
<?php
	include 'tail.php';
?>