<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.dormitory
{
margin:10px;
border: 4px solid:black;
line-height:200%;
clear:both;
}
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
.left
{
float:left;
height:500px;
width:200px;
margin:1px 1px;
padding:1px;
background-color:pink;
clear:left;
}
.center
{
float:center;
height:510px;
margin:0px 0px;
clear:center;
}
.right
{
float:right;
height:500px;
width:240px;
margin:1px 1px;
padding:1px 1px;
border: 1px solid: green;
background-color:#FF00FF;
clear:right;
}

.footer
{
padding:0px;
background-color:#00FFFF;
height:50px;
clear:auto;
}
</style>
</head>
<body>
<div class="dormitory">
<div class="header"> <img src="bb.png" height="95"width="1315"></div>
<div class="good"><a href="home.html"><button>Home</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="About us.html"><button>About us</button></a>&nbsp&nbsp
&nbsp&nbsp&nbsp<a href="contact us.html"><button>Contact us</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp
<a href="search.html"><button>Search</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="help.html"><button> Help</button></a></div>
<div class="left">

<a href="dorm.html">dormitory </a><br>
<img src="bb.png" height="200" width="200">
<a href="list.html">dormitory list</a><br>
<img src="m.jpg" height="100" width="200"><br>
<a href="info.html"> dormitory info.</a><br>
<img src="k.jpg" height="100" width="200">
</div>
<div class="right">

<form name="dorm" method="post" action="reg.php" onSubmit="reg.php";>
First name: <input type="text" name="fname"></br>
Last name: <input type="text" name="lname" ></br>
department: <select name="department">
<option>Information Technology</option>
<option>Information science</option>
<option>Information system</option>
<option>Software Engeenering</option>
<option>Agricultural</option>
<option>Biology</option>

</select><br>

year:<select name="year">
<option>1<sup>st</sup></option>
<option>2<sup>nd</sup></option>
<option>3<sup>rd</sup></option>
<option>4<sup>th</sup></option>
<option>5<sup>th</sup></option>
</select><br>
ID: <input type="numbers" name="id" /><br>
Sex:<select name="Sex">
<option>Males</option>
<option>Females</option> 
</select></br></br>
<input type="submit" value="Submit" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" value="Cancel" /></br></br></br>

<a href="www.facebook.com"><img src="1.jpg"></a>
<a href="www.Gmail.com"><img src="3.jpg"></a>
<a href="www.Twitter.com"><img src="2.jpg"></a>
<a href="www.Yahoo.com"><img src="4.jpg"></a>

</form>

</div>
<div class="center">
	<?php  

include "registration.php";
?>
	

</div>
	

<div class="footer">
 <div class="footer"><i><center>&copy;developed by mekonnen bayisa  2<sup>nd</sup>;year student 2010</center></i>
</div>
</div>
</body>
</html>