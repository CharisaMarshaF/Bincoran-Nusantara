<!DOCTYPE html>
<html lang="en">

<head>

</head>
<?php require_once('_css.php')?>

<body>

	<?php require_once('_navbar.php')?>

	<main>
		<style>
			/* Custom styles for this page */
			.bg-custom-light {
				/* Lighter background for sections */
				background: linear-gradient(145deg, #f3f2ef, #ffffff);
			}

			.text-gradient-orange {
				/* Gradient for underlines */
				background: linear-gradient(to right, #f6a709, #cf8a05);
			}

			.bg-brown {
				/* Dark brown for circle backgrounds */
				background-color: #6e4b2a;
			}

			.border-warning-custom {
				/* Custom border color for mission boxes */
				border-top-color: #cf8a05 !important;
			}

			/* Adjustments for title spacing and size consistency */
			.section-title {
				font-size: 2.5rem;
				/* Keep title size as is, looks good */
				font-weight: bold;
				color: #343a40;
				/* Dark text for titles */
			}

			.section-underline {
				width: 80px;
				height: 6px;
				border-radius: 50px;
				/* Rounded-pill */
			}

			/* Visi Box Styling */
			.visi-box {
				max-width: 700px;
				/* Keep this max-width for balance */
				border-left: 6px solid #cf8a05;
				padding: 3rem;
				/* Keep consistent padding */
			}

			.visi-icon-circle {
				width: 56px;
				/* Keep size for better proportion */
				height: 56px;
				display: flex;
				align-items: center;
				justify-content: center;
				font-size: 1.8rem;
				/* Keep icon size */
			}

			.visi-text {
				font-size: 1.15rem;
				/* Keep this size for Visi text */
				margin-top: 2rem;
				/* Keep margin-top for text under circle */
			}

			/* Misi Boxes Styling */
			.misi-box {
				padding: 2.5rem;
				/* Keep consistent padding */
				border-top: 4px solid;
				/* Use generic border-top, specific color via border-warning-custom */
				height: 100%;
				/* Ensure all boxes are same height */
			}

			.misi-icon-circle {
				width: 50px;
				/* Keep size for mission boxes */
				height: 50px;
				display: flex;
				align-items: center;
				justify-content: center;
				font-size: 1.5rem;
				/* Keep icon size */
			}

			.misi-text {
				font-size: 1rem;
				/* Keep standard font size for paragraphs */
				margin-top: 2rem;
				/* Keep margin-top for text under circle */
			}

			/* Ensure consistent text color */
			.text-dark {
				color: #343a40 !important;
				/* Force dark text color for all content */
			}

			/* Specific adjustments for Profil text */
			.profil-text p {
				font-size: 1.1rem;
				/* Reduced from 1.25rem (fs-5) to 1.1rem for better readability in paragraphs */
				line-height: 1.7;
				/* Increased line-height for better readability of smaller text */
				margin-bottom: 1rem;
				/* Adjusted bottom margin for paragraphs to reduce vertical space */
			}

			/* Responsive adjustments */
			@media (max-width: 768px) {
				.section-title {
					font-size: 2rem;
				}

				.visi-box {
					padding: 2rem;
				}

				.visi-icon-circle {
					width: 50px;
					height: 50px;
					font-size: 1.5rem;
				}

				.visi-text {
					font-size: 1rem;
				}

				.misi-box {
					padding: 1.5rem;
				}

				.misi-icon-circle {
					width: 45px;
					height: 45px;
					font-size: 1.3rem;
				}

				.profil-text p {
					font-size: 1rem;
					/* Further reduce on smaller screens */
				}
			}
		</style>
		<section class=" py-5 ">
			<div class="container">
				<div class="text-center mb-5">
					<h2 class="section-title"><?= $this->lang->line('profile') ?></h2>
					<div class="mx-auto mt-2 section-underline text-gradient-orange"></div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-11 profil-text">
						<p class="text-dark"><?= $this->lang->line('profile_text_1') ?></p>
						<p class="text-dark"><?= $this->lang->line('profile_text_2') ?></p>
						<p class="text-dark"><?= $this->lang->line('profile_text_3') ?></p>
						<p class="text-dark"><?= $this->lang->line('profile_text_4') ?></p>
						<p class="text-dark"><?= $this->lang->line('profile_text_5') ?></p>

					</div>
				</div>
			</div>
		</section>

		<hr class="my-0">
		<section class="py-5 bg-light ">
			<div class="container">
				<div class="text-center mb-5">
					<h2 class="section-title"><?= $this->lang->line('vision') ?></h2>
					<div class="mx-auto mt-2 section-underline text-gradient-orange"></div>
				</div>

				<div class="d-flex justify-content-center mb-5">
					<div class="position-relative shadow rounded-4 bg-white visi-box">
						<div
							class="position-absolute top-0 start-50 translate-middle bg-brown rounded-circle shadow visi-icon-circle">
							<i class="fas fa-bullseye text-white"></i>
						</div>
						<p class="text-center visi-text text-dark"><?= $this->lang->line('vision_text') ?></p>
					</div>
				</div>

				<div class="text-center mb-5">
					<h2 class="section-title"><?= $this->lang->line('mission') ?></h2>
					<div class="mx-auto mt-2 section-underline text-gradient-orange"></div>
				</div>

				<div class="row justify-content-center gy-4">
					<?php for ($i = 1; $i <= 4; $i++): ?>
					<div class="col-md-6 col-lg-3">
						<div
							class="position-relative shadow-sm rounded-4 bg-white misi-box text-center border-warning-custom">
							<div
								class="position-absolute top-0 start-50 translate-middle bg-brown rounded-circle shadow misi-icon-circle">
								<?php
              $icons = ['fa-book-open', 'fa-hands-helping', 'fa-cogs', 'fa-globe-asia'];
              ?>
								<i class="fas <?= $icons[$i - 1] ?> text-white"></i>
							</div>
							<p class="misi-text text-dark"><?= $this->lang->line('mission_' . $i) ?></p>
						</div>
					</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>

		<section class="py-5 ">
			<div class="container">
				<!-- Title -->
				<div class="text-center mb-5">
					<h2 class="fw-bold text-dark"><?= $this->lang->line('struktur') ?></h2>
					<div class="mx-auto mt-2 rounded-pill"
						style="width: 80px; height: 6px; background: linear-gradient(to right, #f6a709, #cf8a05);">
					</div>
				</div>

				<!-- Org Chart -->
				<div class="org-chart">
					<!-- General Manager -->
					<div class="org-node">
						<img src="<?= base_url('assets/fotobin/struktur/')?>arif.png" alt="Arif" />
						<div class="name">Arif Budiyanto</div>
						<div class="title">General Manager</div>
					</div>

					<!-- Project Auditor -->
					<div class="org-branch">
						<div class="org-line-vertical"></div>
						<div class="org-node">
							<img src="<?= base_url('assets/fotobin/struktur/')?>resa.png" alt="Resa" />
							<div class="name">Resa Resiana</div>
							<div class="title">Project Auditor</div>
						</div>

						<div class="org-line-vertical short"></div>
						<div class="org-line-horizontal"></div>

						<!-- Staff -->
						<div class="org-staff">
							<div class="org-node">
								<img src="<?= base_url('assets/fotobin/struktur/')?>nursyam.png" alt="Nursyam" />
								<div class="name">Nursyam Sudin</div>
								<div class="title">Kepala Produksi</div>
							</div>
							<div class="org-node">
								<img src="<?= base_url('assets/fotobin/struktur/')?>eko.png" alt="Eko" />
								<div class="name">Eko Zainudin</div>
								<div class="title">Green House</div>
							</div>
							<div class="org-node">
								<img src="<?= base_url('assets/fotobin/struktur/')?>hendrik.png" alt="Hendrik" />
								<div class="name">Hendrik</div>
								<div class="title">Teknisi</div>
							</div>
							<div class="org-node">
								<img src="<?= base_url('assets/fotobin/struktur/')?>erita.png" alt="Erita" />
								<div class="name">Erita Amelia AW</div>
								<div class="title">Manager Administrasi</div>
							</div>
							<div class="org-node">
								<img src="<?= base_url('assets/fotobin/struktur/')?>rian.png" alt="Tri" />
								<div class="name">Tri Rohmat Arianto</div>
								<div class="title">Digital Marketing</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<style>
			.org-chart {
				display: flex;
				flex-direction: column;
				align-items: center;
				gap: 20px;
			}

			.org-node {
				display: flex;
				flex-direction: column;
				align-items: center;
				text-align: center;
				background: #fff;
				padding: 10px;
				border-radius: 10px;
				box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
				min-width: 150px;
				position: relative;
			}

			.org-node img {
				width: 90px;
				height: 90px;
				object-fit: cover;
				border-radius: 50%;
				margin-bottom: 8px;
			}

			.name {
				font-weight: bold;
				color: #fff;
				background-color: #6e4b2a;
				padding: 5px 10px;
				border-radius: 5px;
			}

			.title {
				font-size: 0.85rem;
				margin-top: 4px;
				border-top: 1px solid #d9534f;
				padding-top: 4px;
				color: #333;
			}

			.org-branch {
				display: flex;
				flex-direction: column;
				align-items: center;
			}

			.org-line-vertical {
				width: 2px;
				height: 30px;
				background-color: #d9534f;
			}

			.org-line-vertical.short {
				height: 20px;
			}

			.org-line-horizontal {
				width: 100%;
				max-width: 800px;
				height: 2px;
				background-color: #d9534f;
				margin: 10px 0;
			}

			.org-staff {
				display: flex;
				gap: 15px;
				flex-wrap: wrap;
				justify-content: center;
			}

			@media (max-width: 768px) {
				.org-staff {
					flex-direction: column;
				}
			}
		</style>


	</main>

	<?php require_once('_footer.php')?>

	<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<?php require_once('_js.php')?>

</body>

</html>