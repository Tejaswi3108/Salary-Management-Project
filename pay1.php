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
				<li><a href="Employee.php">Home</a></li>
				
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">Payment Status</a></li>
			
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="g3.jpeg" width="100%">
			<div class="display">
		<table class="table" cellspacing="2" border="1" align="left" >
	<tr>
		<th colspan="9"><h2>Payment Details</h2></th>
		</tr>
	<tr>
		<th>Date of Payment</th>
		<th>Employee Id</th>
		<th>Basic Salary</th>
		<th>PA</th>
		<th>PF</th>	
		<th>Gratuity</th>	
		<th>Performance Pay</th>	
		<th>Total Salary</th>	
		<th>STATUS</th>
	</tr>
	
	
	<?php
		$u=$_POST['date'];
		$db=mysqli_connect("localhost:3307",'root','root','salary')
		or die("Connection failed");
		$sqll="select * from sal where date='".$u."' ";
	    $res=mysqli_query($db,$sqll);
	
		while($rows=mysqli_fetch_assoc($res))
		{
			
	?>
		<tr>
			<td><?php echo" {$rows['date']}";?></td>
			<td><?php echo "{$rows['empid']}";?></td>
			<td><?php echo "{$rows['bs']}";?></td>
			<td><?php echo "{$rows['pa']}";?></td>
			<td><?php echo "{$rows['pf']}";?></td>
			<td><?php echo "{$rows['grat']}";?></td>
			<td><?php echo "{$rows['pp']}";?></td>
			<td><?php echo "{$rows['ts']}";?></td>
			<td><?php echo "{$rows['status']}";?></td>
			
			
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>