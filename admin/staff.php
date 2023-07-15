<?php include('../header.php'); ?>
<body>
<?php include('adminnavbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">STAFF LIST</h1>
	<div class="row">
		<div class="col-md-12">
			
			<a href="#addstaff" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Staff</a>
     
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Name</th>
				<th>Phone No</th>
        <th>Salary</th>
								<th>Address</th>
								 <th>Gender</th>
				<th>Position</th>
        <th>Action</th>
			</thead>
			<tbody>

				<?php
					$sql="select * from staff order by staffid asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
          
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['pno']; ?></td>
							 <td><?php echo $row['salary'];?></td>
								<td><?php echo $row['address']; ?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['position'];?></td>
							<td>	
								<a href="#editstaff<?php echo $row['staffid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deletestaff<?php echo $row['staffid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('editdeletestaffmodal.php'); ?>	
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('modal.php'); ?>


<?php
include "adminfooter.php";
?>

</body>
</html>