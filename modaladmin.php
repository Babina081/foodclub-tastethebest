<!-- Add Product -->

<div class="modal fade" id="addstaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Staff</h4></center>
            </div>

            <div class="modal-body">
            
                <div class="container-fluid">
            
                    <form method="POST" action="addstaff.php" enctype="multipart/form-data">
            
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="addstaff.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Phone No:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="pname" required>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="addstaff.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Salary:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="salary" required>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="addstaff.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Address:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="addstaff.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Gender:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="gender" required>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="addstaff.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Position:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="position" required>
                            </div>
                        </div>
                    </div>

                    
                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


