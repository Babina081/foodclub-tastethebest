<?php
	include('conn.php');
$sql="select * from staff";
	$data=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($data))
	{
		$staffid=$rows['staffid'];
	}

	$delete="delete from staff where staffid='$staffid'" ;
	$conn->query($sql);

	header('location:staff.php');
?>