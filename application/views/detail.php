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
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
									class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
								href="blog.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span><?= $konfig->judul_website; ?>
							<i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread"><?= $konten->judul ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ftco-animate">
					<p>
						<img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="" class="img-fluid">
					</p>
					<h2 class="mb-3"><?= $konten->judul ?></h2>
					<p><?=  nl2br($konten->keterangan) ?></p>

					<div class="tag-widget post-tag-container mb-5 mt-5">
						<div class="tagcloud">
							<a href="#" class="tag-cloud-link"><?= $konten->nama_kategori ?></a>

						</div>
					</div>

					


					
				</div> <!-- .col-md-8 -->
				<div class="col-md-4 sidebar ftco-animate"> <!-- Kolom untuk Sidebar -->
					<div class="sidebar-box">
						<form action="<?= base_url('home') ?>" class="search-form" method="GET">
							<div class="form-group">
								<span class="icon fa fa-search"></span>
								<input type="text" class="form-control" placeholder="Search..." name="search">
								<button type="submit" style="display : none;">Search</button>
							</div>
						</form>
					</div>
					<div class="sidebar-box ftco-animate">
						<div class="categories">
							<h3>Categories</h3>
							<?php foreach ($kategori as $kate) { ?>
							<li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?><span>#</span></a></li>
							<?php } ?>
						</div>
					</div>

					<div class="sidebar-box ftco-animate">
						<h3>Recent Post</h3>
						<?php foreach ($recentpost as $recentpost) { ?>
							<div class="block-21 mb-4 d-flex">
								<a href="<?= base_url('home/artikel/'.$recentpost->slug) ?>" class="blog-img mr-3" style="background-image: url('<?= base_url('assets/upload/konten/'.$recentpost->foto) ?>');"></a>
								<div class="text">
									<h3 class="heading"><a href="<?= base_url('home/artikel/'.$recentpost->slug) ?>"><?= $recentpost->judul; ?></a></h3>
									<div class="meta">
										<div><a href="#"><span class="icon-calendar"></span><?= $recentpost->tanggal; ?></a></div>
										<div><a href="#"><span class="icon-person"></span><?= $recentpost->username; ?></a></div>
										<div><a href="#"><span class="icon-chat"></span><?= $recentpost->nama_kategori; ?></a></div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					
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