
<?php

	include('conn.php');



	$id = $_GET['staff'];
 
 $name=$_POST['name'];
	$pname=$_POST['pname'];
	$salary=$_POST['salary'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$position=$_POST['position'];


$sql="	UPDATE `staff` SET `staffid`='$id',`name`='$name',`pname`='$pname',`salary`='$salary,`address`='$address',`gender`='$gender',`position`='$position' WHERE staffid='$id'";
	
	$conn->query($sql);

	header('location:order.php');
?>