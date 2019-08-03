<?php 
$con = mysql_connect('localhost', 'root', '');
if (empty($con)) {
 	echo mysql_error();
 } 
 $data = mysql_select_db("dormi");
 if (empty($data)) {
 	echo mysql_error();
 }





 ?>