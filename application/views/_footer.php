<footer class="pt-0 bg-blue rounded-4 position-relative mx-2 mx-md-4 mb-3" id="footer">
			<!-- SVG decoration for curve -->
			<figure class="mb-0">
				<svg class="fill-body rotate-180" width="100%" height="150" viewBox="0 0 500 150"
					preserveAspectRatio="none">
					<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
				</svg>
			</figure>

			<div class="container">
				<div class="row mx-auto">
					<div class="col-lg-6 mx-auto text-center my-5">
						<!-- Logo -->
						<img class="mx-auto h-100px" src="<?= base_url('assets/fotobin/')?>logowh.png" alt="logo">
						<p class="mt-3 text-white"><?= $konfig->profil_website; ?></</p> <!-- Links -->
							<ul class="nav justify-content-center text-primary-hover mt-3 mt-md-0">
								<li class="nav-item"><a class="nav-link text-white" href="<?= base_url('home#about') ?>"><?= $this->lang->line('about_us') ?></a></li>
								<li class="nav-item"><a class="nav-link text-white" href="<?= base_url('home/galeri/') ?>"><?= $this->lang->line('gallery') ?></a></li>
								<li class="nav-item"><a class="nav-link text-white" href="<?= base_url('home/blog/') ?>"><?= $this->lang->line('produk') ?></a></li>
								<li class="nav-item"><a class="nav-link text-white" href="<?= base_url('home#footer') ?>"><?= $this->lang->line('contact_us') ?></a></li>
								
							</ul>
							<!-- Social media button -->
							<ul class="list-inline mt-3 mb-0">
								<li class="list-inline-item">
									<a class="btn btn-white btn-sm shadow px-2 text-facebook"
										href="<?= $konfig->facebook; ?>">
										<i class="fab fa-fw fa-facebook-f"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-white btn-sm shadow px-2 text-instagram"
										href="<?= $konfig->instagram; ?>">
										<i class="fab fa-fw fa-instagram"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-white btn-sm shadow px-2 text-youtube"
										href="<?= $konfig->youtube; ?>" target="_blank">
										<i class="fab fa-fw fa-youtube"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-white btn-sm shadow px-2 text-tiktok"
										href="<?= $konfig->tiktok; ?>" target="_blank">
										<i class="fab fa-fw fa-tiktok"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-white btn-sm shadow px-2 text-whatsapp"
										href="<?= $konfig->whatsapp; ?>" target="_blank">
										<i class="fab fa-fw fa-whatsapp"></i>
									</a>
								</li>

							</ul>
							<!-- Bottom footer link -->
							<div class="mt-3 text-white">Copyright &copy; PT BINCO RAN NUSANTARA</div>
					</div>
				</div>
			</div>
		</footer>