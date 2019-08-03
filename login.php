<html><<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.center{
			float: center;
			background-color: #ffdd22;


		}
	</style>
</head>
<body class="login">
	<div class="header"> <img src="bb.png" height="95"width="1315"></div>
<?php

	require 'menu.php';
	require 'left.php';
	require 'right.php';
	
		?>	
<div class="center"> 
<h3>login Form</h3>
    
    <div> 
        <form action="login.php" method="POST">
            <table>
                <tr>
                       <td> <label><b>username:</b></label></td><td><input type="text" name="username"/></td>
                </tr>
                <tr>
                        <td> <label><b>password:</b></label></td><td><input type="password" name="password"/></td>
                 </tr>
                 
                <tr><td></td><td> <input type="submit" value="login"></td></tr>
                   
         
            </table>
                   </form>
    </div>
        </div>
        <?php 
        include("connection.php");
$us=$_POST['username'];
$pa=$_POST['password'];
$sql = "SELECT * FROM login WHERE username='$us' AND password='$pa'";
	$query = mysql_query($sql);
	$row = mysql_num_rows($query);
	if ($row == 0) {
		echo "<b style='font-size:12px;'>Wrong Username/Password Combination</b>";
	}
	

		
				
	else{
		header("location:reg.php");
	}
?>
  <div>
<?php 

	require 'footer.php';
	?>
</div>      

	
</div>


</body>
</html>
