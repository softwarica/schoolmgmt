<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tblstudent Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('student/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Student Id</th>
						<!-- <th>ID</th> -->
						<th>Full Name</th>
						<th>Address</th>
						<th>Contact</th>
						<th>Email</th>
						<th>Pword</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tblstudent as $t){ ?>
                    <tr>
						<td><?php echo $t['student_id']; ?></td>
						<!-- <td><?php echo $t['id']; ?></td> -->
						<td><?php echo $t['full_name']; ?></td>
						<td><?php echo $t['address']; ?></td>
						<td><?php echo $t['contact']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['pword']; ?></td>
						<td>
                            <a href="<?php echo site_url('student/edit/'.$t['student_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('student/remove/'.$t['student_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
