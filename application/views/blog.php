<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/course-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 06:29:43 GMT -->

<head>
	<?php require_once('_css.php')?>

</head>

<body>

	<!-- Header START -->
	<?php require_once('_navbar.php')?>

	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- =======================
Page Banner START -->
		<section class="py-4">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bg-light p-4 text-center rounded-3">
							<h1 class="m-0">Produk Binco Ran Nusantara</h1>
							<!-- Breadcrumb -->
							<div class="d-flex justify-content-center">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-dots mb-0">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Daftar Produk</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Page Banner END -->

		<!-- =======================
Page content START -->
		<section class="pt-0">
			<div class="container">

				<!-- Filter bar START -->				

				<div class="row mt-3">
					<!-- Main content START -->
					<div class="col-12">

						<!-- Course Grid START -->
						<div class="row g-4">

							<!-- Card item START -->
							<div class="row g-4" id="konten-list">
								<?php foreach ($konten as $uu): ?>
								<div class="col-sm-6 col-lg-4 col-xl-3">
									<div class="card shadow h-100">
										<!-- Image -->
										<img src="<?= base_url('assets/upload/konten/') . $uu['foto'] ?>"
											class="card-img-top" alt="course image">
										<!-- Card body -->
										<div class="card-body pb-0">
											<!-- Title -->
											<h5 class="card-title">
												<a href="<?= base_url('home/detail/' . $uu['slug']) ?>"
													class="stretched-link">
													<?= $uu['judul'] ?>
												</a>
											</h5>
											<hr>
											<p class="mb-0"><?= substr($uu['keterangan'], 0, 100) . '...'; ?>
											</p>
										</div>
										<!-- Card footer -->
										<div class="card-footer pt-0 pb-3">
											<hr>
											<div class="d-flex justify-content-between">
												<span class="h6 fw-light mb-0">
													<i class="fas fa-tag text-success me-2"></i>
													<?= "Rp " . number_format($uu['harga'], 0, ',', '.'); ?>
												</span>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>



						</div>
						<!-- Course Grid END -->

						<!-- Pagination START -->
						<!-- Pagination START -->
						
						<!-- Pagination END -->
					</div>
					<!-- Main content END -->
				</div><!-- Row END -->
			</div>
		</section>
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

<!-- Mirrored from eduport.webestica.com/course-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 06:29:44 GMT -->

</html>