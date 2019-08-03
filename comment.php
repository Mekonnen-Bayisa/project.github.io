<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.ff{
			float: center;
			height: 526px;
			width: 857px;
			background-color:#7733ff;
			margin-left: 200px;
		}

	</style>
</head>
<body>
	<div class="comment">
	<div class="header"> <img src="bb.png" height="95"width="1315"></div>
	<?php
include("menu.php");
include("left.php");
include("right.php");

	 ?>
<div class="ff">
	<div>
		<div style="width:480px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="comment.php" onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Submit Comment</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="reg.php" title="Close"><img src="img/close_icon.gif"></a></div>
 <table width="480px" valign="top" align="center" border="0">
  
  <tr>
	       <td class='para1_text' width="160px"><font color="red">*</font> Your Full Name:</td>
		   <td><input type="text" name="fname" id="fname" required x-moz-errormessage="Enter Your Full Name" ></td>
	      </tr>
		 <tr>
	       <td class='para1_text'><font color="red">*</font> Email Address:</td>
		   <td><input type="text" name="email" id="email" required x-moz-errormessage="Enter password"></td>
	     </tr>
  <tr>
	       <td class='para1_text'><font color="red">*</font> Message:</td>
		   <td><textarea rows="6" cols="30" align="center" name="com" id="message" placeholder='Write your comment here' required x-moz-errormessage="Enter Message"></textarea></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" class="button_example" name="sent" value="Send"/></td>
  </tr>
</table> 
 <?php
 include("connection.php");
 if(isset($_POST['sent']))
 {
$sql="INSERT INTO comment (fullname,email, message)
VALUES
('$_POST[fname]','$_POST[email]','$_POST[com]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
		 echo'  <p class="success">Your Message has been Sent successfuly!</p>';
         echo' <meta content="5;comment.php" http-equiv="refresh" />'; 
		 }
mysql_close($con)
?>
 </div>
 </div>



<div>
	</div>
	<?php
	include("footer.php");
	?>	
</div>
	
	


</body>
</html>