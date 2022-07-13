
<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="addFaculty.css">
<link rel="stylesheet" type="text/css" href="loginPage.css">
<style>
	
	</style>
</head>
<body>
	
		<div class="header">
			<ul class="nav">
				<li><a href="Accountant_Page.html">Home</a></li>
				
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">Make Payment</a></li>
				
				<li><a href="fund.html">Fund</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="loginphoto.jpg" width="100%">
		<div class="login-box">
		
			<img src="avatar.png" class="avatar">
			<h1>Payment</h1><br><br>
            
		<form action="" method="post">
            
			<p>Enter Employee ID</p><br><br>
            <input type="text" name="id"  required>
			<input type="submit" name="submit" value="Proceed"> 
				
        </form>
        
    </div>
<?php
	if(isset($_POST['submit']))
	{
		session_start();
		$n=$_POST['id'];
		$_SESSION['id']=$n;
	
		$db = mysqli_connect('localhost:3307','root','root','salary')
	or die('Error connecting to MySQL server.');

		
		$ress=mysqli_query($db,"SELECT count(*) from employee_details where Emp_id='".$n."'");
		$r=mysqli_fetch_row($ress);
		if($r[0]>0)
		{
				header("location:Make_Payment.html");
					

		}
		else
		{
			function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Employee ID does not exists"); 
		}
	}
?>
</body>
</html>