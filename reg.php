<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

.header
{

height:100px;
color:red;
border: 3px solid: green;
}
.good
{
height:40px;
color:teal;
background-color:yellow;
margin:10px ,2px,10px,10px;
padding:15px, 3px 10px 3px;
border: 3px solid: green;
clear:both;

} 

</style>
</head>
<body>
<div class="dormitory">
<div class="header"> <img src="bb.png" height="95"width="1315"></div>
<?php
include("menu.php")
?>
</div>
<div class="left">
<?php

include("left.php")
?>
</div>
<div class="right">
<?php 
include("right.php");
?>
</div>
<div class="center">
	<table>
		<tr >
<td colspan="2" valign="top" height="200px">
<div id="sliderFrame">
        <div id="slider"> 		
            <img src="bb.png" alt="Building One" />
            <img src="b5.png" alt="Photo Two" />
            <img src="bb.png" alt="Photo Three" />
            <img src="b5.png" alt="Photo Four" />
            <img src="b5.png" alt="Photo Five" />
			</div>
    </div>
</td>
</tr>
	</table>
</div>

<div class="footer">
 <?php
include("footer.php");
 ?>

</div>
</body>
</html>