<?php
	include('../conn.php');

	$staffname=$_POST['staffname'];
	$staffpno=$_POST['staffpno'];
	$staffsalary=$_POST['staffsalary'];
	$staffaddress=$_POST['staffaddress'];
	$staffgender=$_POST['staffgender'];
	$staffposition=$_POST['staffposition'];

	
	$sql="insert into staff (name,pno,salary,address,gender,	position) values ('$staffname','$staffpno', '$staffsalary', '$staffaddress','$staffgender', '$staffpositon')";
	$conn->query($sql);

	header('location:staff.php');

?>
