<?php global $ss;?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="addEmp.css">

<link rel="stylesheet" type="text/css" href="addFaculty.css">
<link rel="stylesheet" type="text/css" href="loginPage.css">


</head>
<body>
	
		<div class="header">
			<ul class="nav">
				<li><a href="Accountant_Page
				.html">Home</a></li>
				<li><a href="Make.php" style=>Make Payment</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">Fund</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="loginphoto.jpg" width="100%">
		<div class="login-box">
		
			<img src="fund.jpg" class="avatar">
			<h1>Fund</h1><br><br>
            
		
            
			<p align="center">Available Total Fund</p><br>
			<?php

					$db=mysqli_connect("localhost:3307",'root','root','salary')
					or die("Connection failed");
					$sqll="select fund from fund";
					$res=mysqli_query($db,$sqll);
					
					while($row=mysqli_fetch_array($res))
					{
						?>
						<input type="text" name="id" value="<?php echo $row['fund'];?>"disabled >
						<?php
						$ss=$row['fund'];
					}
					
			?>
			
			<form action=" " method="post">
			<p align="center">ADD Fund</p><br>
            <input type="text" name="fund" >
			<input type="submit" name="submit" value="ADD"> 
			</form>
			<?php
				if(isset($_POST['submit']))
	{			$u=$_POST['fund'];
				$s=$u+$ss;
				$db=mysqli_connect("localhost:3307",'root','root','salary')
				or die("Connection failed");
				
				$sql="update fund
					set
					fund='".$s."' where fund='".$ss."'";
					$res=mysqli_query($db,$sql);
					if($res)
					{
					function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Fund Added"); 
						header("location: fund.php");
					}
				
	}
		?>
				
			
        
        
</div>
</body>
</html>
			