<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="systle.css">
</head>
<body>
<?php
include("header.php");
include("left.php");
?>

<form action="" method="post" accept-charset="utf-8">
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

	
</form>
<?php 
$host = 'localhost';  
  
$user = 'root';  
$pass = '';  
$dbname = 'dormi';  
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$dep=$_POST['department'];
$year=$_POST['year'];
$id=$_POST['id'];
$sex=$_POST['Sex'];
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "INSERT INTO users VALUES('$fn','$ln','$dep','$year','$id','$sex')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  

 ?>
 <?php 
include("footer.php");

 ?>
</body>
</html>