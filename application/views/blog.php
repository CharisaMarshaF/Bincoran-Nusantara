<?php require_once('_css.php')?>
<style>
    @media (min-width: 768px) {
    .row-gap-laptop {
        row-gap: 30px;
    }
}

</style>
<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <?php require_once('_navbar.php')?>

                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="block-title">Produk PT Binco Ran Nusantara</h2>
                <p class="title-caption">Berbagai produk kami yang dihasilkan dari pemanfaatan limbah kelapa</p>
            </div>
        </div>

        <!-- Tambahkan class "gy-4" untuk memberi jarak antar baris -->
        <div class="row gy-4" style="row-gap: 30px;">
                <?php foreach ($konten as $ss) { ?>
            
                <div class="col-md-4 col-sm-6">
                    <div class="sf-team">
                        <div class="thumb">
                            <a href="#"><img src="<?= base_url('assets/upload/konten/') . $ss['foto'] ?>" alt=""></a>
                        </div>
                        <div class="text-col">
                            <h3><?= $ss['judul'] ?></h3>
                            <p><?= $ss['keterangan'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

    
    
</div>
<?php require_once('_footer.php')?>

<?php require_once('_js.php')?>

