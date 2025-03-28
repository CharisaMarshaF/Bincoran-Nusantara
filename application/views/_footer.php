<div id="footer" class="footer-main">
        
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row ">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="<?= base_url('assets/fotobin/')?>logo_text_right.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-box-a">
                                <h3><?= $konfig->judul_website; ?></h3>
                                <p><?= $konfig->profil_website; ?></p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="<?= $konfig->facebook; ?>">
                                            <div class="social-circle-border"><i class="fa-brands   fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $konfig->instagram; ?>">
                                            <div class="social-circle-border"><i class="fa-brands  fa-instagram"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $konfig->youtube; ?>">
                                            <div class="social-circle-border"><i class="fa-brands  fa-youtube"></i></div>
                                        </>
                                    </li>
                                    <li>
                                        <a href="<?= $konfig->tiktok; ?>">
                                            <div class="social-circle-border"><i class="fa-brands fa-tiktok"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?= $konfig->whatsapp; ?>">
                                            <div class="social-circle-border"><i class="fa-brands  fa-whatsapp"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-box-b">
                                <h3>Produk</h3>
                                <?php $count = 0; foreach (array_slice($konten, 0, 4) as $uu) { ?>

                                <ul>

                                    <li><a href="<?= base_url("home/blog") ?>" ><?= $uu['judul'] ?></a></li>
                                </ul>
                                <?php $count++; } ?>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span><?= $konfig->alamat; ?></span>
                                </p>
                                
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span><a href="<?= $konfig->whatsapp; ?>">6281221231117</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; PT BINCO RAN NUSANTARA <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->