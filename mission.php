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
include("left-about.php");
include("right.php");

	 ?>
<div class="ff">
	<div>
		<div style="width:480px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action=".php" onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">mission</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="reg.php" title="Close"><img src="img/close_icon.gif"></a></div>
 <div>
 	<p> The foundation of the University was laid down in May 1997 E.C. MDU started the teaching, learning Process on January 28, 1999 E.C (2008 G.C) with enrollment of 725 students in the faculty of education with two streams, namely Businesses Education and natural science. After four consecutive year’s i.e. 2003 E.C enrollment of DBU was 5387 Students. Currently the University runs over 31 departments in first degree and 5 postgraduate studies by the total of 10,000 students. In addition to the academic service the university provides dining, health care, dormitory, community service and other services for the students and Bale Robe town communities.

</p>
 	
 </div>
 
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
	<div>
	<?php
	include("footer.php");
	?>	
</div>
	
</div>
	
</div>


</body>
</html>