<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tblcourseteacher Edit</h3>
            </div>
			<?php echo form_open('courseteacher/edit/'.$tblcourseteacher['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="course_id" class="control-label"><span class="text-danger">*</span>Course Id</label>
						<div class="form-group">
							<input type="text" name="course_id" value="<?php echo ($this->input->post('course_id') ? $this->input->post('course_id') : $tblcourseteacher['course_id']); ?>" class="form-control" id="course_id" />
							<span class="text-danger"><?php echo form_error('course_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="teacher_id" class="control-label"><span class="text-danger">*</span>Teacher Id</label>
						<div class="form-group">
							<input type="text" name="teacher_id" value="<?php echo ($this->input->post('teacher_id') ? $this->input->post('teacher_id') : $tblcourseteacher['teacher_id']); ?>" class="form-control" id="teacher_id" />
							<span class="text-danger"><?php echo form_error('teacher_id');?></span>
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