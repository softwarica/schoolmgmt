<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Level & Student Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('levelstudent/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Level Id</th>
                        <th>Level name</th>
						<th>Student Id</th>
                        <th>Student name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbllevelstudent as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['level_id']; ?></td>
                        <td><?php echo $t['level_name']; ?></td>
						<td><?php echo $t['student_id']; ?></td>
                        <td><?php echo $t['student_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('levelstudent/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('levelstudent/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
