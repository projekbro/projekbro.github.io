<?php
require 'lib/setting.php';
require 'lib/header.php';
require 'lib/navbar.php';


?>
         <style>
                marquee{
                      font-size: 15px;
                            font-weight: 800;
                                  color: #fff;
                                        font-family: sans-serif;
                                              user-select: none;
                                                    width: 95%;
                                                          margin-left: 2%;
                                                                margin-right: 2%;
                                                                      margin-bottom: 2%;
                                                                            margin-top: 2%;
                                                                                  background-color: #512DA8;
                                                                                        padding-top: 2px;
                                                                                              padding-bottom: 2px;
                                                                                                    border-radius: 50px;
                                                                                                          border: 5px solid green;
                                                                                                                box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.2);
                                                                                                                      }
    </style>
<marquee><?php echo $setting_web['info_home'] ;?></marquee>
        <section class="statistic" id="statistic">
            <div class="block">
                <div style="background-image: url(https://i.ibb.co/GRqkLSM/game2.jpg);" class="fixed-bg"></div>
                <div class="restaurant-searching text-center">
                    <div class="restaurant-searching-inner">
                        
                        <div class="funfacts">
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon1.png" alt="fact-icon1" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter"><?php echo $setting_statistik['layanan'] ;?></span></strong>
                                            <h5>Layanan</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon2.png" alt="fact-icon2" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter"><?php echo $setting_statistik['client'] ;?></span></strong>
                                            <h5>Total Client</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon3.png" alt="fact-icon3" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter"><?php echo $setting_statistik['cs'] ;?></span></strong>
                                            <h5>Customer Service</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon4.png" alt="fact-icon4" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter"><?php echo $setting_statistik['project'] ;?></span></strong>
                                            <h5>Total Project Finish</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                        </div><!-- Fun Facts -->
                    </div><!--
                    <img class="left-scooty-mockup" src="https://i.ibb.co/TqRhCxs/logo-coding-removebg-preview.png" alt="restaurant-mockup1.png" itemprop="image" height="150px">

                </div><!-- Restaurant Searching -->
            </div>
        </section>


        <section>
            <div class="block remove-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Mengapa Memilih Kami?</span>
                                    <h2 itemprop="headline"><?php echo $setting_web['nama']; ?></h2>
                                    <p itemprop="description">Semua layanan yang kami hadirkan terjamin kualitasnya dan dikerjakan oleh tim developer yang handal dalam bidangnya.</p>
                                </div>
                            </div>
                            <div class="top-restaurants-wrapper">
                                <ul class="restaurants-wrapper style2">
                                    <li class="wow bounceIn" data-wow-delay="0.2s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="LAYANAN TERBAIK" itemprop="url"><img src="assets/images/resource/top-restaurant1.png" alt="top-restaurant1.png" itemprop="image"></a></div><center><br> <h6>Layanan Terbaik</h6></center></li>
                                    <li class="wow bounceIn" data-wow-delay="0.4s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="LAYANAN BERGARANSI" itemprop="url"><img src="assets/images/resource/top-restaurant2.png" alt="top-restaurant2.png" itemprop="image"></a></div><center><br> <h6>Layanan Bergaransi</h6></center></li>
                                    <li class="wow bounceIn" data-wow-delay="0.6s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="HARGA TRANSPARAN" itemprop="url"><img src="assets/images/resource/top-restaurant3.png" alt="top-restaurant3.png" itemprop="image"></a></div><center><br> <h6>Harga Transparan</h6></center></li>
                                    <li class="wow bounceIn" data-wow-delay="0.8s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="GRATIS KONSULTASI" itemprop="url"><img src="assets/images/resource/top-restaurant4.png" alt="top-restaurant4.png" itemprop="image"></a></div><center><br> <h6>Gratis Konsultasi</h6></center></li>
                                    <li class="wow bounceIn" data-wow-delay="1s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="GRATIS REVISI & CUSTOMIZE" itemprop="url"><img src="assets/images/resource/top-restaurant5.png" alt="top-restaurant5.png" itemprop="image"></a></div><center><br> <h6>Gratis Revisi & Customize</h6></center></li>
                                    <li class="wow bounceIn" data-wow-delay="1.2s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="FULL SUPPORT" itemprop="url"><img src="assets/images/resource/top-restaurant6.png" alt="top-restaurant6.png" itemprop="image"></a></div><center><br> <h6>Full Support</h6></center></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="layanan" id="layanan">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Layanan Fleyvin Code Developer</span>
                                    <h2 itemprop="headline">Pembuatan Website</h2>
                                </div>
                            </div>
                                <div class="row remove-ext5">

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/Jp3Ddd8/pubg.jpg" alt="popular-dish-img1.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Portofolio</a>
                        </h4>
                                                <p itemprop="description">Website Profil/Portofolio Untuk Personal, Bisnis/Perusahaan dan Organisasi.</p>
                                                <span class="price">Rp 6.000 - Rp 105.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>

                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.4s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/Kwh7z6z/ml.jpg" alt="popular-dish-img2.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Landing Page</a>
                        </h4> 
                                                <p itemprop="description">Website Landing Page Untuk Personal, Bisnis/Perusahaan dan Organisasi.</p>
                                                <span class="price">Rp 3.000 - Rp 158.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.4s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/Kwh7z6z/ml.jpg" alt="popular-dish-img2.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Panel SMM, PPOB & TOPUP</a>
                        </h4> 
                                                <p itemprop="description">Website Panel SMM, Website PPOB dan Website TOPUP Game.</p>
                                                <span class="price">Rp 3.000 - Rp 158.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                  
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/cXbwhDh/Free-Fire.png" alt="popular-dish-img3.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Untuk Toko Online/Olshop</a></h4>
                                                <p itemprop="description">Website Informasi, Katalog Produk, Portofolio Bisnis, e-commerce dll.</p>
                                                <span class="price">Rp 2.000 - Rp 102.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/cXbwhDh/Free-Fire.png" alt="popular-dish-img3.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Untuk Toko Offline</a></h4>
                                                <p itemprop="description">Website Informasi, Katalog Produk, Portofolio Bisnis, e-commerce dll.</p>
                                                <span class="price">Rp 2.000 - Rp 102.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>                                    
                                    
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/cXbwhDh/Free-Fire.png" alt="popular-dish-img3.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Untuk Sekolah & Yayasan Pendidikan</a></h4>
                                                <p itemprop="description">Website Informasi, Portofolio Sekolah dan database kebutuhan KBM.</p>
                                                <span class="price">Rp 2.000 - Rp 102.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/cXbwhDh/Free-Fire.png" alt="popular-dish-img3.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Untuk Yayasan, Organisasi & Komunitas</a></h4>
                                                <p itemprop="description">Website Informasi, Portofolio Organisasi/Komunitas, Informasi Event dan Galery Kegiatan Organisasi.</p>
                                                <span class="price">Rp 2.000 - Rp 102.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                    
                                   <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/cXbwhDh/Free-Fire.png" alt="popular-dish-img3.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Web Untuk Berita, Blog & Artikel</a></h4>
                                                <p itemprop="description">Website Berita, Blog dan Artikel.</p>
                                                <span class="price">Rp 2.000 - Rp 102.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>                                   



                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- choose and enjoy meal -->
        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Layanan Fleyvin Code Developer</span>
                                    <h2 itemprop="headline">Pembuatan Aplikasi</h2>
                                </div>
                            </div>
                                <div class="row remove-ext5">

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/Jp3Ddd8/pubg.jpg" alt="popular-dish-img1.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Aplikasi Webview</a>
                        </h4>
                                                <p itemprop="description">Mengubah Website Anda Menjadi Sebuah Aplikasi dan Bisa Upload di PlayStore.</p>
                                                <span class="price">Rp 6.000 - Rp 105.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>

                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.4s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/Kwh7z6z/ml.jpg" alt="popular-dish-img2.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Aplikasi Portofolio & Portal Informasi</a>
                        </h4>
                                                <p itemprop="description">Aplikasi Portofolio dan Portal Informasi, Cocok Untuk Segala Bidang, Personal, Bisnis, Toko Online/Olshop, Toko Offline, Sekolah, Yayasan, Organisasi, Komunitas, Event, dll.</p>
                                                <span class="price">Rp 3.000 - Rp 158.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>

                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- choose and enjoy meal -->
	     <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Layanan Fleyvin Code Developer</span>
                                    <h2 itemprop="headline">Jasa Upload Aplikasi</h2>
                                </div>
                            </div>
                                <div class="row remove-ext5">

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/Jp3Ddd8/pubg.jpg" alt="popular-dish-img1.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Upload Aplikasimu di PlayStore</a>
                        </h4>
                                                <p itemprop="description">Upload Aplikasi di PlayStore dengan Harga Terjangkau.</p>
                                                <span class="price">Rp 6.000 - Rp 105.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>

                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.4s">
                                            <div class="popular-dish-thumb">
                                                <a href="404.html" title="" itemprop="url"><img src="https://i.ibb.co/Kwh7z6z/ml.jpg" alt="popular-dish-img2.jpg" itemprop="image" height="280px" width="380px"></a>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 0</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="404.html" title="" itemprop="url">
                          Upload Aplikasimu di AppStore</a>
                        </h4>
                                                <p itemprop="description">Upload Aplikasi di AppStore dengan Full Support.</p>
                                                <span class="price">Rp 3.000 - Rp 158.000</span>
                                                <a class="brd-rd2" href="404.html" title="Order Now" itemprop="url">Order Now</a>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>

                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- choose and enjoy meal -->
		    
        <section id="step-order" class="step-order">
            <div class="block blackish low-opacity">
                <div class="fixed-bg" style="background-image: url(https://i.ibb.co/GRqkLSM/game2.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>FCDEV</span>
                                    <h2 class="text-white" itemprop="headline">easy order in 3 steps</h2>
                                </div>
                            </div>
                            <div class="remove-ext text-center">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                            <i><img src="https://i.ibb.co/RcPqP2C/Keputusan-Pembelian.jpg" alt="setp-img1.png" itemprop="image" height="150px" style="border-radius: 50px"> <span class="brd-rd50 red-bg">1</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Konsultasi</h4>
                                                <p itemprop="description">Anda Bisa Konsultasi Gratis Pada Tim Kami Terkait Layanan Yang Mau Dipesan.</p>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                            <i><img src="https://i.ibb.co/JjQS76g/apakah-paylater-akan-mengalahkan-sistem-pembayaran-lain-X0-HNt-EJL4f.webp" alt="setp-img2.png" itemprop="image" height="150px" style="border-radius: 50px"> <span class="brd-rd50 red-bg">2</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Pembayaran</h4>
                                                <p itemprop="description">Jika Sudah Sepakat dan Setuju Dengan Layanan Yang Kami Tawarkan, Anda Bisa Membayar Uang Muka Agar Dapat Kami Kerjakan Layanan Yang Anda Pesan.</p>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                            <i><img src="https://i.ibb.co/GQc3g1f/unnamed.jpg" alt="setp-img3.png" itemprop="image" height="150px" style="border-radius: 50px"> <span class="brd-rd50 red-bg">3</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Done</h4>
                                                <p itemprop="description">Tim Kami Akan Mengirimkan Layanan Yang Anda Pesan, Anda Bisa Mengajukan Revisi dan Pelunasan Pembayaran Jika Belum Lunas.</p>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



 <!-- <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Website for Restaurant and Cafe</span>
                                    <h2 itemprop="headline">Featured resturents</h2>
                                </div>
                            </div>
                            <div class="featured-restaurants-wrapper">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="featured-restaurants-list">
                                            <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd2" src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="featured-restaurant-img1.jpg" itemprop="image"></a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Tuna Roast Source</a></h4>
                                                    <span class="price">$85.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                        <li><i class="flaticon-transport"></i> 30min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                </div>
                                            </div>

                                            <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.2s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd2" src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="featured-restaurant-img2.jpg" itemprop="image"></a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Crab With Curry Sources</a></h4>
                                                    <span class="price">$70.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $40</li>
                                                        <li><i class="flaticon-transport"></i> 20min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.03</span>
                                                </div>
                                            </div>

                                            <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.3s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd2" src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="featured-restaurant-img3.jpg" itemprop="image"></a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Imported Salmon Steak</a></h4>
                                                    <span class="price">$90.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $60</li>
                                                        <li><i class="flaticon-transport"></i> 45min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 5.00</span>
                                                </div>
                                            </div>

                                              <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.3s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd2" src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="featured-restaurant-img3.jpg" itemprop="image"></a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Imported Salmon Steak</a></h4>
                                                    <span class="price">$90.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $60</li>
                                                        <li><i class="flaticon-transport"></i> 45min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 5.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="featured-restaurant-gallery">
                                            <div class="featured-restaurant-carousel">
                                                <div class="featured-restaurant-thumb"><img class="brd-rd2" src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="featured-restaurant-gallery1.jpg" itemprop="image"></div>
                                                <div class="featured-restaurant-thumb"><img class="brd-rd2" src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="featured-restaurant-gallery2.jpg" itemprop="image"></div>
                                            </div>
                                            <div class="featured-restaurant-box">
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Maenaam Thai Restaurant</a></h4>
                                                    <span class="price">$85.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i>Produk Terlaris</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    <!--  <section>
            <div class="block grayish low-opacity ">
                <div class="fixed-bg" style="background-image: url(assets/images/pattern.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="filters-wrapper">
                                <div class="title1-wrapper text-center">
                                    <div class="title1-inner">
                                        <span>Favorite Game</span>
                                        <h2 itemprop="headline">choose your game</h2>
                                    </div>
                                </div>
                                <ul class="filter-buttons center ext-btm20">
                                    <li class="active"><a class="brd-rd30" data-filter="*" href="#" itemprop="url">All</a></li>
                                    <li><a class="brd-rd30" data-filter=".HTML" href="#" itemprop="url">PUBGM</a></li>
                                    <li><a class="brd-rd30" data-filter=".CSS" href="#" itemprop="url">MOBILE LEGENDS</a></li>
                                    <li><a class="brd-rd30" data-filter=".JAVASCRIPT" href="#" itemprop="url">FREE FIRE</a></li>
                                </ul>
                                <div class="filters-inner">
                                    <div class="row">
                                        <div class="masonry">
                                            <div class="col-md-6 col-sm-6 col-lg-6 filter-item HTML">
                                                <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn" data-wow-delay="0.1s">
                                                    <div class="featured-restaurant-thumb">
                                                        <a href="restaurant-detail.html" title="" itemprop="url"><img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="most-popular-img1-1.png" itemprop="image"></a>
                                                    </div>
                                                    <div class="featured-restaurant-info">
                                                        <span class="red-clr">5th Avenue New York 68</span>
                                                        <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Domino's Pizza</a></h4>
                                                        <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a>, <a href="#" title="" itemprop="url">Beef Roast</a></span>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                            <li><i class="flaticon-transport"></i> 30min</li>
                                                            <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                        </ul>
                                                        <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                        <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                        <a class="brd-rd5" href="restaurant-detail.html" title="Order Online">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6 filter-item CSS">
                                                <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn" data-wow-delay="0.2s">
                                                    <div class="featured-restaurant-thumb">
                                                        <a href="restaurant-detail.html" title="" itemprop="url"><img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="most-popular-img1-2.png" itemprop="image"></a>
                                                    </div>
                                                    <div class="featured-restaurant-info">
                                                        <span class="red-clr">5th Avenue New York 68</span>
                                                        <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Burger King</a></h4>
                                                        <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a>, <a href="#" title="" itemprop="url">Beef Roast</a></span>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                            <li><i class="flaticon-transport"></i> 30min</li>
                                                            <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                        </ul>
                                                        <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                        <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                        <a class="brd-rd5" href="restaurant-detail.html" title="Order Online">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6 filter-item filter-item3">
                                                <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn" data-wow-delay="0.3s">
                                                    <div class="featured-restaurant-thumb">
                                                        <a href="restaurant-detail.html" title="" itemprop="url"><img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="most-popular-img1-3.png" itemprop="image"></a>
                                                    </div>
                                                    <div class="featured-restaurant-info">
                                                        <span class="red-clr">5th Avenue New York 68</span>
                                                        <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Wendy's Cafe</a></h4>
                                                        <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a>, <a href="#" title="" itemprop="url">Beef Roast</a></span>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                            <li><i class="flaticon-transport"></i> 30min</li>
                                                            <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                        </ul>
                                                        <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                        <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                        <a class="brd-rd5" href="restaurant-detail.html" title="Order Online">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6 filter-item filter-item1 filter-item2 filter-item3">
                                                <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn" data-wow-delay="0.4s">
                                                    <div class="featured-restaurant-thumb">
                                                        <a href="restaurant-detail.html" title="" itemprop="url"><img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="most-popular-img1-4.png" itemprop="image"></a>
                                                    </div>
                                                    <div class="featured-restaurant-info">
                                                        <span class="red-clr">5th Avenue New York 68</span>
                                                        <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Restaurant</a></h4>
                                                        <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a>, <a href="#" title="" itemprop="url">Beef Roast</a></span>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                            <li><i class="flaticon-transport"></i> 30min</li>
                                                            <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                        </ul>
                                                        <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                        <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                        <a class="brd-rd5" href="restaurant-detail.html" title="Order Online">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->


		<!--<section>
            <div class="block bottom-padd210">
                <div class="container">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="title1-wrapper text-center">
                                    <div class="title1-inner">
                                        <span>Website for Restaurant and Cafe</span>
                                        <h2 itemprop="headline">Featured resturents</h2>
                                    </div>
                                </div>
                           </div> 
							<div class="col-md-4 col-sm-6 col-lg-4">
								<div class="article-dev wow fadeIn" data-wow-delay="0.2s">
									<figure>
										<img src="assets/images/resource/article1.jpg" alt="">
									</figure>
									<div class="article-data">
										<div class="article-info-meta">
											<span>thu</span>
											<a href="#" title="">15 dec 2018</a>
											<a href="#" title="">By webinane</a>
										</div>
										<div class="article-meta">
											<h3><a href="#" title="">
													Special Food Recipes For DpecialOccasions.
												</a>
											</h3>
											<div class="like-meta">
												<span><i class="fa fa-heart-o"></i> 12</span>
												<span><i class="fa fa-comment-o"></i> 7</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-lg-4">
								<div class="article-dev wow fadeIn" data-wow-delay="0.4s">
									<figure>
										<img src="assets/images/resource/article2.jpg" alt="">
									</figure>
									<div class="article-data">
										<div class="article-info-meta">
											<span>Mon</span>
											<a href="#" title="">25 Sep 2018</a>
											<a href="#" title="">By webinane</a>
										</div>
										<div class="article-meta">
											<h3><a href="#" title="">
													Candy Canes Wafer Sweet Roll 2
												</a>
											</h3>
											<div class="like-meta">
												<span><i class="fa fa-heart-o"></i> 12</span>
												<span><i class="fa fa-comment-o"></i> 7</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-lg-4">
								<div class="article-dev wow fadeIn" data-wow-delay="0.6s">
									<figure>
										<img src="assets/images/resource/article3.jpg" alt="">
									</figure>
									<div class="article-data">
										<div class="article-info-meta">
											<span>Wed</span>
											<a href="#" title="">11 july 2018</a>
											<a href="#" title="">By webinane</a>
										</div>
										<div class="article-meta">
											<h3><a href="#" title="">
													Cheesecake Pastry Marshmallow
												</a>
											</h3>
											<div class="like-meta">
												<span><i class="fa fa-heart-o"></i> 12</span>
												<span><i class="fa fa-comment-o"></i> 7</span>
											</div>
										</div>
									</div>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </section>-->

        <section><!--
            <div class="block no-padding red-bg">
                <img class="bottom-clouds-mockup" src="assets/images/resource/clouds2.png" alt="clouds2.png" itemprop="image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="app-sec">
                                <div class="row">
                                    <div class="col-md-4 hidden-sm col-md-offset-1 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-1">
                                        <div class="app-mockup text-right overlape-110 wow fadeInUp" data-wow-delay="0.2s"><img src="assets/images/resource/app-mockup.png"  itemprop="image"></div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-1 col-sm-12 col-sm-offset-0 col-lg-6 col-lg-offset-1">
                                      <center>
                                        <div class="app-info">
                                            <h4 itemprop="headline">Segera Hadir Di App</h4>
                                            <p itemprop="description"></p>
                                            </center>
                                            <div class="app-download-btns">
                                    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  min-height: s0vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.download-container{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.download-btn{
  position: relative;
  background: #4285F4;
  color: #fff;
  width: 230px;
  padding: 18px 0;
  text-align: center;
  font-size: 1em;
  font-weight: 400;
  text-decoration: none;
  border-radius: 5px;
  box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
  transition: background 0.3s ease;
}

.download-btn:hover{
  background: #2874F3;
}

.download-btn i{
  margin-left: 5px;
}

.countdown{
  font-size: 1em;
  font-weight: 700;
  margin-bottom: 20px;
}

.countdown span{
  color: #0693F6;
  font-size: 1.5em;
  font-weight: 800;
}

.pleaseWait-text{
  font-size: 1.1em;
  font-weight: 600;
  display: none;
}

.manualDownload-text{
  font-size: 1.1em;
  font-weight: 600;
  display: none;
}

.manualDownload-link{
  color: #0693F6;
  font-weight: 800;
  text-decoration: none;
}
</style>

<!DOCTYPE html>
<section id="download">
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>
    <a class="red-bg brd-rd4" title="Register">
    <div class="download-container">
      <a href="#download" class="download-btn">Download Aplikasi <i class="fas fa-download"></i></a>
      <div class="countdown"></div>
      <div class="pleaseWait-text">Please wait..</div>
      <div class="manualDownload-text">
        If the download didn't start automatically, <a href="#" class="manualDownload-link">click here.</a>
      </div>
    </div>

    <script type="text/javascript">
    const downloadBtn = document.querySelector(".download-btn");
    const countdown = document.querySelector(".countdown");
    const pleaseWaitText = document.querySelector(".pleaseWait-text");
    const manualDownloadText = document.querySelector(".manualDownload-text");
    const manualDownloadLink = document.querySelector(".manualDownload-link");
    var timeLeft = 5;

    downloadBtn.addEventListener("click", () => {
      downloadBtn.style.display = "none";
      countdown.innerHTML = "Download will begin automatically in <span>" + timeLeft + "</span> seconds."; //for quick start of countdown

      var downloadTimer = setInterval(function timeCount(){
        timeLeft -= 1;
        countdown.innerHTML = "Download will begin automatically in <span>" + timeLeft + "</span> seconds.";

        if(timeLeft <= 1){
          clearInterval(downloadTimer);
          pleaseWaitText.style.display = "block";
          let download_href = "https://apy.pw/marketjb"; //enter the downloadable file link URL here
          window.location.href = download_href;
          manualDownloadLink.href = download_href;

          setTimeout(() => {
            pleaseWaitText.style.display = "none";
            manualDownloadText.style.display = "block";
          }, 4000);
        }
      }, 1000);
    });
    </script>

  </body>
</html>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- App Section -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- red section -->
    </main><!-- Main Wrapper -->
    	
    <section id="testimonial" class="testimonial">
            <div class="block grayish low-opacity">
				<div class="fixed-bg" style="background-image: url(assets/images/pattern.png)"></div>
				<div class="top-mockup"><img src="assets/images/resource/mockup2.png" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <div class="filters-wrapper">
                                <div class="title1-wrapper text-center">
									<div class="title1-inner">
										<span>SELCO</span>
										<h2 itemprop="headline">Recommended For You</h2>
									</div>
								</div>
                            </div>
                        </div>
						<div class="col-md-4 col-xs-12">
							<div class="dishes-caro">
								<div class="dish-item">
									<figure><img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt=""></figure>
									<div class="item-meta">
										<img src="assets/images/resource/restaurant-logo2.png" alt="">
										<div>
											<span>Jagnetina Na Raznju</span>
											<p>68 5th Avenue New York </p>
										</div>
									</div>
									<div class="caro-dish-name">
										<h4>Korean Bibimbap Yamyam</h4>
										<span>$10.00–$30.00</span>
									</div>
								</div>
                                <div class="dish-item">
                                    <figure><img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt=""></figure>
                                    <div class="item-meta">
                                        <img src="assets/images/resource/restaurant-logo3.png" alt="">
                                        <div>
                                            <span>Central Caffe Pizzeria</span>
                                            <p>68 5th Avenue New York </p>
                                        </div>
                                    </div>
                                    <div class="caro-dish-name">
                                        <h4>Korean Bibimbap Yamyam</h4>
                                        <span>$10.00–$30.00</span>
                                    </div>
                                </div>
                                <div class="dish-item">
                                    <figure><img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt=""></figure>
                                    <div class="item-meta">
                                        <img src="assets/images/resource/restaurant-logo4.png" alt="">
                                        <div>
                                            <span>Dream Food By Opaq</span>
                                            <p>68 5th Avenue New York </p>
                                        </div>
                                    </div>
                                    <div class="caro-dish-name">
                                        <h4>Korean Bibimbap Yamyam</h4>
                                        <span>$10.00–$30.00</span>
                                    </div>
                                </div>
							</div>
						</div>
						<!-- <div class="col-md-8 col-xs-12">
							<div class="popular-of-month">
								<div class="pop-dish wow fadeIn" data-wow-delay="0.1s">
									<div class="poplr-dish">
										<img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="">
										<div class="dish-meta">
											<span>$10.00–$30.00</span>
											<h4><a href="#" title="">Tequila & Lime hake</a></h4>
										</div>
									</div>
									<div class="item-meta">
										<img alt="" src="assets/images/resource/restaurant-logo2.png">
										<div>
											<span>Jagnetina Na Raznju</span>
											<p>68 5th Avenue New York </p>
										</div>
									</div>
								</div>
								<div class="pop-dish wow fadeIn" data-wow-delay="0.2s">
									<div class="poplr-dish">
										<img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="">
										<div class="dish-meta">
											<span>$10.00–$30.00</span>
											<h4><a href="#" title="">Maximus nibh facilisis</a></h4>
										</div>
									</div>
									<div class="item-meta">
										<img alt="" src="assets/images/resource/restaurant-logo3.png">
										<div>
											<span>Central Caffe Pizzeria</span>
											<p>68 5th Avenue New York </p>
										</div>
									</div>
								</div>
								<div class="pop-dish wow fadeIn" data-wow-delay="0.3s">
									<div class="poplr-dish">
										<img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="">
										<div class="dish-meta">
											<span>$10.00–$30.00</span>
											<h4><a href="#" title="">Hendrerit nisi venenatis</a></h4>
										</div>
									</div>
									<div class="item-meta">
										<img alt="" src="assets/images/resource/restaurant-logo4.png">
										<div>
											<span>Dream Food By Opaq</span>
											<p>68 5th Avenue New York </p>
										</div>
									</div>
								</div>
								<div class="pop-dish">
									<div class="poplr-dish wow fadeIn" data-wow-delay="0.4s">
										<img src="https://i.ibb.co/5Rqdp9P/kosong.webp" alt="">
										<div class="dish-meta">
											<span>$10.00–$30.00</span>
											<h4><a href="#" title="">Grilled Shrimp Scampi</a></h4>
										</div>
									</div>
									<div class="item-meta">
										<img alt="" src="assets/images/resource/restaurant-logo5.png">
										<div>
											<span>Fabio Al Porto Ristorante</span>
											<p>68 5th Avenue New York </p>
										</div>
									</div>
								</div>
							</div>-->

						</div>
                    </div>
                </div>
				<div class="bottom-mockup"><img src="assets/images/resource/mockup1.png" alt=""></div>
            </div>
       </section> <!--recommend-->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>
<?php
require 'lib/footer.php';
?>