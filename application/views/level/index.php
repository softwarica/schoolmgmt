<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbllevel Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('level/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Level Id</th>
						<th>Level Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbllevel as $t){ ?>
                    <tr>
						<td><?php echo $t['level_id']; ?></td>
						<td><?php echo $t['level_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('level/edit/'.$t['level_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('level/remove/'.$t['level_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
