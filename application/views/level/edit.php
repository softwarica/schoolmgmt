<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbllevel Edit</h3>
            </div>
			<?php echo form_open('level/edit/'.$tbllevel['level_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="level_name" class="control-label"><span class="text-danger">*</span>Level Name</label>
						<div class="form-group">
							<input type="text" name="level_name" value="<?php echo ($this->input->post('level_name') ? $this->input->post('level_name') : $tbllevel['level_name']); ?>" class="form-control" id="level_name" />
							<span class="text-danger"><?php echo form_error('level_name');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>