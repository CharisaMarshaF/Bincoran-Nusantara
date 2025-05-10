<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once('_css.php')?>

</head>

<body>

	<!-- Top alert END -->

	<?php require_once('_navbar.php')?>


	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- =======================
Main Banner START -->
		<section class="pt-0">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Slider START -->
						<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
							<div class="tiny-slider-inner" data-autoplay="false" data-gutter="0" data-arrow="true"
								data-dots="false" data-items="1">
								<?php foreach ($caraousel as $aa) { ?>
								<!-- Card item START -->
								<div class="card overflow-hidden h-500px h-md-600px text-center rounded-0"
									style="background-image:url('<?= base_url('assets/upload/caraousel/') . $aa['foto'] ?>'); background-position: center left; background-size: cover;">
									<!-- Background dark overlay -->
									<div class="bg-overlay bg-dark opacity-6"></div>
									<!-- Card image overlay -->
									<div class="card-img-overlay d-flex align-items-center p-2 p-sm-4">
										<div class="w-100 my-auto">
											<div class="row justify-content-center">
												<div class="col-11 col-lg-7">
													<!-- Title -->
													<h1 class="text-white display-6"><?= $aa['judul'] ?></h1>
													<p class="text-white"><?= $aa['deskripsi'] ?>.</p>
													<!-- Button -->
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->

								<!-- Card item START -->

								<?php } ?>

								<!-- Card item END -->
							</div>
						</div>
						<!-- Slider END -->
					</div>
				</div>
			</div>
		</section>
		<!-- =======================



<!-- =======================
About START -->
		<section class="pt-0 pt-md-5" id="about">
			<div class="container">
				<div class="row g-md-5 align-items-center">
					<div class="col-lg-6 mb-3 mb-lg-0">
						<div class="row mt-4 mt-md-0">
							<!-- Image 1 -->
							<div class="col-6">
								<img class="rounded" src="<?= base_url('assets/fotobin/20250327Mar2859.jpg') ?>" alt="">
							</div>

							<!-- Image 2 -->
							<div class="col-6 mt-5 position-relative">
								<img class="rounded" src="<?= base_url('assets/fotobin/cocobristle.png') ?>" alt="">
								<!-- SVG decoration -->
								<figure class="position-absolute top-0 end-0 mb-5 mt-n4 d-none d-lg-block">
									<svg width="192.5px" height="89.4px" viewBox="0 0 192.5 89.4">
										<path class="fill-primary"
											d="M170.2,0.5c-0.1,0-0.2,0-0.4,0c-2.6-0.1-5.2-0.4-7.8-0.5c-2.9-0.1-5.8,0-8.6,0.2c-1.4,0.1-2.9,0.3-4.3,0.5 c-0.5,0.1-1,0-1.5,0c-1-0.1-1.9,0.2-2.9,0.3c-5.6,0.9-11.1,2.1-16.5,3.6c-2.7,0.7-5.4,1.6-8.1,2.5c-0.6,0.2-1.2,0.4-1.8,0.5 c-0.4,0-0.8,0-1.2,0.1c-1.5,0.2-3,1.1-4.3,1.8c-3,1.5-5.9,3.2-8.6,5.2c-2,1.5-3.8,3.1-5.6,4.8c-0.9,0.9-1.7,1.8-2.5,2.7 c-0.4,0.4-1.1,0.7-1.4,1.2c-0.3,0.4-0.6,0.9-0.9,1.4c-0.9,1.2-1.7,2.3-2.7,3.4c-0.3,0.4-0.7,0.6-1.2,0.6c-1.4,0.1-2.8-0.1-4.2-0.1 c-0.7,0-1.2,0.2-1.9,0.2c-3.3,0.4-6.6,0.7-9.8,1.6c-1.7,0.5-3.4,0.9-5.1,1.4c-5.4,1.5-11,2.9-16,5.4c-4.6,2.2-8.7,5.2-12.7,8.3 c-2,1.6-4,3.2-5.9,4.9c-0.8,0.7-1.6,1.2-2.5,1.6c-0.9,0.5-1.7,1.3-2.4,2c-1.4,1.3-2.9,2.6-4.3,3.9c-1.2,1.1-2.5,2.1-3.6,3.3 c-0.9,1-2,1.9-3,2.8c-1,0.9-2.1,1.9-3.1,2.8c-0.8,0.7-1.6,1.2-2.3,1.9c-0.9,0.9-1.7,1.9-2.7,2.7c0-0.7,0.2-1.3,0.2-2 c0-1.8-0.2-3.7-0.7-5.5c-0.2-0.9-0.5-1.8-1.1-2.4c-0.6-0.7-1.7-1-2.4-0.6c-0.1,0.1-0.3,0.2-0.4,0.3c-0.1,0.2-0.1,0.4,0,0.6 c0.7,3.7,1.2,7.4,0.7,11.1c-0.2,2.4-0.9,4.9-2,7c-0.5,1-1.2,1.9-1.7,3c-0.4,1-1.4,1.8-2.1,2.7C0.3,86,0.1,86.3,0,86.6 c-0.1,0.4,0.1,0.7,0.2,1.1c0.3,0.8,0.8,1.6,1.6,1.7c0.5,0,0.9-0.2,1.3-0.5c0.9-0.5,1.7-1.1,2.6-1.6c0.4-0.2,0.7-0.5,1.1-0.7 c1.7-1.3,3.7-2.3,5.7-3.1c4.3-1.7,9.1-2.4,13.8-1.7c0.2,0,0.4,0.1,0.7,0c0.7-0.2,0.9-1.2,0.4-1.8c-0.4-0.6-1.2-0.8-1.9-1 c-2.7-0.8-5.4-1.5-8.2-1.8c-0.7-0.1-1.4-0.1-2.1-0.2c-0.3,0-0.6,0-0.8,0c-0.3,0-0.9,0.2-1.2,0.1C13,77,13,77.1,13,76.8 c0-0.4,0.6-0.8,0.9-1c0.5-0.4,0.9-0.8,1.4-1.2c1.1-1,2.3-1.9,3.4-2.9c0.6-0.5,1.1-1,1.7-1.5c0.3-0.3,0.5-0.7,0.9-1 c1.2-1.1,2.7-1.7,3.9-2.8c0.4-0.4,0.8-0.8,1.2-1.2c0.8-0.8,1.7-1.5,2.6-2.2c1-0.8,2.1-1.6,3.1-2.3c0.9-0.6,1.9-1.1,2.6-2 c0.8-1,2.1-1.7,3.1-2.5c1.1-0.9,2.2-1.8,3.3-2.6c3.9-3.1,7.9-6.2,12.3-8.6c5.2-2.7,10.6-4.9,16.3-6.4c5.5-1.4,11.2-1.8,16.8-2.7 c0.2,0,0.3-0.1,0.5-0.1c1.4-0.2,2.3-0.4,2,1.5c-0.8,4.9,2.3,7.5,5.8,9.8c4,2.5,8,5,12.7,5.8c5.2,0.9,10.4,2.7,15.9,0.8 c3-1,6.3-5,6.2-7.6c0-1.7-0.3-3.5-1-5.1c-0.6-1.4-1.5-3-2.8-3.7c-1-0.5-1.9-1.5-2.8-2.2c-1.1-0.8-2.2-1.5-3.3-2.1 c-2.3-1.2-4.8-2.1-7.3-2.8c-3.5-0.9-7.2-1.4-10.8-1.8c-0.9-0.1-1.7-0.2-2.6-0.2c-0.2,0-1.4,0-1.4-0.2c-0.1-0.2,0.3-0.5,0.4-0.6 c0.8-0.9,1.7-1.8,2.5-2.6c1.7-1.7,3.6-3.3,5.5-4.8c2-1.6,4.2-3,6.4-4.1c1.1-0.6,2.3-1.1,3.5-1.5c0.6-0.2,1.2-0.4,1.8-0.6 c0.4-0.2,0.7-0.5,1.1-0.7c1.2-0.6,2.7-0.9,4-1.3c1.4-0.4,2.8-0.8,4.2-1.2c2.8-0.8,5.6-1.5,8.4-2.2c3.4-0.8,6.9-1.6,10.3-2.4 c7.9-1.7,15.9-2.4,24-1.7c4.4,0.4,8.9,0.9,13.2,2.1c1.3,0.4,2.5,0.8,3.9,1.1c0.7,0.1,1.4,0.5,2,0.9c0.9,0.5,1.7,0.9,2.6,1.4 c0.3,0.2,0.7,0.3,0.9,0.1c0.1-0.1,0.1-0.3,0.1-0.4c0-0.9-0.4-1.8-1-2.5c-0.5-0.6-1.2-1.4-1.9-1.8c-0.9-0.6-2.2-0.9-3.3-1.3 c-1.1-0.4-2.2-0.7-3.3-1c-2.8-0.8-5.6-1.4-8.5-1.9C173.1,0.9,171.6,0.6,170.2,0.5z M106.8,36c5,0.8,11.2,2,16.2,6.2 c1.1,0.9,2.8,1.6,2.3,3.4c-0.4,1.7-2.1,1.8-3.5,2.3c-5,1.5-9.9,0-14.5-1.2c-4.9-1.2-9.7-3.3-13.5-7c-0.6-0.6-1.2-1.3-1.5-2.1 c-0.1-0.3-0.1-0.7-0.2-1c-0.1-0.3-0.3-0.6,0-0.9c0.2-0.2,0.5-0.3,0.9-0.3c2.4-0.4,4.9-0.6,7.4-0.5c0.9,0,1.8,0.4,2.7,0.5 C104.5,35.6,105.7,35.8,106.8,36z" />
									</svg>
								</figure>
							</div>

							<!-- Content -->
							<div class="col-8 col-sm-5 mt-n6 align-items-end position-relative">
								<!-- SVG decoration -->
								<figure class="mt-n7 me-n7 position-absolute top-0 end-0">
									<svg width="192px" height="190px">
										<path stroke="#F99D2B" fill="none" stroke-width="10"
											d="M9.1,82.6C15.5,36,58.7,2.7,105.5,8.3c47.3,5.7,81.4,49.3,75.7,96.6c-5.8,47.2-49.4,81.4-96.6,75.7" />
									</svg>
								</figure>
								<div class="p-3 card card-body shadow rounded-3 d-inline-block position-relative mt-n2">
									<!-- Info -->
									<h6 class="mb-2"><?= $this->lang->line('product_info_title') ?></h6>
									<p class="mb-0 small"><?= $this->lang->line('product_info_description') ?></p>
									<!-- Icon -->
									<div
										class="icon-lg bg-primary rounded-circle position-absolute top-100 start-100 translate-middle">
										<i class="bi bi-shield-check text-white"></i>
									</div>
								</div>
							</div>
						</div> <!-- Row END -->
					</div>

					<div class="col-lg-6 mt-5 mt-lg-0">
						<!-- Title -->
						<h2 class="mb-3"><?= $this->lang->line('about_title') ?></h2>
						<p class="mb-3 mb-lg-4"><?= $this->lang->line('about_paragraph') ?></p>
						<!-- Content -->
						<!-- Button -->
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
About END -->
		<section class="bg-light position-relative">
			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
				<svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
					<path class="fill-warning"
						d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute top-0 end-0">
				<svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
					<path class="fill-primary"
						d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-50 translate-middle-x ms-n9 mb-5">
				<svg width="23px" height="23px">
					<path class="fill-primary"
						d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z">
					</path>
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 end-0 me-5 mb-5">
				<svg width="22px" height="22px">
					<path class="fill-warning"
						d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z">
					</path>
				</svg>
			</figure>

			<div class="container position-relative">
				<div class="row justify-content-between align-items-center my-5">

					<div class="col-lg-5 position-relative">
						<!-- SVG decoration -->
						<figure class="position-absolute top-0 start-0 translate-middle mt-n5">
							<svg width="29px" height="29px">
								<path class="fill-orange"
									d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
								</path>
							</svg>
						</figure>

						<!-- Title -->
						<h2 class="h1"><?= $this->lang->line('coconut_fiber_processing') ?>
						</h2>
					</div>

					<div class="col-lg-5 position-relative mt-4 mt-lg-0">
						<!-- YouTube Video Thumbnail -->
						<img src="https://img.youtube.com/vi/cs9JtenT574/hqdefault.jpg"
							class="border border-5 border-white rounded-2 w-100" alt="Video Thumbnail">

						<!-- Tombol Play di Tengah -->
						<div class="position-absolute top-50 start-50 translate-middle">
							<a href="https://www.youtube.com/watch?v=cs9JtenT574"
								class="btn text-danger btn-round btn-white-shadow btn-lg mb-0" data-glightbox
								data-gallery="video-tour">
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- =======================
Video divider END -->

		<!-- =======================
Trending course START -->
		<section class="pt-0 pt-lg-5">
			<div class="container">
				<!-- Title -->
				<div class="row mb-4">
					<div class="col-12">
						<h2 class="fs-1 fw-bold">
							<span class="position-relative z-index-9"><?= $this->lang->line('produk_title') ?></span>
							<span class="position-relative z-index-1"><?= $this->lang->line('produk_titlee') ?>
								<!-- SVG START -->
								<span class="position-absolute top-50 start-50 translate-middle z-index-n1">
									<svg width="163.9px" height="48.6px">
										<path class="fill-warning"
											d="M162.5,19.9c-0.1-0.4-0.2-0.8-0.3-1.3c-0.1-0.3-0.2-0.5-0.4-0.7c-0.3-0.4-0.7-0.7-1.2-0.9l0.1,0l-0.1,0 c0.1-0.4-0.2-0.5-0.5-0.6c0,0-0.1,0-0.1,0c-0.1-0.1-0.2-0.2-0.3-0.3c0-0.3,0-0.6-0.2-0.7c-0.1-0.1-0.3-0.2-0.6-0.2 c0-0.3-0.1-0.5-0.3-0.6c-0.1-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.1,0-0.2,0c-0.5-0.4-1-0.8-1.4-1.1c0,0,0-0.1,0-0.1c0-0.1-0.1-0.1-0.3-0.2 c-0.9-0.5-1.8-1-2.6-1.5c-6-3.6-13.2-4.3-19.8-6.2c-4.1-1.2-8.4-1.4-12.6-2c-5.6-0.8-11.3-0.6-16.9-1.1c-2.3-0.2-4.6-0.3-6.8-0.3 c-1.2,0-2.4-0.2-3.5-0.1c-2.4,0.4-4.9,0.6-7.4,0.7c-0.8,0-1.7,0.1-2.5,0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0 c-0.9,0-1.8,0.1-2.7,0.1c-0.9,0-1.8,0-2.7,0c-5.5-0.3-10.7,0.7-16,1.5c-2.5,0.4-5.1,1-7.6,1.5c-2.8,0.6-5.6,0.7-8.4,1.4 c-4.1,1-8.2,1.9-12.3,2.6c-4,0.7-8,1.6-11.9,2.7c-3.6,1-6.9,2.5-10.1,4.1c-1.9,0.9-3.8,1.7-5.2,3.2c-1.7,1.8-2.8,4-4.2,6 c-1,1.3-0.7,2.5,0.2,3.9c2,3.1,5.5,4.4,9,5.7c1.8,0.7,3.6,1,5.3,1.8c2.3,1.1,4.6,2.3,7.1,3.2c5.2,2,10.6,3.4,16.2,4.4 c3,0.6,6.2,0.9,9.2,1.1c4.8,0.3,9.5,1.1,14.3,0.8c0.3,0.3,0.6,0.3,0.9-0.1c0.7-0.3,1.4,0.1,2.1-0.1c3.7-0.6,7.6-0.3,11.3-0.3 c2.1,0,4.3,0.3,6.4,0.2c4-0.2,8-0.4,11.9-0.8c5.4-0.5,10.9-1,16.2-2.2c0.1,0.2,0.2,0.1,0.2,0c0.5-0.1,1-0.2,1.4-0.3 c0.1,0.1,0.2,0.1,0.3,0c0.5-0.1,1-0.3,1.6-0.3c3.3-0.3,6.7-0.6,10-1c2.1-0.3,4.1-0.8,6.2-1.2c0.2,0.1,0.3,0.1,0.4,0.1 c0.1,0,0.1,0,0.2-0.1c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0.2-0.1,0.4-0.1,0.6-0.2c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.2 c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0.2,0,0.4-0.1,0.5-0.1c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3-0.1,0.3-0.3c0.5-0.2,0.9-0.4,1.4-0.5 c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.2,0.1,0.4,0.1,0.6,0 c0.1,0,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0.5-0.2,1-0.4,1.6-0.7c1.5-0.7,3.1-1.4,4.7-1.9c4.8-1.5,9.1-3.4,12.8-6.3 c0.8-0.2,1.2-0.5,1.6-1c0.2-0.3,0.4-0.6,0.5-0.9c0.5-0.1,0.7-0.2,0.9-0.5c0.2-0.2,0.2-0.5,0.3-0.9c0-0.1,0-0.1,0.1-0.1 c0.5,0,0.6-0.3,0.8-0.5C162.3,24,163,22,162.5,19.9z M4.4,28.7c-0.2-0.4-0.3-0.9-0.1-1.2c1.8-2.9,3.4-6,6.8-8 c2.8-1.7,5.9-2.9,8.9-4.2c4.3-1.8,9-2.5,13.6-3.4c0,0.1,0,0.2,0,0.2l0,0c-1.1,0.4-2.2,0.7-3.2,1.1c-3.3,1.1-6.5,2.1-9.7,3.4 c-4.2,1.6-7.6,4.2-10.1,7.5c-0.5,0.7-1,1.3-1.6,2c-2.2,2.7-1,4.7,1.2,6.9c0.1,0.1,0.3,0.3,0.4,0.5C7.8,32.5,5.5,31.2,4.4,28.7z  M158.2,23.8c-1.7,2.8-4.1,5.1-7,6.8c-2,1.2-4.5,2.1-6.9,2.9c-3.3,1-6.4,2.4-9.5,3.7c-3.9,1.6-8.1,2.5-12.4,2.9 c-6,0.5-11.8,1.5-17.6,2.5c-4.8,0.8-9.8,1-14.7,1.5c-5.6,0.6-11.2,0.2-16.8,0.1c-3.1-0.1-6.3,0.3-9.4,0.5c-2.6,0.2-5.2,0.1-7.8-0.1 c-3.9-0.3-7.8-0.5-11.7-0.9c-2.8-0.3-5.5-0.7-8.2-1.4c-3.2-0.8-6.3-1.7-9.5-2.5c-0.5-0.1-1-0.3-1.4-0.5c-0.2-0.1-0.4-0.1-0.6-0.2 c0,0,0.1,0,0.1,0c0.3-0.1,0.5,0,0.7,0.1c0,0,0,0,0,0c3.4,0.5,6.9,1.2,10.3,1.4c0.5,0,1,0,1.5,0c0.5,0,1.3,0.2,1.3-0.3 c0-0.6-0.7-0.9-1.4-0.9c-2.1,0-4.2-0.2-6.3-0.5c-4.6-0.7-9.1-1.5-13.4-3c-2.9-1.1-5.4-2.7-6.9-5.2c-0.5-0.8-0.5-1.6-0.1-2.4 c3.2-6.2,9-9.8,16.3-12.2c6.7-2.2,13.2-4.5,20.2-6c5-1.1,10-1.8,15-2.9c8.5-1.9,17.2-2.4,26-2.7c3.6-0.1,7.1-0.8,10.8-0.6 c8.4,0.7,16.7,1.2,25,2.3c4.5,0.6,9,1.2,13.6,1.7c3.6,0.4,7.1,1.4,10.5,2.8c3.1,1.3,6,2.9,8.5,5C159.1,17.7,159.8,21.1,158.2,23.8z" />
									</svg>
								</span>
								<!-- SVG END -->
							</span>
						</h2>
						<p class="mb-0"></p><?= $this->lang->line('produk_description') ?></p>
					</div>
				</div>

				<div class="row g-4">
            <!-- Card START -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-hover overflow-hidden bg-transparent">
                    <div class="position-relative">
                        <!-- Image -->
                        <img class="card-img-top" src="<?= base_url('assets/fotobin/cocobristle.png') ?>"
                            alt="Card image">
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="#"><?= $this->lang->line('cocobristle_title') ?></a></h5>
                        <p class="mb-0"><?= $this->lang->line('cocobristle_description') ?></p>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- Card END -->

            <!-- Card START -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-hover overflow-hidden bg-transparent">
                    <div class="position-relative">
                        <!-- Image -->
                        <img class="card-img-top" src="<?= base_url('assets/fotobin/cocofiber_detail.png') ?>"
                            alt="Card image">
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="#"><?= $this->lang->line('cocofiber_title') ?></a></h5>
                        <p class="mb-0"><?= $this->lang->line('cocofiber_description') ?></p>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- Card END -->

            <!-- Card START -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-hover overflow-hidden bg-transparent">
                    <div class="position-relative">
                        <!-- Image -->
                        <img class="card-img-top" src="<?= base_url('assets/fotobin/cocohusk.png') ?>"
                            alt="Card image">
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="#"><?= $this->lang->line('cocopeat_title') ?></a></h5>
                        <p class="mb-0"><?= $this->lang->line('cocopeat_description') ?></p>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- Card END -->
        </div>
    </div>
</section>
		<!-- =======================
Trending course END -->
		<!-- =======================
Trending courses START -->
		<section class="pt-0 pt-md-5">
			<div class="container">
				<!-- Title -->
				<div class="row">
					<div class="col-lg-8 mb-4">
						<h2 class="mb-0"><?= $this->lang->line('produk_pt_title') ?> <span class="text-warning"><?= $this->lang->line('produk_pt_titlee') ?></span> <?= $this->lang->line('produk_pt_titleee') ?></h2>
						<p class="mb-0"><?= $this->lang->line('produk_pt_description') ?></p>
					</div>
				</div>

				<div class="row g-4">
					<!-- Card Item START -->
					<?php $count = 0; foreach (array_slice($konten, 0, 6) as $uu) { ?>

					<div class="col-md-6 col-xl-4">
						<div class="card p-2 shadow h-100 position-relative">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<!-- Image -->
									<img src="<?= base_url('assets/upload/konten/') . $uu['foto'] ?>"
										class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<!-- Optional icon or action -->
									</div>
								</div>
							</div>
							<!-- Card body -->
							<div class="card-body">
								<hr>
								<!-- Title -->
								<h5 class="card-title"><?= $uu['judul'] ?></h5>
								<!-- Description -->
								<p class="mb-0"><?= substr($uu['keterangan'], 0, 100) ?>...</p>

								<!-- Stretched link -->
								<a href="<?= base_url('home/detail/' . $uu['slug']) ?>" class="stretched-link"></a>
							</div>
						</div>
					</div>

					<!-- Card Item END -->
					<?php } ?>



				</div>
				<!-- Button -->
				<div class="text-center mt-5">
					<a href="<?= base_url('home/blog') ?>" class="btn btn-primary-soft mb-0"><?= $this->lang->line('semua_produk') ?></a>
				</div>
			</div>
		</section>
		<!-- =======================
Trending courses END -->




	</main>
	<!-- **************** MAIN CONTENT END **************** -->

		<!-- =======================
Footer START -->
<?php require_once('_footer.php')?>

		<!-- =======================
Footer END -->

		<!-- Cookie alert box START -->
		
		<!-- Cookie alert box END -->

		<!-- Back to top -->
		<?php require_once('_js.php')?>

</body>

<!-- Mirrored from eduport.webestica.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 06:29:07 GMT -->

</html>