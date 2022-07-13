<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="ord.css">
<style>
	body{
		background-color: ;

	}
</style>
</head>
<body>

		<div class="header">
			<ul class="nav">
				<li><a href="HR_Page.html">Home</a></li>
				<li><a href="addEmp.html" >Add Faculty</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">View Employee</a></li>
				<li><a href="deleteEmployee.php">Remove Employee</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="g1.png" width="100%">
			<div class="display">
		<table class="table" cellspacing="2" border="1" align="center" >
	<tr>
		<th colspan="7"><h2>Employee Details</h2></th>
		</tr>
	<tr>
		<th>Employee Name</th>
		<th>Email Id</th>
		<th>Mobile No</th>
		<th>Employee Id</th>
		<th>Password</th>	
<th>Total Salary</th>		
	</tr>
	
	
	<?php
		$db=mysqli_connect("localhost:3307",'root','root','salary')
		or die("Connection failed");
		$sqll="select * from employee_details";
	    $res=mysqli_query($db,$sqll);
	
		while($rows=mysqli_fetch_assoc($res))
		{
			
	?>
		<tr>
			<td><?php echo" {$rows['Emp_Name']}";?></td>
			<td><?php echo "{$rows['Email_id']}";?></td>
			<td><?php echo "{$rows['Mobile_No']}";?></td>
			<td><?php echo "{$rows['Emp_id']}";?></td>
			<td><?php echo "{$rows['password']}";?></td>
			<td><?php echo "{$rows['salary']}";?></td>
			
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>