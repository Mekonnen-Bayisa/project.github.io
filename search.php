<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="containersearch">
<div class="navigation">
<a class="active buttonnav" href="rule/ambourule.pdf" target="_new"><b>AMBO UNIVERSITY RULE &amp; REGULATION</b></a>|| 
&nbsp;&nbsp;<font color="white"><b>YOU ARE HERE:</b></font><a class="active buttonnav" href=""><b>Home</b></a>
    <div class="searchindex1">
	<form action="search.php" class="navbar-search form-inline" method="POST">
	<input name="searchword" id="mod-search-searchword" maxlength="20" alt="Go" class="inputbox" type="text" size="40" placeholder="search Keyword...(like clearance,student,and so on.. )"  onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" />
	<button type="submit" name="sa" value=""><i class="glyphicon glyphicon-search"></i>&nbsp;Search</button>
    </form>
	</div>
	</div>
<div class="container">
<br />
<?php
$host = 'localhost';  
  
$user = 'root';  
$pass = '';  
$dbname = 'dormi';
$search=$_POST['searchword'];
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  

$search=$_POST['searchword'];
$findfile=mysql_query("SELECT * FROM users WHERE id LIKE'%$search%'");
$see=mysql_num_rows($findfile);
if($see)
{
while($row=mysql_fetch_assoc($findfile))
{
$name=$row['Keyword'];
$id=$row['KID'];
echo "$name<br />";
}
}
else
{
echo "data is not found that matches with your search keywords";
}
?> 
    </div>	
</div>
</body>
</html>