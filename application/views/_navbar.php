<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand" href="index-2.html">
					<img class="light-mode-item navbar-brand-item"
						src="<?= base_url('assets/fotobin/')?>logo_text_right.png" alt="logo">
					<img class="dark-mode-item navbar-brand-item"
						src="<?= base_url('assets/fotobin/')?>logo_text_right.png" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-animation">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>

				<!-- Main navbar START -->
				<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

					<!-- Nav Main menu START -->
					<ul class="navbar-nav navbar-nav-scroll mx-auto">
						<li
							class="<?= ($this->uri->segment(1) == 'home' && $this->uri->segment(2) == '') ? 'active' : '' ?>">
							<a class="nav-link" href="<?= base_url('home') ?>"><?= $this->lang->line('home') ?></a>
						</li>
						<li class="<?= ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">
							<a class="nav-link" href="<?= base_url('home#about') ?>"><?= $this->lang->line('about_us') ?></a>
						</li>
						<li
							class="<?= ($this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'galeri') ? 'active' : '' ?>">
							<a class="nav-link" href="<?= base_url('home/galeri/') ?>"><?= $this->lang->line('gallery') ?></a>
						</li>
						<li
							class="<?= ($this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'blog') ? 'active' : '' ?>">
							<a class="nav-link" href="<?= base_url('home/blog/') ?>"><?= $this->lang->line('produk') ?></a>
						</li>
						<li class="<?= ($this->uri->segment(1) == 'contact') ? 'active' : '' ?>">
							<a class="nav-link" href="<?= base_url('home#footer') ?>"><?= $this->lang->line('contact_us') ?></a>
						</li>

						<!-- Dropdown Language with Flags -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-globe"></i> <?= $this->lang->line('language') ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">
								<a class="dropdown-item" href="<?= base_url('home/set_language/english') ?>">
									<img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg"
										alt="English" style="width: 20px; height: 15px; margin-right: 8px;"> English
								</a>
								<a class="dropdown-item" href="<?= base_url('home/set_language/indonesian') ?>">
									<img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg"
										alt="Indonesian" style="width: 20px; height: 15px; margin-right: 8px;">
									Indonesian
								</a>
							</div>
						</li>

					</ul>

					<!-- Nav Main menu END -->

				</div>
				<!-- Main navbar END -->


			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->