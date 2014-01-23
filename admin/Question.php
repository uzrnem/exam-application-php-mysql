<?php
	include 'form.php';
	include 'head.php';
?>
          <h2><span>Questions</span></h2>
          <div class="clr"></div>
			<form name="lbs_form" id="lbs_form" method="post" action="InsertQue.php">
          	<table cellpadding="5" cellspacing="5" style="padding-left:100px">
			  <tr>
			    <td>Question</td>
			    <td><textarea type="text" name="Question" id="Question"  style="margin: 0px; width: 301px; height: 72px;"></textarea></td>
			  </tr>
			  <tr>
			    <td>Opt_1</td>
			    <td><textarea type="text" name="Option1" id="Option1"  style="margin: 0px; width: 301px; height: 40px;"></textarea></td>
			  </tr>
			  <tr>
			    <td>Opt_2</td>
			    <td><textarea type="text" name="Option2" id="Option2"  style="margin: 0px; width: 301px; height: 40px;"></textarea></td>
			  </tr>
			  <tr>
			    <td>Opt_3</td>
			    <td><textarea type="text" name="Option3" id="Option3"  style="margin: 0px; width: 301px; height: 40px;"></textarea></td>
			  </tr>
			  <tr>
			    <td>Opt_4</td>
			    <td><textarea type="text" name="Option4" id="Option4"  style="margin: 0px; width: 301px; height: 40px;"></textarea></td>
			  </tr>
			  <tr>
			    <td>Right Option</td>
			    <td><select name="Answer" id="Answer">
			  			<option value="A">A</option>
			  			<option value="B">B</option>
			  			<option value="C">C</option>
			  			<option value="D">D</option>
			  		</select>
			  	</td></td>
			  </tr>
			  <tr>
			    <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
			  </tr>
			</table>
			</form>
          <div class="clr"></div>
        </div>
      </div>

<?php
	include 'tail.php';
?>