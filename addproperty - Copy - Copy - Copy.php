<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
include("menu.php");
include("left.php");


?>
<div class="center">
	<form action="addproperty.php" method="post" accept-charset="utf-8">
		<table>
			
			<thead>
				<tr>
					<th>Add property information</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>property-name</td><td colspan="" rowspan="" headers=""> <input type="text" name="p-name"></td>
				</tr>
				<tr>
					<td>property-type</td><td colspan="" rowspan="" headers=""> <input type="text" name="p-type"></td>
				</tr>
				<tr>
					<td>property-size</td><td colspan="" rowspan="" headers=""> <input type="integer" name="p-size"></td>
				</tr>
				<tr>
					<td>property-price</td><td colspan="" rowspan="" headers=""> <input type="integer" name="p-price"></td>
				</tr>
				<tr>
					<td>property-id</td><td colspan="" rowspan="" headers=""> <input type="integer" name="p-id"></td>
				</tr>
				<tr>
					<td>property-location</td><td colspan="" rowspan="" headers=""> <input type="text" name="p-location"></td>
				</tr>
				<tr>
					<td colspan="2" rowspan="" headers=""> <input type="submit" name="submit"value="submit"></td>
				</tr>
			</tbody>

		</table>
	</form>
</div>
<?php
//include("connection.php");
if(isset($_POST['submit'])){
$host = 'localhost';  
  
$user = 'root';  
$pass = '';  
$dbname = 'dormi';  
 
$pn=$_POST['p-name'];
$pt=$_POST['p-type'];
$ps=$_POST['p-size'];
$pp=$_POST['p-price'];
$pi=$_POST['p-id'];
$pl=$_POST['p-location'];

  
 $con = mysqli_connect($host, $user, $pass,$dbname);
if(!$con){  
  die('Could not connect: '.mysqli_connect_error());  
}  

  
$sql = "INSERT INTO addproperty VALUES('$pn','$pt','$ps','$pp','$pi','$pl')";  
if(mysqli_query($con,$sql)){  
  
}else{  
echo "Could not insert record: ". mysqli_error($con);  
}  
  
mysqli_close($con);  
}
 ?>


</body>
</html>