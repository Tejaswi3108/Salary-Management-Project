<?php
global $ss;
	require 'vendor/autoload.php';  
		$m = new MongoDB\Client('mongodb://localhost:27017');
		$db=$m->Salary;
		$collection=$db->salaryTable;
		  $date=$_POST['date'];
		  $bs=$_POST['bs'];
		  $pa=$_POST['pa'];
		  $pf=$_POST['pf'];
		  $grat=$_POST['grat'];
		  $pp=$_POST['pp'];
		  $ts=$_POST['ts'];
		  $status=$_POST['status'];
		
		session_start();
		
		$u=$_SESSION['id'];
		
		$res = $collection->insertOne([
		  $date=$date,
		  bs=$bs,
		  pa=$pa,
		  pf=$pf,
		  grat=$grat,
		  pp=$pp,
		  ts=$ts,
		  status=$status,
		  empid=$u]);
		
		  
	
	
	
	if($res)
	{
					$v=$_POST['ts'];
					require 'vendor/autoload.php';  
					$m = new MongoDB\Client('mongodb://localhost:27017');
					$db=$m->Salary;
					$collection=$db->Fund;
					$cursor=$collection->find();
					foreach($cursor as $res)
					{ $ss=$res->fund;}
					$n=$ss-$v;
					
					$res1=$collection->update(array("fund"=>$n));
					
					
			function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Employee Registrered"); 
						//header("location: addEmp.html");

	}
	else
	{
	header("location: Make_Payment.html");
	}

?>