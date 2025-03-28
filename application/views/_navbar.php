<nav class="navbar navbar-default" id="mainNav">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="logo">
            <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                <img src="<?= base_url('assets/fotobin/')?>logo_text_right.png" alt=""
                    style="width: 250px; height: auto;">
            </a>
        </div>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="<?= ($this->uri->segment(1) == 'home' && $this->uri->segment(2) == '') ? 'active' : '' ?>">
                <a href="<?= base_url('home') ?>">Home</a>
            </li>
            <li class="<?= ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">
                <a href="<?= base_url('home#about') ?>">About us</a>
            </li>
            <li class="<?= ($this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'galeri') ? 'active' : '' ?>">
                <a href="<?= base_url('home/galeri/') ?>">Gallery</a>
            </li>
            <li class="<?= ($this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'blog') ? 'active' : '' ?>">
                <a href="<?= base_url('home/blog/') ?>">Produk</a>
            </li>
            <li class="<?= ($this->uri->segment(1) == 'contact') ? 'active' : '' ?>">
                <a href="<?= base_url('home#footer') ?>">Contact us</a>
            </li>
        </ul>
    </div>
    <!-- end nav-collapse -->
</nav>
