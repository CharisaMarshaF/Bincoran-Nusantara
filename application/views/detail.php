
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/shop-product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 06:30:04 GMT -->
<head>

</head>
<?php require_once('_css.php')?>

<body>

<!-- Header START -->
<?php require_once('_navbar.php')?>

<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Page content START -->
<!-- Page content START -->
<section class="pt-5">
	<div class="container" data-sticky-container>
		<div class="row g-4 g-sm-5">

			<!-- Left sidebar START -->
			<div class="col-xl-4">
				<div data-sticky data-margin-top="80" data-sticky-for="992">
					<div class="row justify-content-center">
						<div class="col-md-8 col-xl-12">

							<!-- Card START -->
							<div class="card shadow">
								<!-- Image -->
								<div class="rounded-3">
									<img src="<?= base_url('assets/upload/konten/') . $konten['foto'] ?>" class="card-img-top" alt="<?= $konten['judul'] ?>">
								</div>
			
								<!-- Card body -->
								<div class="card-body pb-3">
									<!-- Buttons and price -->
									<div class="text-center">
										<!-- Optional buttons could go here -->
									</div>
								</div>
							</div>
							<!-- Card END -->

						</div>
					</div> <!-- Row End -->
				</div>
			</div>
			<!-- Left sidebar END -->
				
			<!-- Main content START -->
			<div class="col-xl-8">
			
				<!-- Title -->
				<h1 class="mb-4"><?= $konten['judul'] ?></h1>

				<!-- Content -->
				<h4>Description</h4>
				<p><?= nl2br($konten['keterangan']) ?></p>

				<!-- Additional info -->
				<div class="row mb-3">
					<div class="col-md-6">
						<!-- List START -->
						<!-- <ul class="list-group list-group-borderless">
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="bi fa-fw bi-calendar-fill text-primary me-2"></i>Published date:</span>
								<span class="h6"><?= date('d M Y', strtotime($konten['tanggal'])) ?></span>
							</li>
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="fas fa-fw fa-book text-primary me-2"></i>Page count:</span>
								<span class="h6">180</span>
							</li>
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="fas fa-fw fa-font text-primary me-2"></i>Word count:</span>
								<span class="h6">15879</span>
							</li>
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="bi fa-fw bi-translate text-primary me-2"></i>Language:</span>
								<span class="h6">English</span>
							</li>
						</ul> -->
						<!-- List END -->
					</div>

					<div class="col-md-6">
						<!-- List START -->
						<!-- <ul class="list-group list-group-borderless">
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="bi fa-fw bi-person-circle text-primary me-2"></i>Published by:</span>
								<span class="h6"><?= $konten['penulis'] ?? 'Admin' ?></span>
							</li>
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="bi fa-fw bi-eye-fill text-primary me-2"></i>Visited by:</span>
								<span class="h6"><?= $konten['viewer'] ?? '0' ?></span>
							</li>
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="bi fa-fw bi-bag-fill text-primary me-2"></i>Purchase by:</span>
								<span class="h6">8245</span>
							</li>
							<li class="list-group-item px-0">
								<span class="h6 fw-light"><i class="bi fa-fw bi-star-fill text-primary me-2"></i>Rating/Review:</span>
								<span class="h6">4.5 (568)</span>
							</li>
						</ul> -->
						<!-- List END -->
					</div>
				</div>

				<!-- Book detail END -->
			</div>
			<!-- Main content END -->

		</div> <!-- Row END -->
	</div>
</section>
<!-- Page content END -->

<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<?php require_once('_footer.php')?>

<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<?php require_once('_js.php')?>


</body>

<!-- Mirrored from eduport.webestica.com/shop-product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 06:30:04 GMT -->
</html>