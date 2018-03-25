<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Level & Student Add</h3>
            </div>
            <?php echo form_open('levelstudent/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="level_id" class="control-label"><span class="text-danger">*</span>Level Id</label>
						<div class="form-group">
							<!-- <input type="text" name="level_id" value="<?php echo $this->input->post('level_id'); ?>" class="form-control" id="level_id" /> -->
							<select class="form-control" id="level_id" name="level_id" required>
							<?php
								foreach ($level as $row) {
								?>
								<option value="<?php echo $row['level_id']?>;">
									<?php echo $row['level_name'];?>
								</option>
								<?php
								}
							?>
							
							</select>
							<span class="text-danger"><?php echo form_error('level_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="student_id" class="control-label"><span class="text-danger">*</span>Student Id</label>
						<div class="form-group">
							<!-- <input type="text" name="student_id" value="<?php echo $this->input->post('student_id'); ?>" class="form-control" id="student_id" /> -->
							<select class="form-control" id="student_id" name="student_id" required>
							<?php
								foreach ($student as $row) {
								?>
								<option value="<?php echo $row['student_id']?>;">
									<?php echo $row['full_name'];?>
								</option>
								<?php
								}
							?>
							
							</select>
							<span class="text-danger"><?php echo form_error('student_id');?></span>
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