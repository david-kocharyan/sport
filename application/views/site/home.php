<section class="main-baner generic-banner">
	<figure>
		<img class="hidden-xs" src="<?= base_url('plugins/images/banner/' . $banner->banner ?? '') ?>"
			 alt="activity-baner">
		<figcaption <?php if ($lang == "ar") echo "style='display: flex; justify-content: flex-end;'"; ?> >
			<p <?php if ($lang == "ar") echo "style='text-align: right;'"; ?> >

				<?= $banner->{"text_" . $lang} ?? ""; ?>
			</p>
		</figcaption>

	</figure>

</section>
<p  class="mobile-txt" <?php if ($lang == "ar") echo "style='text-align: right;'"; ?> >

	<?= $banner->{"text_" . $lang} ?? ""; ?>
</p>
<div id="news" style="height: 40px;"></div>
<div class="heading"><h2>Blogs</h2></div>
<div class="container main-content">
	<div class="row">
		<?php foreach ($blogs as $key => $value) { ?>


			<?php if ($key == 0 OR $key % 7 == 0) { ?>
				<section class="main-baner col-md-12 col-lg-12">
					<figure>
						<a href="<?= base_url("$lang/topic/") . $value->blog_id ?>">
							<img class="hidden-xs"
								 src="<?= base_url('plugins/images/blog/landscape/') . $value->landscape ?>"
								 alt="blog_image">
							<figcaption>
								<p>
									 <?php if ($lang == 'ar') { ?>
										<?= $value->title_ar ?>
									<?php } else { ?>
										<?= $value->title_en ?>
									<?php } ?>
								</p>
							</figcaption>
						</a>
					</figure>
				</section>
			<?php } else { ?>

				<div class="col-md-4 col-lg-4 right-baner">
					<a href="<?= base_url("$lang/topic/") . $value->blog_id ?>">
						<img src="<?= base_url('plugins/images/blog/') . $value->image ?>" alt="blog_image">
						<figcaption>
							<p>
								 <?php if ($lang == 'ar') { ?>
									<?= $value->title_ar ?>
								<?php } else { ?>
									<?= $value->title_en ?>
								<?php } ?>
							</p>
						</figcaption>
					</a>
				</div>
			<?php } ?>

		<?php } ?>
		<div class="view-more-btn"><a href="<?= base_url("$lang/all-news?page=1") ?>">View More</a></div>
	</div>
	<br>
	<br>
</div>
<div id="games" style="height: 40px;"></div>
<div class="heading"><h2>Upcoming Games</h2></div>
<div class="container">
	<div class="row">
		<?php foreach ($upcoming as $key => $value) { ?>
			<div class="col-md-8 col-lg-6">
				<div class="game-details">
					<div class="game-details-top">
						<h3 class="team-name">
							<?php if ($lang == 'ar') { ?>
								<?= $value->schools_1_name_ar . " - " . $value->schools_2_name_ar ?>
							<?php } else { ?>
								<?= $value->schools_1_name_en . " - " . $value->schools_2_name_en ?>
							<?php } ?>
						</h3>
						<span class="game-date">
							<?= $value->time; ?>
						</span>
					</div>
					<div class="game-details-content">
						<p class=""> <?= $value->teams_1_name ?>	</p>
						<p class=""> VS </p>
						<p class=""> <?= $value->teams_2_name ?>	</p>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="view-more-btn  upcoming-btn"><a href="<?= base_url("$lang/all-upcoming-games?page=1") ?>">View More</a></div>
	</div>
</div>
<br>
<br>
<div class="heading" id="contact"><h2>Contact US</h2></div>
<div class="generic-form">
	<div class="container">
		<div class="row">
			<div class="col-sm-12  col-md-6 col-lg-6">
				<div class="container">

					<form action="send-msg" method="post">
						<div class="form-group">
							<?php if (!empty(form_error('first_name'))) { ?>
								<div class="help-block with-errors text-danger">
									<?= form_error('first_name'); ?>
								</div>
							<?php } ?>
							<input type="text" class="form-control" placeholder="First Name" name="first_name"
								   value="<?= $this->input->post('first_name') ?>" required>
						</div>

						<div class="form-group">
							<?php if (!empty(form_error('last_name'))) { ?>
								<div class="help-block with-errors text-danger">
									<?= form_error('last_name'); ?>
								</div>
							<?php } ?>
							<input type="text" class="form-control" placeholder="Last Name" name="last_name"
								   value="<?= $this->input->post('last_name') ?>" required>
						</div>

						<div class="form-group">
							<?php if (!empty(form_error('email'))) { ?>
								<div class="help-block with-errors text-danger">
									<?= form_error('email'); ?>
								</div>
							<?php } ?>
							<input type="email" class="form-control" placeholder="Email" name="email"
								   value="<?= $this->input->post('email') ?>" required>
						</div>

						<div class="form-group">
							<button type="submit" class="form-control btn btn-success">Send</button>
						</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="container">
					<?php if (!empty(form_error('msg'))) { ?>
						<div class="help-block with-errors text-danger">
							<?= form_error('msg'); ?>
						</div>
					<?php } ?>
					<textarea name="msg"><?= $this->input->post('msg') ?></textarea>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>












