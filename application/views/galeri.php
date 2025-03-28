<?php require_once('_css.php')?>

<body>
	<div id="loader">
		<div id="status"></div>
	</div>
	<div id="site-header">
		<header id="header" class="header-block-top">
			<div class="container">
				<div class="row">
					<div class="main-menu">
						<!-- navbar -->
						<?php require_once('_navbar.php')?>

						<!-- end navbar -->
					</div>
				</div>
				<!-- end row -->
			</div>
			<!-- end container-fluid -->
		</header>
		<!-- end header -->
	</div>
	<!-- end site-header -->


	<!-- end banner -->
	<div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
						<h2 class="block-title text-center">
							Our Gallery - PT Binco Ran Nusantara
						</h2>
						<p class="title-caption text-center">Selamat datang di galeri PT Bincoran Nusantara!</p>
					</div>
					<?php foreach ($galeri as $index => $gg) { ?>
					<div class="col-md-4 col-sm-6 col-xs-12 gal-item">
						<div class="box">
							<a href="#" data-toggle="modal" data-target="#modal<?= $index ?>">
								<img src="<?= base_url('assets/upload/galeri/'.$gg['foto']) ?>" alt="" />
							</a>
							<div class="modal fade" id="modal<?= $index ?>" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<div class="modal-body">
											<img src="<?= base_url('assets/upload/galeri/'.$gg['foto']) ?>" alt="" />
										</div>
										<div class="col-md-12 description">
											<h4>This is the <?= $index + 1 ?> one in my Gallery</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>


	<?php require_once('_footer.php')?>

	<?php require_once('_js.php')?>
