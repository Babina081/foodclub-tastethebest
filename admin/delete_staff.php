<?php
include('../conn.php');

	$id = $_GET['staff'];

	$sql="delete from staff where staffid='$id'" ;
	$conn->query($sql);

	header('location:staff.php');
?>
