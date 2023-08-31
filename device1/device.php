<!DOCTYPE html>
<html>
<head>
<div class="head-box">
    <h2>Sync Device</h2>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="login-box">
    <h2>Sync Device</h2>
    <form method="POST">
        <div class="user-box">
        <input type="text" name="deviceid" required>
        <label>Device ID</label>
        </div>
        
        
        <a href="#">
        
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input style="color:#ffff;border:0px  solid;background-color:#141e30;"
        type="submit" name="" value="Submit">
        
        </a>
        
    </form>
    </div>

</body>
</html>


<?php
	session_start();
	
    include("db.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$devsid = $_POST['deviceid'];
		
	
		if(!empty($devsid)){
			$query = "insert into form2(deviceid) values('$devsid')";
			
			mysqli_query($con, $query);
			
			echo "<script type='text/javascript'> alert('Successfully registered')</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('Please enter valid informations')</script>";
		}
	}
?>