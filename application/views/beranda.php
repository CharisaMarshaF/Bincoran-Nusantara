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
		<?php foreach ($caraousel as $aa) { ?>

		<section class="pt-0 position-relative overflow-hidden h-700px h-sm-600px h-lg-700px rounded-top-4 mx-2 mx-md-4"
			style="background-image:url(<?= base_url('assets/upload/caraousel/') . $aa['foto'] ?>); background-position: center; background-size: cover;">
			<div class="bg-overlay bg-dark opacity-5"></div>
			<!-- SVG decoration for curve -->
			<figure class="position-absolute bottom-0 left-0 w-100 d-md-block mb-n3 z-index-9">
				<svg class="fill-body" width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
					<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
				</svg>
			</figure>
			<!-- SVG decoration -->

			<div class="container z-index-9 position-relative">


				<div class="row py-0 py-md-5 align-items-center text-center text-sm-start">
					<div class="col-sm-10 col-lg-8 col-xl-6 all-text-white my-5 mt-md-0">
						<div class="py-0 py-md-5 my-5">



							<!-- Title -->
							<?php
$judul = $aa['judul'];
$kata = explode(' ', $judul);
$limit = 3;

$judul1 = implode(' ', array_slice($kata, 0, $limit));
$judul2 = implode(' ', array_slice($kata, $limit));
?>

							<h1 class="text-white display-5">
								<?= $judul1 ?>
								<span class="text-warning"><?= $judul2 ?></span>
							</h1>
							<p class="text-white"><?= $aa['deskripsi'] ?></p>

							<div class="d-sm-flex align-items-center mt-4">
								<!-- Button -->
								<a href="<?= base_url('home/blog') ?>" class="btn btn-primary me-2 mb-4 mb-sm-0"><?= $this->lang->line('semua_produk') ?></a>
								<!-- Video button -->
								<div class="d-flex align-items-center justify-content-center py-2 ms-0 ms-sm-4">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

		<!-- =======================
Main Banner END -->



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
		<!-- =======================
Course START -->
		<section class="bg-light py-5 position-relative overflow-hidden">
			<!-- SVG decoration -->
			<figure class="position-absolute top-0 start-0">
				<svg width="818.6px" height="235.1px">
					<path class="fill-orange opacity-5"
						d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z" />
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-0 mb-3">
				<svg enable-background="new 0 0 223 134" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<path class="fill-orange"
						d="m216.6 78.7c-1.8-0.3-4.1 0.1-5.9 0.3-2.4 0.2-4.8 0.7-7.1 0.9-1.6 0.1-3.1 0.2-4.6 0.3-1.8 0.1-3.7 0.1-5.6 0.1-1.3-0.1-2.6-0.1-3.9-0.1-2.5 0-4.9-0.3-7.3-0.4-2.3-0.1-4.5 0.5-6.8 0.5-4 0.1-8.6-0.3-12.2 1.6-0.2 0.1-0.2 0.5-0.1 0.6 0.6 1.1 2.6 1.6 3.7 2 0.3 0.1 0.7 0.3 1 0.3 0.9 0.6 1.8 1.2 2.8 1.8 0.7 0.5 1.5 0.8 2.2 1.2 0.1 0.1 0.3 0.2 0.4 0.3 0.3 0.2 1 0.4 1.2 0.7 0.3 0.5 0 1.6-0.1 2.1-0.3 1.3-0.6 2.5-0.8 3.8-0.3 2.1-1 4.1-1.5 6-0.1 0.1-0.3 0.3-0.4 0.5-0.3 0.4 0.1 0.8 0.5 0.7v0.2c0 0.2 0.4 0.1 0.5 0 0.2-0.1 0.3-0.3 0.5-0.4s0.3-0.2 0.5-0.3c2-0.8 4-1.5 5.8-2.6 0.7 1.4 1.4 2.9 2 4.3 0.5 1.1 1.4 3.1 2.9 3.2 1.8 0.1 3.8-2.6 5.1-3.7 2.1-1.6 4.4-3.1 6.5-4.7 3.9-2.8 7.7-5.7 11.4-8.8 0.9-0.8 1.4-1.8 2.3-2.6 1-1 2.2-1.6 3.3-2.4 0.9-0.7 1.5-1.5 2.2-2.3 0.7-0.7 1.6-1.5 2.1-2.5-0.2-0.3-0.3-0.6-0.6-0.6zm-46.5 7 0.6 0.3 0.9 0.6c-0.6-0.3-1.1-0.6-1.5-0.9zm2.4 0.6c-0.7-0.7-1.2-1-2.1-1.4-1.2-0.5-2.6-1-3.8-1.4h-0.1c-0.3-0.2-0.7-0.4-1-0.5-0.5-0.3-1.5-0.4-0.9-0.9 0.2-0.1 0.7-0.1 0.9-0.2 1.2-0.3 2.4-0.5 3.7-0.7 2.6-0.1 5.2 0.1 7.5-0.1 1.2-0.1 2.3-0.2 3.5-0.3h1.9 0.1c0.7 0 1.4 0.1 2.2 0.1 1.9 0.2 3.8 0.1 5.7 0.2 4.3 0.1 8.4 0.1 12.7-0.3 2.1-0.2 4.2-0.5 6.3-0.7 1.2-0.1 2.3-0.2 3.5-0.2-0.5 0.1-1 0.3-1.5 0.3-1.8 0.3-3.5 0.6-5.2 0.9-3.4 0.4-6.8 0.9-10.1 1.6-3.4 0.7-6.8 1.5-10.3 2.2-3.7 0.7-7 2.4-10.7 3.3-0.1-0.1-0.2-0.1-0.3-0.1-0.6-0.9-1.2-1.1-2-1.8zm1.5 9.8c0.1-0.5 0.3-0.9 0.4-1.3 0.3-1.1 0.4-2.3 0.6-3.5 0.1-0.8 0.4-1.6 0.4-2.5 0 0 0-0.1 0.1-0.1 0.3-0.2 1.8-0.3 2-0.3 1.4-0.4 2.9-1 4.3-1.5 1.2-0.5 2.5-0.9 3.8-1.2 3.3-0.7 6.5-1.3 9.8-2.2 3.5-0.9 7.1-1.2 10.7-1.7 1.6-0.2 3.3-0.5 4.9-0.8 1-0.2 2-0.5 3.1-0.7-0.6 0.3-1.2 0.7-1.9 1-1.2 0.5-2.4 0.8-3.6 1.2-2.5 1.1-4.8 2.5-7.1 3.8-1 0.4-2 0.8-3.1 1.2-2.2 0.9-4.3 1.8-6.4 2.7-1.5 0.6-3.1 1.1-4.6 1.8-1.1 0.5-2.2 1-3.3 1.5-0.2 0.1-0.5 0.2-0.7 0.3-0.5 0.2-1 0.4-1.4 0.5-1.1 0.3-2.4 0.6-3.3 1.1-0.1-0.1-0.3-0.1-0.4 0.1-1.3 0.9-2.6 2-3.8 2.9-0.3 0.3-0.7 0.5-1 0.8 0.1-0.8 0.3-1.9 0.5-3.1zm4.7 1.9c-1.4 0.8-3.1 1.4-4.6 2 0.1-0.2 0.3-0.3 0.3-0.4 0.3-0.2 0.5-0.3 0.7-0.5 1-0.9 2.1-1.8 3.2-2.6 0.2 0.5 0.4 0.9 0.6 1.4-0.1 0.1-0.2 0.1-0.2 0.1zm34.9-16.3c-0.5 0.4-0.9 0.9-1.3 1.2l-0.4 0.4c-0.2 0.1-0.3 0.3-0.5 0.4-1 0.7-2 1.4-2.9 2.2-0.5 0.5-0.9 1-1.2 1.5-1 0.9-1.9 1.8-2.9 2.6-0.8 0.6-1.6 1.2-2.3 1.8-1.6 1.4-3.4 2.7-5.2 4-3.3 2.4-6.7 4.6-9.8 7.3-0.7 0.5-1.2 1-1.9 1.6-0.7 0.4-1.3 0.5-2-0.1-0.2-0.3-0.3-0.7-0.4-0.9-0.5-1-1-2-1.4-3-0.7-1.6-1.2-3.3-2.3-4.6 1.4-0.8 3.4-1 4.8-1.6s2.8-1.5 4.3-2l9.6-3.6c2.9-1.2 5.4-2.7 8.2-4.1 0.1-0.1 0.3-0.1 0.4-0.1 1.7-0.7 3.3-1.6 5-2.3 0.7-0.3 1.4-0.5 2.1-0.8 0.1-0.1 0.3-0.2 0.5-0.3l-0.4 0.4z">
					</path>
					<path class="fill-orange"
						d="m89.1 0c-0.5 0-1 0.1-1.4 0.3-0.3 0.1-0.5 0.3-0.8 0.3-0.3 0.1-0.6 0-0.9 0.1-0.1 0-0.3 0.2-0.3 0.3v0.2c-0.1 0.5 0.7 0.8 0.9 0.3 0.4-0.1 0.7 0 1.1-0.2 0.5-0.3 0.9-0.4 1.4-0.4 0.6 0 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-orange"
						d="m77.1 0.9c-0.7 0-1.4-0.1-2.2-0.1-0.6 0-1.4 0-1.8 0.5s0.3 1.1 0.7 0.7c0.3-0.3 1.2-0.2 1.6-0.2 0.5 0 1.1 0.1 1.6 0.1 0.7-0.1 0.7-1 0.1-1z">
					</path>
					<path class="fill-orange" d="m65.5 1.5h-2.9c-0.6 0-0.6 0.9 0 0.9h2.9c0.6 0 0.6-0.9 0-0.9z"></path>
					<path class="fill-orange"
						d="m55.7 2.1c-0.9-0.3-2.7-0.7-3.1 0.5-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.4 1.7 0 2 0.1 0.5 0.2 0.7-0.6 0.2-0.9z">
					</path>
					<path class="fill-orange"
						d="m46.1 2.7c-0.7 0-1.3-0.1-2 0s-1.2 0.4-1.8 0.4-0.6 0.9 0 0.9 1.1-0.2 1.6-0.3c0.7-0.2 1.4-0.1 2.2-0.1 0.6 0.1 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-orange"
						d="m35 4.5c-1 0.4-2.3 0.6-3.1 1.4-0.5 0.4 0.2 1 0.7 0.7 0.7-0.7 1.8-0.9 2.7-1.2 0.5-0.3 0.3-1.1-0.3-0.9z">
					</path>
					<path class="fill-orange"
						d="m24 9c-0.6 0.5-1.6 0.6-1.8 1.4-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.3 0.5-0.4 0.7-0.5 0.3-0.2 0.7-0.3 0.9-0.5 0.4-0.4-0.3-1.1-0.7-0.7z">
					</path>
					<path class="fill-orange"
						d="m15.7 15c-0.3 0.5-0.5 0.9-0.7 1.4-0.2 0.6-0.5 1.1-0.7 1.7-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.5 0.4-1 0.6-1.5s0.3-0.9 0.7-1.4-0.4-1-0.8-0.5z">
					</path>
					<path class="fill-orange"
						d="m10.6 23.6c-0.3-0.1-0.5 0.1-0.6 0.3-0.3 0.7-0.5 1.3-0.5 2 0 0.6 0.9 0.6 0.9 0 0-0.7 0.1-1.2 0.4-1.8 0.2-0.1 0-0.4-0.2-0.5z">
					</path>
					<path class="fill-orange" d="m6.4 36.1v2.6c0 0.6 0.9 0.6 0.9 0v-2.6c0-0.6-0.9-0.6-0.9 0z"></path>
					<path class="fill-orange"
						d="m7.1 45.8c-0.1-0.3 0-0.7 0-1 0-0.6-0.9-0.6-0.9 0 0 0.3-0.1 0.7 0 1 0.1 0.4 0.3 0.7 0.2 1-0.1 0.6 0.9 0.6 0.9 0 0.1-0.3-0.1-0.6-0.2-1z">
					</path>
					<path class="fill-orange"
						d="m8.7 57.4c-0.4-0.7-0.6-1.6-1.1-2.2-0.4-0.5-1 0.2-0.7 0.7 0.5 0.6 0.7 1.4 1 2 0.2 0.5 1.1 0 0.8-0.5z">
					</path>
					<path class="fill-orange"
						d="m13.3 63.9c-0.8-0.8-1.4-1.6-2.4-2.2-0.5-0.3-1 0.5-0.5 0.8 0.9 0.5 1.5 1.3 2.2 2 0.5 0.4 1.1-0.2 0.7-0.6z">
					</path>
					<path class="fill-orange"
						d="m20.9 69.2c-0.5-0.1-1-0.4-1.5-0.7-0.5-0.2-0.9-0.5-1.2-0.9-0.4-0.4-1 0.3-0.7 0.7 0.4 0.4 0.9 0.8 1.4 1 0.6 0.3 1.1 0.7 1.8 0.7 0.5 0.2 0.7-0.7 0.2-0.8z">
					</path>
					<path class="fill-orange"
						d="m31.1 72c-0.2 0-0.3-0.1-0.5-0.1-0.2-0.1-0.4 0-0.6-0.1-0.5-0.1-1-0.3-1.3-0.5-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1 0.6 1.5 0.7 0.3 0.1 0.5 0 0.8 0.1s0.5 0.2 0.8 0.2c0.6-0.2 0.6-1.1 0-1z">
					</path>
					<path class="fill-orange"
						d="m36.2 74.5c-0.1 0-0.3-0.2-0.3-0.3-0.1-0.1-0.3-0.3-0.4-0.5-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.9 1.4 1 0.3 0 0.5-0.2 0.5-0.5-0.1-0.2-0.3-0.4-0.5-0.4z">
					</path>
					<path class="fill-orange"
						d="m46.7 80.6c-0.3 0-0.7-0.5-0.9-0.7-0.4-0.3-0.9-0.4-1.3-0.7-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1.1 0.5 1.6 0.9 0.4 0.3 0.7 0.7 1.2 0.7 0.7 0.1 0.7-0.8 0.1-0.9z">
					</path>
					<path class="fill-orange"
						d="m54.3 86.1c-0.4-0.4-0.7-0.8-1-1.2-0.3-0.5-1.2 0-0.8 0.5 0.3 0.4 0.5 0.8 0.9 1.1 0.2 0.2 0.7 0.5 0.7 0.7 0.1 0.6 1 0.6 0.9 0-0.1-0.5-0.3-0.8-0.7-1.1z">
					</path>
					<path class="fill-orange"
						d="m60.3 93.1c0.1 0 0-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.3-0.3-0.5-0.5-0.3-0.3-0.7-0.7-0.7-1.2-0.1-0.6-1-0.3-0.9 0.3s0.5 1.1 0.9 1.5c0.2 0.2 0.4 0.4 0.5 0.7s0.3 0.4 0.6 0.5c0.6 0 0.9-0.8 0.3-1z">
					</path>
					<path class="fill-orange"
						d="m64.9 100.9v-0.9c0-0.6-0.9-0.6-0.9 0 0 0.5-0.1 0.9 0.1 1.4 0.1 0.1 0.1 0.3 0.3 0.3h0.2c0.3 0.1 0.5-0.1 0.6-0.3 0-0.2-0.2-0.4-0.3-0.5z">
					</path>
					<path class="fill-orange"
						d="m66.5 110.5c-0.5-0.4 0.1-1.7 0.1-2.2 0.1-0.6-0.9-0.6-0.9 0-0.1 0.9-0.7 2.2 0.1 2.9 0.5 0.3 1.1-0.3 0.7-0.7z">
					</path>
					<path class="fill-orange"
						d="m64.2 116.7c-0.4 0.7-0.8 1.2-0.9 2-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.7 0.5-1.2 0.8-1.8 0.3-0.5-0.4-1-0.8-0.5z">
					</path>
					<path class="fill-orange"
						d="m59.6 126.6c-0.1-0.3-0.4-0.3-0.7-0.2s-0.6 0.3-0.9 0.4-0.4 0.3-0.3 0.6 0.3 0.3 0.6 0.3c0.4-0.1 0.8-0.3 1.2-0.5 0.2 0 0.2-0.4 0.1-0.6z">
					</path>
					<path class="fill-orange"
						d="m48.5 127.2c-0.8 0.1-1.6 0.2-2.3 0.2-0.6 0-0.6 0.9 0 0.9 0.8 0 1.6-0.1 2.3-0.2 0.6-0.1 0.6-1 0-0.9z">
					</path>
					<path class="fill-orange"
						d="m40.9 126.6c-0.3-0.3-0.5-0.5-0.8-0.7-0.1-0.1-0.3-0.1-0.5-0.2s-0.3-0.1-0.4-0.1c-0.4-0.5-1 0.2-0.7 0.7 0.3 0.3 0.6 0.3 0.9 0.4s0.6 0.4 0.8 0.7c0.4 0.3 1.1-0.3 0.7-0.8z">
					</path>
					<path class="fill-orange"
						d="m38.9 127.3c-0.3-0.5-0.7-0.9-1.1-1.4-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.7 1 1.2s1.1 0 0.8-0.5z">
					</path>
					<path class="fill-orange"
						d="m33.7 119.8c-0.1-0.1-0.3-0.3-0.3-0.5 0-0.6-0.9-0.6-0.9 0 0 0.5 0.3 0.9 0.6 1.2 0.4 0.3 1.1-0.3 0.6-0.7z">
					</path>
					<path class="fill-orange"
						d="m34.2 110c0 0.1-0.3 0.3-0.3 0.3-0.1 0.1-0.3 0.3-0.4 0.5-0.2 0.4-0.3 0.8-0.3 1.2-0.1 0.6 0.9 0.6 0.9 0 0.1-0.5 0.2-0.9 0.5-1.2s0.5-0.5 0.5-1c0.1-0.4-0.8-0.4-0.9 0.2z">
					</path>
					<path class="fill-orange"
						d="m40.8 103.2c-0.5 0.1-0.9 0.5-1.3 0.7-0.5 0.3-0.8 0.7-1 1.2-0.3 0.5 0.5 1 0.8 0.5 0.2-0.4 0.5-0.7 0.8-0.9 0.4-0.3 0.8-0.6 1.2-0.7 0.1 0 0.3-0.2 0.3-0.3s0-0.1 0.1-0.2c0.1-0.5-0.7-0.8-0.9-0.3z">
					</path>
					<path class="fill-orange"
						d="m49.4 100.3c-0.7-0.1-1.4 0.1-2 0.3-0.6 0.1-1 0.3-1.4 0.7-0.4 0.5 0.3 1.1 0.7 0.7s0.8-0.5 1.3-0.5c0.5-0.1 1-0.2 1.6-0.2 0.4-0.1 0.4-1-0.2-1z">
					</path>
					<path class="fill-orange"
						d="m57 100.4c-0.8-0.6-1.7-0.7-2.6-0.8-0.6 0-0.6 0.9 0 0.9 0.7 0 1.4 0.1 2 0.5 0.4 0.4 1-0.3 0.6-0.6z">
					</path>
					<path class="fill-orange"
						d="m66.5 103.9c-1.1-0.3-2.1-0.9-3.3-0.9-0.6 0.1-0.6 1 0 0.9 1.1-0.1 2 0.6 3 0.9 0.6 0 0.8-0.8 0.3-0.9z">
					</path>
					<path class="fill-orange"
						d="m79.7 109.4c-0.6-0.7-1.1-1.4-1.8-2-0.8-0.6-1.6-0.9-2.5-1.3-0.5-0.3-1 0.5-0.5 0.8 0.8 0.4 1.6 0.7 2.3 1.1 0.7 0.5 1.2 1.3 1.8 2 0.5 0.5 1.1-0.1 0.7-0.6z">
					</path>
					<path class="fill-orange"
						d="m87 114.4c-0.6-0.1-1.2-0.7-1.6-1.1s-1 0.2-0.7 0.7c0.6 0.6 1.3 1.3 2.2 1.4 0.7 0 0.7-1 0.1-1z">
					</path>
					<path class="fill-orange"
						d="m97.7 120.6c-0.8-0.8-1.6-1.4-2.6-1.8-0.9-0.4-1.6-0.9-2.6-0.9-0.6 0-0.6 0.9 0 0.9 1.6 0 3.5 1.4 4.5 2.4 0.5 0.5 1.1-0.1 0.7-0.6z">
					</path>
					<path class="fill-orange"
						d="m108.9 123.7c-0.5 0-1-0.3-1.5-0.4-0.4-0.1-1 0.1-1.4-0.1-0.5-0.4-1 0.3-0.7 0.7 0.5 0.5 1 0.4 1.6 0.4 0.7 0 1.2 0.5 1.9 0.4 0.7-0.2 0.8-1.1 0.1-1z">
					</path>
					<path class="fill-orange"
						d="m118.2 126c-0.5 0-1 0.1-1.5 0s-0.9-0.3-1.3-0.4c-0.5-0.2-0.8 0.7-0.3 0.9 1 0.4 2 0.5 3.1 0.5 0.6-0.1 0.6-1 0-1z">
					</path>
					<path class="fill-orange"
						d="m125.5 124c-0.5 0.5-1 0.8-1.7 0.9-0.6 0.1-0.3 1 0.3 0.9 0.8-0.2 1.5-0.6 2.1-1.2 0.4-0.4-0.3-1-0.7-0.6z">
					</path>
					<path class="fill-orange"
						d="m128.7 117c-0.5 0.5-0.4 1.2-0.4 1.8-0.1 0.8-0.6 1.4-0.6 2.3 0 0.6 0.9 0.6 0.9 0 0-0.7 0.4-1.2 0.5-1.8 0.1-0.5-0.1-1.3 0.2-1.6 0.4-0.4-0.2-1.1-0.6-0.7z">
					</path>
					<path class="fill-orange"
						d="m130.1 112c-0.3-0.5-0.1-1.2-0.3-1.8-0.1-0.3-0.1-0.7-0.3-0.9-0.1-0.3-0.3-0.6-0.4-1-0.1-0.6-1-0.3-0.9 0.3 0.1 0.3 0.3 0.6 0.4 0.9 0.1 0.4 0.3 0.8 0.3 1.2 0.2 0.7 0.1 1.2 0.4 1.8 0.2 0.6 1 0.1 0.8-0.5z">
					</path>
					<path class="fill-orange"
						d="m127.7 104.9c-0.2-0.5-0.4-1.1-0.3-1.6 0.1-0.6-0.9-0.6-0.9 0-0.1 0.7 0.2 1.5 0.5 2.2 0.2 0.4 1-0.1 0.7-0.6z">
					</path>
					<path class="fill-orange"
						d="m131 96.8c-0.3 0.3-0.7 0.3-0.9 0.5-0.4 0.2-0.7 0.5-1 0.9-0.4 0.4 0.3 1 0.7 0.7 0.3-0.3 0.6-0.6 0.9-0.8 0.3-0.1 0.7-0.3 1-0.5 0.4-0.5-0.3-1.2-0.7-0.8z">
					</path>
					<path class="fill-orange"
						d="m136.4 96c-0.6 0-0.6 0.9 0 0.9 0.5 0 0.9-0.1 1.4-0.1 0.3 0 0.6 0 0.9 0.1 0.1 0 0.2 0.1 0.3 0.1h0.1c0.1 0.5 0.9 0.5 0.9-0.1-0.1-1.4-2.9-0.9-3.6-0.9z">
					</path>
					<path class="fill-orange"
						d="m144.9 99.2c-0.5-0.3-1 0.5-0.5 0.8 0.7 0.5 2.5 1.1 2.3 2.2-0.1 0.6 0.8 0.9 0.9 0.3 0.3-1.7-1.6-2.5-2.7-3.3z">
					</path>
					<path class="fill-orange"
						d="m156.6 106c-1.5-0.1-2.9-0.5-4.3-1-0.5-0.2-0.8 0.7-0.3 0.9 1.4 0.5 2.9 1 4.6 1 0.6 0 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-orange"
						d="m163 104.9c-0.4 0-0.7-0.1-1.1 0-0.3 0.1-0.7 0.3-1 0.2-0.6-0.1-0.6 0.9 0 0.9 0.3 0 0.7-0.1 1-0.2 0.4-0.1 0.8 0 1.1 0 0.6 0 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-orange"
						d="m168.1 103.9c0.5-0.1 0.5-0.9-0.1-0.9-0.5 0-0.9 0.4-1.2 0.7-0.1 0.2-0.3 0.4-0.3 0.7s0.3 0.5 0.5 0.6c0.3 0.1 0.5-0.1 0.6-0.3 0-0.1 0-0.3-0.1-0.4l0.2-0.2c0.1-0.1 0.1-0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.2-0.1z">
					</path>
				</svg>
			</figure>

			<!-- SVG image decoration -->
			<div class="position-absolute bottom-0 end-0 d-none d-lg-block">
				<img src="assets/images/element/rocket.svg" alt="">
			</div>

			<!-- Include Bootstrap Icons -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

			<!-- Custom Icon Styling -->
			<style>
				.service-icon {
					font-size: 3rem;
					color: #f5a623;
					/* Orange-cream tone */
					background: #fff8ec;
					display: inline-flex;
					align-items: center;
					justify-content: center;
					width: 80px;
					height: 80px;
					border-radius: 50%;
					box-shadow: 0 8px 15px rgba(255, 195, 113, 0.4);
					transition: transform 0.3s ease;
				}

				.service-icon:hover {
					transform: scale(1.1);
					box-shadow: 0 12px 20px rgba(255, 195, 113, 0.6);
				}
			</style>

			<div class="container position-relative py-5">
				<!-- Title -->
				<div class="row">
					<div class="col-lg-8 mb-4">
						<h2><?= $this->lang->line('our_services') ?></h2>
						<p class="mb-0"><?= $this->lang->line('our_services_desc') ?></p>
					</div>
				</div>

				<div class="row g-4 g-lg-5">
					<!-- Education -->
					<div class="col-sm-6 col-xl-3">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<div class="service-icon mb-3">
								<i class="bi bi-book"></i>
							</div>
							<h5 class="mb-2"><a href="#"
									class="stretched-link"><?= $this->lang->line('education') ?></a></h5>
							<p class="text--2 mb-2"><?= $this->lang->line('education_desc') ?></p>
						</div>
					</div>

					<!-- Solution -->
					<div class="col-sm-6 col-xl-3">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<div class="service-icon mb-3">
								<i class="bi bi-lightbulb"></i>
							</div>
							<h5 class="mb-2"><a href="#" class="stretched-link"><?= $this->lang->line('solution') ?></a>
							</h5>
							<p class="text--2 mb-2"><?= $this->lang->line('solution_desc') ?></p>
						</div>
					</div>

					<!-- Innovation -->
					<div class="col-sm-6 col-xl-3">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<div class="service-icon mb-3">
								<i class="bi bi-cpu"></i>
							</div>
							<h5 class="mb-2"><a href="#"
									class="stretched-link"><?= $this->lang->line('innovation') ?></a></h5>
							<p class="text--2 mb-2"><?= $this->lang->line('innovation_desc') ?></p>
						</div>
					</div>

					<!-- Production -->
					<div class="col-sm-6 col-xl-3">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<div class="service-icon mb-3">
								<i class="bi bi-gear-fill"></i>
							</div>
							<h5 class="mb-2"><a href="#"
									class="stretched-link"><?= $this->lang->line('production') ?></a></h5>
							<p class="text--2 mb-2"><?= $this->lang->line('production_desc') ?></p>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- =======================
Course END -->


		<!-- =======================
Video START -->
		<section class="pt-0 pt-lg-5">
			<div class="container">

				<!-- Title and SVG START -->


				<div class="col-md-8 text-center mx-auto">
					<h1><?= $this->lang->line('coconut_fiber_processing') ?></h1>
					<p><?= $this->lang->line('coconut_fiber_processing_desc') ?></p>
					<div class="card card-body shadow p-2">
						<div class="position-relative">
							<!-- Image -->
							<img src="https://img.youtube.com/vi/uOZokZWQWy0/hqdefault.jpg" class="card-img rounded-2"
								alt="...">
							<div class="card-img-overlay">
								<!-- Video link -->
								<div class="position-absolute top-50 start-50 translate-middle">
									<a href="https://www.youtube.com/watch?v=uOZokZWQWy0"
										class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox=""
										data-gallery="video-tour">
										<i class="fas fa-play"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Optional: Direct embed version -->
					<!-- 
				<div class="ratio ratio-16x9 mt-3">
					<iframe src="https://www.youtube.com/embed/uOZokZWQWy0?si=gT99XKekWNDniEbo" title="YouTube video player" allowfullscreen></iframe>
				</div>
				-->
				</div>
			</div>
			</div>
		</section>
		<section class="py-4">
			<div class="container px-xl-5 px-xxl-5 px-lg-5 px-4">
				<!-- Padding lebih sempit, tapi tetap responsif -->
				<div class="row gx-2 gy-3 justify-content-center">

					<!-- Item 1 -->
					<div class="col-11 col-sm-5 col-lg-3">
						<div
							class="d-flex justify-content-center align-items-center py-2 px-2 rounded-3 border shadow-sm">
							<div class="bg-circle me-3">
								<i class="fas fa-truck-loading icon-style"></i>
							</div>
							<div>
								<h4 class="fw-bold text-brown mb-1">
									<span class="counter" data-target="108">0</span>+
								</h4>
								<p class="mb-0 text-brown small">Pemasok</p>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="col-11 col-sm-5 col-lg-3">
						<div
							class="d-flex justify-content-center align-items-center py-2 px-2 rounded-3 border shadow-sm">
							<div class="bg-circle me-3">
								<i class="fas fa-handshake icon-style"></i>
							</div>
							<div>
								<h4 class="fw-bold text-brown mb-1">
									<span class="counter" data-target="200">0</span>+
								</h4>
								<p class="mb-0 text-brown small">Transaksi</p>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-11 col-sm-5 col-lg-3">
						<div
							class="d-flex justify-content-center align-items-center py-2 px-2 rounded-3 border shadow-sm">
							<div class="bg-circle me-3">
								<i class="fas fa-box-open icon-style"></i>
							</div>
							<div>
								<h4 class="fw-bold text-brown mb-1">
									<span class="counter" data-target="31">0</span>+
								</h4>
								<p class="mb-0 text-brown small">Produk</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

		<!-- Style -->
		<style>
			.bg-circle {
				background-color: #e8d9c9;
				border-radius: 50%;
				width: 64px;
				height: 64px;
				display: flex;
				align-items: center;
				justify-content: center;
			}

			.icon-style {
				font-size: 32px;
				/* Icon lebih besar */
				color: #6e4b2a;
			}

			.text-brown {
				color: #6e4b2a;
			}
		</style>

		<!-- JavaScript Animasi Counter -->
		<script>
			document.addEventListener('DOMContentLoaded', () => {
				const counters = document.querySelectorAll('.counter');

				counters.forEach(counter => {
					const updateCount = () => {
						const target = +counter.getAttribute('data-target');
						let count = +counter.innerText;

						const speed = 20;
						const increment = Math.ceil(target / speed);

						if (count < target) {
							counter.innerText = count + increment > target ? target : count + increment;
							setTimeout(updateCount, 30);
						} else {
							counter.innerText = target;
						}
					};

					updateCount();
				});
			});
		</script>




		<!-- =======================
Video divider START -->
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
					<path class="fill-orange"
						d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-50 translate-middle-x ms-n9 mb-5">
				<svg width="23px" height="23px">
					<path class="fill-warning"
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
						<h2 class="h1">Supplier <span class="text-warning">Binco Ran Nusantara </span> tersebar di
							seluruh Indonesia.</h2>
					</div>

					<div class="col-lg-7 position-relative mt-4 mt-lg-0">
						<!-- Image -->
						<img src="<?= base_url('assets/fotobin/')?>location.png" class=" " alt="">
						<div class="position-absolute top-50 start-50 translate-middle">
							<!-- Video link -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Video divider END -->





		<!-- =======================
Top Listed START -->



	<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 mx-auto text-center">
                <h2 class="fs-1"><?= $this->lang->line('post_title'); ?></h2>
                <p class="mb-0"><?= $this->lang->line('post_subtitle'); ?></p>
            </div>
        </div>

        <?php if (!empty($tiktok_videos)) : ?>
        <div class="row">
            <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                <div class="tiny-slider-inner pb-2" 
                    data-autoplay="true" 
                    data-arrow="true" 
                    data-edge="2" 
                    data-dots="false" 
                    data-items="3" 
                    data-items-lg="3" 
                    data-items-md="2" 
                    data-items-xs="1">

                    <?php foreach ($tiktok_videos as $video) : ?>
                        <?php
                            preg_match('/video\/(\d+)/', $video['video_url'], $match);
                            $video_id = $match[1] ?? null;
                        ?>

                        <?php if ($video_id) : ?>
                            <div class="px-2 mb-4"> 
                                <blockquote class="tiktok-embed" cite="<?= $video['video_url']; ?>"
                                    data-video-id="<?= $video_id; ?>" 
                                    style="max-width: 100%; min-width: 325px;">
                                    <section></section>
                                </blockquote>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>        
        </div>

        <script async src="https://www.tiktok.com/embed.js"></script>
        <?php endif; ?>
    </div>
</section>


		<!-- Tambahkan CSS khusus -->
		<style>
			.video-slide {
				box-sizing: border-box;
			}

			.tns-item {
				display: flex;
				justify-content: center;
			}
			.icon-square-hover {
	width: 64px;
	height: 64px;
	border-radius: 0.5rem;
	opacity: 1; /* kalau mau selalu tampil, ubah ke 1 */
	transition: opacity 0.3s ease;
	font-size: 1.5rem; /* lebih besar */
}

		</style>

		<!-- =======================
Top Listed END -->
		<!-- =======================
Trending course START -->
<style>
.card-product {
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #e0e0e0;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    position: relative;
}

.card-product:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.1);
}

.card-product .card-img-top {
    aspect-ratio: 4 / 3;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.card-product:hover .card-img-top {
    transform: scale(1.05);
}

.card-product .badge-top {
    position: absolute;
    top: 15px;
    left: 15px;
    background: linear-gradient(135deg, #ffd700, #ffb800);
    color: #000;
    padding: 6px 12px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 0.75rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.card-product .card-body {
    padding: 1.4rem;
}

.card-product .card-title a {
    font-size: 1.2rem;
    font-weight: bold;
    color: #222;
    text-decoration: none;
    transition: color 0.3s ease;
}

.card-product .card-title a:hover {
    color: #007bff;
}

.card-product .card-text {
    color: #555;
    font-size: 0.95rem;
    margin-top: 0.5rem;
}

</style>
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
						<div class="card card-product shadow-hover overflow-hidden bg-transparent">
							<div class="position-relative">
								<!-- Image -->
								<img class="card-img-top" src="<?= base_url('assets/fotobin/cocobristle.png') ?>"
									alt="Card image">
							</div>
							<!-- Card body -->
							<div class="card-body">
								<h5 class="card-title"><a href="#"><?= $this->lang->line('cocobristle_title') ?></a>
								</h5>
								<p class="mb-0"><?= $this->lang->line('cocobristle_description') ?><br> ‎<br>‎  </p>
								<hr>
							</div>
						</div>
					</div>
					<!-- Card END -->

					<!-- Card START -->
					<div class="col-md-6 col-xl-4">
						<div class="card card-product shadow-hover overflow-hidden bg-transparent">
							<div class="position-relative">
								<!-- Image -->
								<img class="card-img-top" src="<?= base_url('assets/fotobin/cocofiber_detail.png') ?>"
									alt="Card image">
							</div>
							<!-- Card body -->
							<div class="card-body">
								<h5 class="card-title"><a href="#"><?= $this->lang->line('cocofiber_title') ?></a></h5>
								<p class="mb-0"><?= $this->lang->line('cocofiber_description') ?><br>‎ </p>
								<hr>
							</div>
						</div>
					</div>
					<!-- Card END -->

					<!-- Card START -->
					<div class="col-md-6 col-xl-4">
						<div class="card card-product shadow-hover overflow-hidden bg-transparent">
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
<style>
/* Ukuran padding dan font dalam card */
.card.p-2 {
	padding: 0.5rem !important;
}

.card.p-2 .card-body {
	padding: 0.75rem 1rem;
}

.card.p-2 .card-title {
	font-size: 0.95rem;
	font-weight: 600;
	margin-bottom: 0.4rem;
}

.card.p-2 p {
	font-size: 0.85rem;
	line-height: 1.3;
	color: #666;
	margin-bottom: 0.3rem;
}

/* Gambar aspect ratio lebih ramping */
.card.p-2 .card-img-top {
	aspect-ratio: 4 / 5;
	object-fit: cover;
	border-radius: 8px 8px 0 0;
	transition: transform 0.3s ease;
}

/* Hover gambar zoom */
.card.p-2:hover .card-img-top {
	transform: scale(1.12);
}

/* Hover icon */
.card.p-2 .card-img-overlay a {
	width: 38px;
	height: 38px;
	font-size: 0.9rem;
	background-color: rgba(0, 0, 0, 0.4);
	transition: all 0.3s ease;
}

.card.p-2 .card-img-overlay a:hover {
	background-color: rgba(0, 0, 0, 0.7);
}

/* Shadow lebih ringan */
.card.p-2.shadow {
	box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08) !important;
}

</style>
		<section class="pt-0 pt-md-5">
			<div class="container">
				<!-- Title -->
				<div class="row">
					<div class="col-lg-8 mb-4">
						<h2 class="mb-0"><?= $this->lang->line('produk_pt_title') ?> <span
								class="text-warning"><?= $this->lang->line('produk_pt_titlee') ?></span>
							<?= $this->lang->line('produk_pt_titleee') ?></h2>
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
									<!-- Ambil hanya foto pertama -->
									<?php 
										$firstFoto = !empty($uu['fotos']) && isset($uu['fotos'][0]['foto']) ? $uu['fotos'][0]['foto'] : 'default.jpg'; 
									?>
									<img src="<?= base_url('assets/upload/konten/') . $firstFoto ?>"
										class="card-img-top" alt="course image" style="aspect-ratio: 4 / 5; object-fit: cover;">

								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" 
											class="d-flex justify-content-center align-items-center border border-white rounded p-3 text-white text-decoration-none"
											title="Lihat Detail">
												<i class="fas fa-box fa-lg"></i>
										</a>
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
					<?php } ?>
				</div>

				<!-- Button -->
				<div class="text-center mt-5">
					<a href="<?= base_url('home/blog') ?>"
						class="btn btn-primary-soft mb-0"><?= $this->lang->line('semua_produk') ?></a>
				</div>
			</div>
		</section>
		<!-- =======================
Trending courses END -->




	</main>
	<style>
		/* Floating Button (Selalu terlihat, untuk membuka form) */
		#whatsapp-floating-button {
			position: fixed;
			bottom: 20px;
			right: 20px;
			z-index: 1000;
			/* Di atas elemen lain */
			background-color: #25D366;
			/* WhatsApp Green */
			color: white;
			border-radius: 50%;
			width: 60px;
			height: 60px;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 2.5rem;
			/* Ukuran ikon WA */
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
			cursor: pointer;
			transition: all 0.3s ease;
			/* Efek transisi */
		}

		#whatsapp-floating-button:hover {
			transform: scale(1.05);
		}

		/* WhatsApp Chat Form (Tersembunyi secara default) */
		#whatsappChatForm {
			position: fixed;
			bottom: 20px;
			right: 20px;
			z-index: 1001;
			/* Di atas floating button */
			background-color: #f8f9fa;
			/* Latar belakang cerah */
			border: 1px solid #dee2e6;
			border-radius: 10px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
			padding: 15px;
			width: 320px;
			/* Lebar standar */
			max-width: calc(100% - 40px);
			/* Maks lebar di mobile */
			display: none;
			/* Sembunyikan secara default */
			flex-direction: column;
			gap: 10px;
			transform: translateY(20px);
			/* Mulai sedikit di bawah */
			opacity: 0;
			/* Mulai transparan */
			transition: all 0.3s ease-out;
			/* Transisi untuk muncul */
		}

		#whatsappChatForm.show {
			display: flex;
			/* Tampilkan saat ada kelas 'show' */
			transform: translateY(0);
			/* Geser ke posisi normal */
			opacity: 1;
			/* Buat terlihat */
		}

		/* Header dalam form */
		#whatsappChatForm .whatsapp-header {
			background-color: #075E54;
			/* Dark WhatsApp Green */
			color: white;
			padding: 10px;
			border-radius: 8px 8px 0 0;
			/* Rounded top corners */
			margin: -15px -15px 15px -15px;
			/* Sesuaikan padding */
			display: flex;
			align-items: center;
			justify-content: space-between;
			/* Untuk tombol close */
		}

		#whatsappChatForm .whatsapp-header .whatsapp-icon-circle {
			background-color: white;
			color: #075E54;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 1.5rem;
			margin-right: 10px;
		}

		/* Close Button dalam form */
		#whatsappChatForm .close-btn {
			background: none;
			border: none;
			color: white;
			font-size: 1.5rem;
			cursor: pointer;
			padding: 0;
			line-height: 1;
			/* Pastikan ikon tidak terlalu besar */
			opacity: 0.7;
			/* Sedikit transparan */
			transition: opacity 0.2s ease;
		}

		#whatsappChatForm .close-btn:hover {
			opacity: 1;
		}

		/* Info di dalam header */
		#whatsappChatForm .header-info h6 {
			margin-bottom: 2px;
			font-weight: bold;
		}

		#whatsappChatForm .header-info span {
			font-size: 0.8rem;
		}

		/* Input pesan */
		#whatsappChatForm .form-control-sm {
			border-radius: 0.25rem;
		}

		/* Tombol Kirim */
		#whatsappChatForm .btn-whatsapp-send {
			background-color: #25D366;
			/* WhatsApp Green */
			border-color: #25D366;
			color: white;
			font-weight: bold;
			transition: background-color 0.2s ease;
		}

		#whatsappChatForm .btn-whatsapp-send:hover {
			background-color: #1DA851;
			/* Darker green on hover */
			border-color: #1DA851;
		}

		/* Responsif untuk Mobile (jika perlu penyesuaian lebih lanjut) */
		@media (max-width: 576px) {

			/* Extra small devices (phones) */
			#whatsappChatForm {
				width: calc(100% - 30px);
				/* Hampir selebar layar, dengan padding */
				bottom: 15px;
				right: 15px;
				left: 15px;
				/* Pusatkan */
				max-height: 80vh;
				/* Agar tidak terlalu tinggi di layar kecil */
				overflow-y: auto;
				/* Jika kontennya panjang */
			}

			#whatsapp-floating-button {
				width: 50px;
				height: 50px;
				font-size: 2rem;
				bottom: 15px;
				right: 15px;
			}
		}
	</style>
	<div id="whatsapp-floating-button">
		<i class="fab fa-whatsapp"></i>
	</div>

	<div id="whatsappChatForm">
		<div class="whatsapp-header">
			<div class="d-flex align-items-center">
				<div class="whatsapp-icon-circle">
					<i class="fab fa-whatsapp"></i>
				</div>
				<div class="header-info">
					<h6 class="mb-0 text-white">Hubungi Kami</h6>
					<span class="small"><i class="fas fa-circle fw-bold text-success small me-1"></i>Online</span>
				</div>
			</div>
			<button type="button" class="close-btn" id="closeChatFormButton" aria-label="Close">
				<i class="bi bi-x-lg"></i>
			</button>
		</div>

		<p class="mb-2 small text-secondary">Ketik pesan Anda di bawah dan kami akan merespon melalui WhatsApp.</p>

		<div class="mb-3">
			<input type="text" class="form-control form-control-sm" id="whatsappMessageInput"
				placeholder="Tulis pesan Anda di sini...">
		</div>

		<div>
			<button type="button" class="btn btn-whatsapp-send w-100" id="sendWhatsappMessageButton">
				<i class="fab fa-whatsapp me-2"></i> Kirim Pesan
			</button>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const whatsappFloatingButton = document.getElementById('whatsapp-floating-button');
			const whatsappChatForm = document.getElementById('whatsappChatForm');
			const closeChatFormButton = document.getElementById('closeChatFormButton');
			const whatsappMessageInput = document.getElementById('whatsappMessageInput');
			const sendWhatsappMessageButton = document.getElementById('sendWhatsappMessageButton');

			// WAJIB DIGANTI: Konfigurasi Nomor WhatsApp Anda
			// Ganti dengan nomor WhatsApp Anda, termasuk kode negara, tanpa tanda '+' atau spasi.
			// Contoh: Jika nomor Anda +62 812 3456 7890, maka tulis '6281234567890'
			const phoneNumber = '<?= $konfig->whatsapp; ?>'; // <-- GANTI DENGAN NOMOR ANDA

			// Event Listener untuk Floating Button (membuka form chat)
			if (whatsappFloatingButton) {
				whatsappFloatingButton.addEventListener('click', function () {
					whatsappChatForm.classList.add('show'); // Menampilkan form
					whatsappFloatingButton.style.display = 'none'; // Sembunyikan floating button
					console.log("Floating button diklik, form ditampilkan.");
				});
			}

			// Event Listener untuk Tombol Tutup (menutup form chat)
			if (closeChatFormButton) {
				closeChatFormButton.addEventListener('click', function () {
					whatsappChatForm.classList.remove('show'); // Menyembunyikan form
					whatsappFloatingButton.style.display = 'flex'; // Tampilkan kembali floating button
					console.log("Tombol close diklik, form disembunyikan.");
				});
			}

			// Event Listener untuk Tombol Kirim Pesan WhatsApp
			if (sendWhatsappMessageButton) {
				sendWhatsappMessageButton.addEventListener('click', function () {
					let message = whatsappMessageInput.value.trim(); // Dapatkan pesan dari input

					if (message === '') {
						message =
							"Halo, saya ingin bertanya tentang layanan Anda."; // Pesan default jika kosong
					}

					const encodedMessage = encodeURIComponent(message);
					const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

					console.log("Membuka URL WhatsApp:", whatsappUrl);
					window.open(whatsappUrl, '_blank'); // Buka di tab baru

					whatsappMessageInput.value = ''; // Kosongkan input
					whatsappChatForm.classList.remove('show'); // Sembunyikan form setelah mengirim
					whatsappFloatingButton.style.display = 'flex'; // Tampilkan kembali floating button
				});
			} else {
				console.error("Elemen tombol 'sendWhatsappMessageButton' tidak ditemukan.");
			}
		});
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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


</html>