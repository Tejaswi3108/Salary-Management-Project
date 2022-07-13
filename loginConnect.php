
<?php
	session_start();
	$db = mysqli_connect('localhost:3307','root','root','salary')
	or die('Error connecting to MySQL server.');	
	session_start();
	$msg="Enter username";
	$u=$_POST["username"];
	$p=$_POST["password"];
	$select=$_POST["type"];
	
	$_SESSION['user']=$u;
	$_SESSION['pass']=$p;
	
	if($select=="hr")	
	{
		#checking admin login details

		$res=mysqli_query($db,"select * from hr_login where user='$u' and pass='$p' ");
		$count=mysqli_num_rows($res);
		if($count==1)
		{
		header("location:HR_page.html");
		}
 
		else
		{
			$msg="Invalid username $ password";
			header("location: loginPage.html");
		}
	}
	
	elseif ($select=="accountant") 
	{
		#checking faculty login details

		$res=mysqli_query($db,"select * from accountant where user='$u' and pass='$p' ");
		$count=mysqli_num_rows($res);
		if($count==1)
		{
		header("location: Accountant_Page.html");
		}
 
		else
		{
			function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Invalid username or password"); 
			header("location: loginPage.html");
		}
	}
	
	
	else
	{
		#checking clerk login details
		$res=mysqli_query($db,"select * from employee_details where Emp_id='$u' and password='$p' ");
		$count=mysqli_num_rows($res);
		if($count==1)
		{
		header("location: Employee.php");
		}
 
		else
		{
			
			header("location: loginPage.html");
		}
		
	}
	
?>