<?php
$db=mysqli_connect("localhost:3307",'root','root','salary')
		or die("Connection failed");

		
		
	 
	$sql="INSERT INTO employee_details
		  set
		  Emp_Name='".$_POST['ename']."',
		  Email_id='".$_POST['email']."',
		  Mobile_No='".$_POST['mob']."',
		  salary='".$_POST['sal']."',
		  Emp_id='".$_POST['id']."',
		  password='".$_POST['pass']."'";
		
		  
	
	$res=mysqli_query($db,$sql);
	if($res)
	{
	function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Employee Registrered"); 
						header("location: addEmp.html");

	}
	else
	{
	header("location: addEmp.html");
	}

?>