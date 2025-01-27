<div class="col-md-12 col-sm-12">
	<div class="white-box">
		<h3 class="box-title m-b-0">Edit Students</h3>

		<div class="panel-wrapper collapse in" aria-expanded="true">
			<div class="panel-body">

				<form action="<?= base_url('admin/students/update/') . $student->id ?>" method="post"
					  enctype="multipart/form-data">
					<div class="form-body">

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Name EN</label>
									<?php if (!empty(form_error('name_en'))) { ?>
										<div class="help-block with-errors text-danger">
											<?= form_error('name_en'); ?>
										</div>
									<?php } ?>
									<input type="text" id="firstName" class="form-control" name="name_en"
										   value="<?= $student->name_en ?>">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Name AR</label>
									<?php if (!empty(form_error('name_ar'))) { ?>
										<div class="help-block with-errors text-danger">
											<?= form_error('name_ar'); ?>
										</div>
									<?php } ?>
									<input type="text" id="lastName" class="form-control" name="name_ar"
										   value="<?= $student->name_ar ?>" style="direction: rtl">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label class="control-label">School</label>
								<?php if (!empty(form_error('school'))) { ?>
									<div class="help-block with-errors text-danger">
										<?= form_error('school'); ?>
									</div>
								<?php } ?>
								<select name="school" id="school" class="form-control">
									<?php foreach ($schools as $key) { ?>
										<option value="<?= $key->id ?>" <?php
										if ($student->school_id == $key->id) { ?>
											selected
										<?php } ?>><?= $key->name_en ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label class="control-label">Gender</label>
								<?php if (!empty(form_error('gender'))) { ?>
									<div class="help-block with-errors text-danger">
										<?= form_error('gender'); ?>
									</div>
								<?php } ?>
								<select name="gender" id="gender" class="form-control">
									<option value="1" <?php
									if ($student->gender == 1) { ?>
										selected
									<?php } ?>>male
									</option>
									<option value="0" <?php
									if ($student->gender == 0) { ?>
										selected
									<?php } ?>>female
									</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Birthday</label>
								<?php if (!empty(form_error('birthday'))) { ?>
									<div class="help-block with-errors text-danger">
										<?= form_error('birthday'); ?>
									</div>
								<?php } ?>

								<?php if (!empty($this->session->flashdata('age_err'))) { ?>
									<div class="help-block with-errors text-danger">
										<?= $this->session->flashdata('age_err') ?>
									</div>
								<?php } ?>

								<input type="text" class="form-control complex-colorpicker" id="datepicker-autoclose"
									   placeholder="mm/dd/yyyy" name="birthday"
									   value="<?= $student->birthday ?>">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Sport Types</label>
								<?php if (!empty($this->session->flashdata('error_sport'))) { ?>
									<div class="help-block with-errors text-danger">
										<?= $this->session->flashdata('error_sport') ?>
									</div>
								<?php } ?>
								<select class="select2 m-b-10 select2-multiple" multiple="multiple"
										data-placeholder="Choose" style="width: 100%;" name="sport[]">
									<?php foreach ($sports as $key) { ?>
										<option
											value="<?= $key->id ?>"
											<?php foreach ($student_sport as $x) {
												if ($key->id == $x->sport_id) { ?>
													selected
												<?php }
											} ?>><?= $key->name_en ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Image</label>
								<?php if (!empty($this->session->flashdata('error'))) { ?>
									<div class="help-block with-errors text-danger">
										<?= $this->session->flashdata('error') ?>
									</div>
								<?php } ?>
								<input type="file" id="input-file-now" class="dropify" name="image" />
							</div>
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
