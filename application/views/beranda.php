<?php require_once('_css.php')?>

<body>
    
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
	


    <div id="banner" class="banner full-screen-mode parallax">
        <?php foreach ($caraousel as $aa) { ?>

            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ">
            <img src="<?= base_url('assets/upload/caraousel/') . $aa['foto'] ?>" alt="Background" 
                style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -2;">
            <!-- Overlay Hitam -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;"></div>
        </div>
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell" style="position: relative; display: inline-block;">
                           

                            <h1 style="position: relative; z-index: 1; margin-bottom: 30px;"><?= $aa['judul'] ?></h1>
                            <h2 id="typing-text" style="position: relative; z-index: 1; color: #fff; font-size: 40px; font-weight: bold; margin-bottom: 20px;">
                            </h2>

                            <a href="#about"> 
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
        <?php } ?>

    </div>
    <!-- end banner -->


    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title">Pengolahan Serabut Kelapa Menjadi Produk</h2>
                        <p class="title-caption">
                            Yuk, lihat bagaimana proses pengolahan serabut kelapa menjadi sebuah produk! 
                            Tonton video di bawah ini untuk mengetahui lebih lanjut.
                        </p>
                    </div>

                    <!-- Wrapper responsif untuk video -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/cs9JtenT574?autoplay=1" 
                            title="CARA OLAH LIMBAH KELAPA JADI COCOBRISTLE" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>



    


    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Kami memiliki tiga produk utama
					</h2>
                        <p class="title-caption text-center">Ketiga produk ini memiliki nilai guna tinggi dan mendukung pemanfaatan limbah kelapa</p>
                    </div>
                    <div class="team-box">

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url('assets/fotobin/cocobristle.png') ?>" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Cocobristle </h3>
                                        <p>Serat inti dari sabut kelapa yang kuat dan serbaguna.</p>
                                        <ul class="team-social">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url('assets/fotobin/cocofiber_detail.png') ?>" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Cocofiber </h3>
                                        <p>Serat panjang dari sabut kelapa yang berwarna kuning keemasan atau coklat, banyak digunakan untuk berbagai keperluan.</p>
                                        <ul class="team-social">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="<?= base_url('assets/fotobin/cocohusk.png') ?>" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Cocopeat </h3>
                                        <p>Serbuk sabut kelapa yang digunakan sebagai media tanam organik dengan daya serap air tinggi, membantu mengurangi penggunaan tanah.</p>
                                        <ul class="team-social">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end team-box -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->

   
    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title">About Us</h2>
                        <h3>PT BINCO RAN NUSANTARA</h3>
                        
                        <p>PT BINCO RAN NUSANTARA mengolah serabut kelapa menjadi tiga jenis bahan utama: Cocobristel, Cocofiber, dan Cocopeat. Dari bahan-bahan ini, lahirlah berbagai produk kreatif yang tidak hanya bermanfaat dalam kehidupan sehari-hari tetapi juga memiliki nilai estetika.</p>
                        
                        <p>Beberapa produk yang dihasilkan antara lain Cocopot, Cocomest, Cocosheet, Coconet, Cocorope, Sapuku, dan Kuasku. Produk-produk ini memiliki berbagai kegunaan, mulai dari kebutuhan rumah tangga hingga dekorasi yang ramah lingkungan.</p>
                        
                        <p>Dengan mengutamakan inovasi dan keberlanjutan, PT BINCO RAN NUSANTARA berkomitmen untuk menghadirkan produk berkualitas tinggi yang tidak hanya fungsional tetapi juga mendukung gaya hidup hijau.</p>
                    </div>

                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="<?= base_url('assets/fotobin/cocobristle.png') ?>" alt="About Main Image" width="410" height="auto">
                            <img class="about-inset" src="<?= base_url('assets/fotobin/cocohusk_detail.png') ?>" alt="About Inset Image" width="160" height="auto">
                        </div>
                    </div>
                </div>

                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- end gallery-main -->

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="block-title text-center">Produk PT Binco Ran Nusantara</h2>
                </h2>
                        <p class="title-caption text-center">Berbagai produk kami yang dihasilkan dari pemanfaatan limbah kelapa</p>
                    </div>
            </div>

            <?php $count = 0; foreach (array_slice($konten, 0, 4) as $uu) { ?>
                <div class="col-md-6 col-sm-6 d-flex align-items-stretch">
                    <div class="blog-box clearfix w-100">
                        <div class="wow fadeIn w-100" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="blog-block h-100 d-flex flex-column">
                                <div class="blog-img-box flex-shrink-0" style="height: 250px; overflow: hidden;">
                                    <img src="<?= base_url('assets/upload/konten/') . $uu['foto'] ?>" class="w-100 h-100" style="object-fit: cover;" alt="" />
                                    <div class="overlay">
                                        <a href="<?= base_url('home/blog') ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="blog-dit text-center flex-grow-1">
                                    <p><span><?= $uu['tanggal'] ?></span></p>
                                    <h2><?= $uu['judul'] ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $count++; if ($count % 2 == 0) { ?>
                    <div class="w-100"></div> <!-- Break row setiap 2 item -->
                <?php } ?>
            <?php } ?>

            <div class="col-lg-12 text-center">
                <div class="blog-btn-v">
                    <a class="hvr-underline-from-center" href="<?= base_url('home/blog/') ?>">Produk Lain</a>
                </div>
            </div>
        </div>
    </div>
</div>


    
    <!-- end pricing-main -->

    
    <!-- end reservations-main -->

    <?php require_once('_footer.php')?>


    
    <!-- ALL JS FILES -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let text = "<?= addslashes($aa['deskripsi']) ?>"; // Ambil teks dari PHP
        let index = 0;
        let speed = 100; // Kecepatan ketikan (ms)
        let typingText = document.getElementById("typing-text");

        function typeWriter() {
            if (index < text.length) {
                typingText.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            }
        }

        typeWriter(); // Jalankan animasi ketik
    });
</script>
    <?php require_once('_js.php')?>
    
</script>

</body>

</html>