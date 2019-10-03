<div class="col-md-12 col-sm-12">
	<div class="white-box">
		<h3 class="box-title m-b-0">Create Sport type</h3>

		<div class="panel-wrapper collapse in" aria-expanded="true">
			<div class="panel-body">

				<form action="<?= base_url('admin/sport-types/store') ?>" method="post" enctype="multipart/form-data">
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
									<input type="text" id="firstName" class="form-control" name="name_en" value="<?= $this->input->post("name_en"); ?>">
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
									<input type="text" id="lastName" class="form-control" name="name_ar" value="<?= $this->input->post("name_ar"); ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Description EN</label>
									<?php if (!empty(form_error('desc_en'))) { ?>
										<div class="help-block with-errors text-danger">
											<?= form_error('desc_en'); ?>
										</div>
									<?php } ?>

									<textarea name="desc_en" id="" cols="60" rows="10" class="form-control" style="resize: none;"><?= $this->input->post('desc_en'); ?>
									</textarea>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Description AR</label>
									<?php if (!empty(form_error('desc_ar'))) { ?>
										<div class="help-block with-errors text-danger">
											<?= form_error('desc_ar'); ?>
										</div>
									<?php } ?>
									<textarea name="desc_ar" id="" cols="60" rows="10" class="form-control" style="resize: none;"><?= $this->input->post('desc_ar'); ?>
									</textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 ">
								<div class="form-group">
									<label class="control-label">Image</label>
									<?php if (!empty($this->session->flashdata('error'))) { ?>
										<div class="help-block with-errors text-danger">
											<?= $this->session->flashdata('error') ?>
										</div>
									<?php } ?>
									<input type="file" class="form-control" name="image">
								</div>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Save</button>
						</div>

					</div>
				</form>

			</div>
		</div>
	</div>
</div>
