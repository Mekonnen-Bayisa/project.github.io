<?php 
function login()
{
	require_once 'connection.php';
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$pass = sha1($password);
	$sql = "SELECT * FROM `login` WHERE `username`='$username' AND `password`='$pass'";
	$query = mysql_query($sql);
	$row = mysql_num_rows($query);
	if ($row == 0) {
		echo "<b style='font-size:12px;'>Wrong Username/Password Combination</b>";
	}
	elseif ($row == 1) {
		$fetch = mysql_fetch_array($query);
		$type = $fetch['type'];
		$name = $fetch['username'];
		echo "string";
	}
	else{
		echo "<b>Error</b>";
	}
}

function logout()
{
	@session_start();
	session_destroy();
	header("Location: ./index.php");
}


function admindetails()
{
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['admin'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysql_query($sql);
	while ($row =mysql_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function helperdetails()
{
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['helper'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysql_query($sql);
	while ($row =mysql_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}


function doctordetails()
{
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['doctor'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysql_query($sql);
	while ($row =mysql_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function receptiondetails()
{
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['reception'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysql_query($sql);
	while ($row =mysql_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

function laboratorydetails()
{
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['laboratory'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysql_query($sql);
	while ($row =mysql_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}
function raydetails()
{
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['ray'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysql_query($sql);
	while ($row =mysql_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}
function pharmacydetails()
{
	@session_start();
	$type = $_SESSION['type'];
	$username = $_SESSION['pharmacy'];
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
	$query = mysql_query($sql);
	while ($row =mysql_fetch_array($query)) {
		echo "Welcome, <i>".$row['fname']." ".$row['sname']."</i> (<a href='../logout.php'>Logout</a>)";
	}
}

?>
