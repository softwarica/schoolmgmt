<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Student Add</h3>
            </div>
            <?php echo form_open('student/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<!-- <div class="col-md-6">
						<label for="id" class="control-label"><span class="text-danger">*</span>ID</label>
						<div class="form-group">
							<input type="text" name="id" value="<?php echo $this->input->post('id'); ?>" class="form-control" id="id" />
							<span class="text-danger"><?php echo form_error('id');?></span>
						</div>
					</div> -->
					<div class="col-md-6">
						<label for="full_name" class="control-label"><span class="text-danger">*</span>Full Name</label>
						<div class="form-group">
							<input type="text" name="full_name" value="<?php echo $this->input->post('full_name'); ?>" class="form-control" id="full_name" />
							<span class="text-danger"><?php echo form_error('full_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label"><span class="text-danger">*</span>Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
							<span class="text-danger"><?php echo form_error('address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact" class="control-label"><span class="text-danger">*</span>Contact</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo $this->input->post('contact'); ?>" class="form-control" id="contact" />
							<span class="text-danger"><?php echo form_error('contact');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pword" class="control-label"><span class="text-danger">*</span>Pword</label>
						<div class="form-group">
							<input type="text" name="pword" value="<?php echo $this->input->post('pword'); ?>" class="form-control" id="pword" />
							<span class="text-danger"><?php echo form_error('pword');?></span>
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