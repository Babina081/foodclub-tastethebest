<?php
	include('conn.php');

	

	$name=$_POST['name'];
	$pname=$_POST['pname'];
	$salary=$_POST['salary'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$position=$_POST['position'];

	
	$sql="insert into staff (name,pname,salary,address,gender,	position) values ('$name','$pname', '$salary', '$address','$gender', '$positon')";
	$conn->query($sql);

	header('location:staff.php');

?>
