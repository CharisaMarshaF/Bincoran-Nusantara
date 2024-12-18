<?php require_once('_css.php')?>
<body>
	<?php require_once('_navbar.php')?>

	<!-- END nav -->
	<section class="hero-wrap hero-wrap-2 degree-right"
		style="background-image: url('<?= base_url('assets/avo/images/peta.jpg') ?>');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end">
				<div class="col-md-9 ftco-animate pb-5 mb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Home <i
									class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
								href="<?= base_url('home/blog')?>">Blog <i class="fa fa-chevron-right"></i></a></span>
						<span><?= $nama_kategori ?>
							<i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread"><?= $nama_kategori ?></h1>
					
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
	<div class="container">
		<div class="row d-flex">
			<?php foreach ($konten as $uu) { ?>
			<div class="col-md-3 d-flex ftco-animate mb-4">
				<div class="blog-entry justify-content-end">
					<div class="text">
						<h3 class="heading mb-3"><a href="#"><?= $uu['judul'] ?></a></h3>
						<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="block-20 img"
						style="background-image: url('<?= base_url('assets/upload/konten/'.$uu['foto']) ?>');">
						</a>
						<div class="meta mb-3">
							<div><a href="#"><?= $uu['tanggal'] ?></a></div>
							<div><a href="#"><?= $uu['username'] ?></a></div>
							<div>
								<a href="#" class="meta-chat">
									<span class="fa fa-comment"></span>
								</a>
								<a class="btn btn-"><?= $uu['nama_kategori'] ?></a>
							</div>
							<p><?= substr($uu['keterangan'], 0,50)  ?><i>  .....</i></p>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		
		</div>
		</div>
	</section>


	<?php require_once('_footer.php')?>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="<?= base_url('assets/avo') ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/popper.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/scrollax.min.js"></script>
	<script
		src="<?= base_url('assets/avo') ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url('assets/avo') ?>/js/google-map.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/main.js"></script>
	<script>
		$(document).ready(function () {
			$('.home-slider').owlCarousel({
				items: 1,
				loop: true,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true, // Pause on hover
				animateOut: 'fadeOut', // Optional: add fade out effect
				animateIn: 'fadeIn' // Optional: add fade in effect
			});
		});
	</script>

</body>

</html>