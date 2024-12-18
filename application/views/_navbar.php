<?php 
$menu = $this->uri->uri_string(); 
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span><?= $konfig->judul_website; ?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($menu == 'home'){ echo 'active'; } ?>"><a href="<?= base_url('home') ?>" class="nav-link">Home</a></li>
                <li class="nav-item <?php if($menu == 'home/galeri'){ echo 'active'; } ?>"><a href="<?= base_url('home/galeri/') ?>" class="nav-link">Galeri</a></li>

                <?php foreach ($kategori as $kate){ ?>
                <li class="nav-item <?php if($menu == 'home/kategori/'.$kate['id_kategori']){ echo 'active'; } ?>"><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
                        class="nav-link"><?= $kate['nama_kategori'] ?></a></li>
                <?php } ?>
                <li class="nav-item <?php if($menu == 'home/blog'){ echo 'active'; } ?>"><a href="<?= base_url('home/blog/') ?>" class="nav-link">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>