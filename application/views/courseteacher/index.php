<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Course & Teacher Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('courseteacher/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!-- <th>ID</th> -->
						<th>Course Id</th>
                        <th>Course name</th>
						<th>Teacher Id</th>
                        <th>teacher name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tblcourseteacher as $t){ ?>
                    <tr>
						<!-- <td><?php echo $t['id']; ?></td> -->
						<td><?php echo $t['course_id']; ?></td>
                        <td><?php echo $t['course_name']; ?></td>
						<td><?php echo $t['teacher_id']; ?></td>
                        <td><?php echo $t['teacher_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('courseteacher/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('courseteacher/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
