<div class="container main-content referee-banner">
	<div class="heading"><h2>Game Result</h2></div>
	<div class="result-banner">
		<div class="row">
			<div class="col-sm-5 col-md-5 col-lg-5"><?= $game->team_1_name; ?></div>
			<div class="col-sm-2  col-md-2 col-lg-2 text-center"><?= $game->score_1 . " - " . $game->score_2; ?></div>
			<div class="col-sm-5  col-md-5 col-lg-5 text-center"><?= $game->team_1_name; ?></div>
		</div>
	</div>
	<div class="heading"><h2>Referee/Observer</h2></div>
	<div class="refer-banner">
		<div class="row">
			<div class="col-sm-5 col-md-5 col-lg-5">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<img src="<?= base_url() . $game->ref_image ?>" alt="Referee" width="200" height="200">
					</div>
					<div class="col-lg-6 refer-text">
						<p class="refer-name">
							<?php if ($lang == 'ar') { ?>
								<?= $game->ref_name_ar; ?>
							<?php } else { ?>
								<?= $game->ref_name_en; ?>
							<?php } ?>
						</p>
						<p>Referee</p>
					</div>
				</div>
			</div>
			<div class="col-sm-2  col-md-2 col-lg-2">
			</div>
			<div class="col-sm-5 col-md-5 col-lg-5">
				<div class="row">
					<div class="col-md-6 col-lg-6 refer-text">
						<p class="refer-name">
							<?php if ($lang == 'ar') { ?>
								<?= $game->observer_ar; ?>
							<?php } else { ?>
								<?= $game->observer_en; ?>
							<?php } ?>
						</p>
						<p>Observer</p>
					</div>
					<div class="col-lg-6 text-right">
						<img src="<?= base_url() . $game->observer_image ?>" alt="Observer" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="heading"><h2>Team Details</h2></div>
	<div class="col-lg-12">
		<div class="container">

			<section class="gerneric-banner">
				<?= $game->team_1_name; ?>
				<a href="<?= base_url("$lang/game-school/") . $game->team_1_id; ?>">See Detail <i
						class="fa fa-chevron-right"></i></a>
			</section>
			<div class="carousel">
				<div class="slideControls">
					<a class="slidePrev">
					</a>
					<a class="slideNext">
					</a>
				</div>
				<ul id="light-slider">
					<?php foreach ($team_1 as $key => $value) { ?>
						<li>
							<div class="slider-inner">
								<img src="<?= base_url() . $value->image ?>" alt="First slide" width="200" height="200">
							</div>
							<div class="slider-inner-box">
								<p>
									<?php if ($lang == 'ar') { ?>
										<?= $value->name_ar; ?>
									<?php } else { ?>
										<?= $value->name_en; ?>
									<?php } ?>
								</p>
								<p>
									<?php if ($value->gender == 1) { ?>
										<?= lang('male'); ?>
									<?php } else { ?>
										<?= lang('female'); ?>
									<?php } ?>
								</p>
								<p>
									<?= $value->birthday ?>
								</p>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>

			<section class="gerneric-banner">
				<?= $game->team_2_name; ?>
				<a href="<?= base_url("$lang/game-school/") . $game->team_2_id; ?>">See Detai <i
						class="fa fa-chevron-right"></i></a>
			</section>
			<div class="carousel">
				<div class="slideControls2">
					<a data-id="slider2Left" class="slidePrev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a data-id="slider2right" class="slideNext">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				<ul id="light-slider-2">

					<?php foreach ($team_2 as $key => $value) { ?>
						<li>
							<div class="slider-inner">
								<img src="<?= base_url() . $value->image ?>" alt="First slide" width="200" height="200">
							</div>
							<div class="slider-inner-box">
								<p>
									<?php if ($lang == 'ar') { ?>
										<?= $value->name_ar; ?>
									<?php } else { ?>
										<?= $value->name_en; ?>
									<?php } ?>
								</p>
								<p>
									<?php if ($value->gender == 1) { ?>
										<?= lang('male'); ?>
									<?php } else { ?>
										<?= lang('female'); ?>
									<?php } ?>
								</p>
								<p>
									<?= $value->birthday ?>
								</p>
							</div>
						</li>
					<?php } ?>

				</ul>
			</div>
		</div>
	</div>


	<div class="heading mt150">
		<h2>Best Player</h2>
	</div>

	<div class="refer-banner">
		<div class="row">
			<?php foreach ($best as $key => $value) { ?>
				<?php if ($value->school_id == $team_1[0]->school_id) { ?>
					<div class="col-sm-5  col-md-5 col-lg-5">
						<div class="row">
							<div class="col-md-6 col-lg-6 img-responsive">
								<img src="<?= base_url() . $value->image ?>" alt="Best Player" width="200" height="200">
							</div>
							<div class="col-md-6  col-lg-6 refer-text">
								<p class="refer-name">
									<?php if ($lang == 'ar') { ?>
										<?= $value->name_ar; ?>
									<?php } else { ?>
										<?= $value->name_en; ?>
									<?php } ?></p>
								<p>
									<?php if ($value->gender == 1) { ?>
										<?= lang('male'); ?>
									<?php } else { ?>
										<?= lang('female'); ?>
									<?php } ?>
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>

			<div class="col-sm-2 col-md-2 col-lg-2"></div>


			<?php foreach ($best as $key => $value) { ?>
				<?php if ($value->school_id == $team_2[0]->school_id) { ?>
					<div class="col-sm-5 col-md-5 col-lg-5">
						<div class="row">
							<div class="col-md-6 col-lg-6 refer-text">
								<p class="refer-name">
									<?php if ($lang == 'ar') { ?>
										<?= $value->name_ar; ?>
									<?php } else { ?>
										<?= $value->name_en; ?>
									<?php } ?></p>
								<p>
									<?php if ($value->gender == 1) { ?>
										<?= lang('male'); ?>
									<?php } else { ?>
										<?= lang('female'); ?>
									<?php } ?>
								</p>
							</div>
							<div class="col-md- col-lg-6 img-responsive"><img src="<?= base_url() . $value->image ?>"
																			  alt="Best Player" width="200"
																			  height="200"></div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>

	<div class="game-content">
		<div class="heading mt150"><h2>Game Content</h2></div>
		<div class="panel1 gal">
			<div id="gallery">

				<?php foreach ($image as $key => $value) { ?>
					<?php if (file_exists(FCPATH . 'plugins/images/end/images/' . $value->image)) { ?>
						<?php if (explode("/", mime_content_type(FCPATH . 'plugins/images/end/images/' . $value->image))[0] == "image") { ?>
							<img src="<?= base_url('plugins/images/end/images/') . $value->image ?>"
								 class="card img-responsive">
						<?php } ?>
					<?php } ?>
				<?php } ?>

				<?php foreach ($media as $key) { ?>
					<?php if (file_exists(FCPATH . 'plugins/images/end/media/' . $key->media)) { ?>
						<?php if (explode("/", mime_content_type(FCPATH . 'plugins/images/end/media/' . $key->media))[0] == "image") { ?>
							<img src="<?= base_url('plugins/images/end/media/') . $key->media ?>"
								 class="card img-responsive">
						<?php } ?>
					<?php } ?>
				<?php } ?>

				<?php foreach ($media as $key) { ?>
					<?php if (file_exists(FCPATH . 'plugins/images/end/media/' . $key->media)) { ?>
						<?php if (explode("/", mime_content_type(FCPATH . 'plugins/images/end/media/' . $key->media))[0] != "image") { ?>
							<video width="500" height="500" controls class="card vid">
								<source src="<?= base_url('plugins/images/end/media/') . $key->media; ?>"
										type="video/mp4">
								<source src="<?= base_url('plugins/images/end/media/') . $key->media; ?>"
										type="video/ogg">
								<source src="<?= base_url('plugins/images/end/media/') . $key->media; ?>"
										type="video/3gp">
								Your browser does not support the video tag.
							</video>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			</div>

			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<p>Some text in the modal.</p>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>


<script>
    $(document).ready(function () {
        $("img").click(function () {
            var t = $(this).attr("src");
            $(".modal-body").html("<img src='" + t + "' class='modal-img'>");
            $("#myModal").modal();
        });

        $("video").click(function () {
            var v = $("video > source");
            var t = v.attr("src");
            $(".modal-body").html("<video class='model-vid' controls><source src='" + t + "' type='video/mp4'></source></video>");
            $("#myModal").modal();
        });
    });
</script>

<script src="<?= base_url('public/site/') ?>js/lightslider.js"></script>
<script>
    $(document).ready(function () {
        var slider = $("#light-slider").lightSlider({
            controls: false,
            item: 4,
            auto: true,
            loop: true,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                    }
                }
            ]

        });

        $('.slideControls .slidePrev').click(function () {
            slider.goToPrevSlide();
        });

        $('.slideControls .slideNext').click(function () {
            slider.goToNextSlide();
        });

        // new slide control
        var slider2 = $("#light-slider-2").lightSlider({
            controls: false,
            auto: true,
            item: 4,
            loop: true,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                    }
                }
            ]
        });
        $('.slideControls2 .slidePrev').click(function () {
            slider2.goToPrevSlide();
        });

        $('.slideControls2 .slideNext').click(function () {
            slider2.goToNextSlide();
        });
        // new slide control


    });
</script>
