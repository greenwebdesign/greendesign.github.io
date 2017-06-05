<?php
$judul_halaman = 'Precious Hair Solution';
$keyword = 'Green Design';
$deskripsi = 'Green Design';
$pembuat = 'Green Design.web.id';
include 'setting.php';
?>

        <!--========== HEADER ==========-->

            <?php include $layout . 'menu.php'; ?>

        
        <!--========== END HEADER ==========-->

       <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper-bg s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('<?php echo $img_1920x1080; ?>slide-2.jpg') ;">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Precious Hair Solution <br>hadir untuk Anda </h1>
                        </div>
                        
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide " style="background: url('<?php echo $img_1920x1080; ?>slide-1.jpg') ;" >
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Tired Of Losing Hair?</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs"><?php echo $lang['HOME13']; ?></p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!-- START SLIDE -->
<div id="slide" class="carousel slide" data-ride="carousel">
 
  <ol class="carousel-indicators hidden-xs">
    <li data-target="#slide" data-slide-to="0" class="active"></li>
    <li data-target="#slide" data-slide-to="1"></li>
  </ol>

 
  <div class="carousel-inner " role="listbox">
    
    <div class="item active">
      <img src="<?php echo $img_1920x1080; ?>slide-2.jpg" width="1920" height="600" alt="Gambar 1">
      <div class="carousel-caption hidden-xs">
           <h2 class="h1">BRAND</h2>
           <p class="lead">Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan</p>
      </div>
    </div>
    
    <div class="item">
      <img src="<?php echo $img_1920x1080; ?>slide-1.jpg" width="1920" height="600" alt="Gambar 2">
      <div class="carousel-caption hidden-xs">
           <h2 class="h1">TOOLS DAN FRAMEWORK</h2>
            <p class="lead">Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan</p>
      </div>
    </div>
  
  </div>

  
  <a class="left carousel-control" href="#slide" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slide" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- END SLIDE -->

        <!--========== PAGE CONTENT ==========-->
        <!-- welcome -->
        <div id="js__scroll-to-section" class="container g-padding-y-10--sm">
            <div class="g-text-center--xs g-margin-b-100--xs wow FadeIn" data-wow-duration="3s" data-wow-offset="200">
            <h2 class="g-font-size-32--xs g-font-size-36--md"><?php echo $lang['HOME1']; ?></h2> 
            </div>

            <div class="row g-margin-b-10--xs ">
                <div class="col-sm-5 g-margin-b-45--xs g-margin-b-0--md">
                    <img src="<?php echo $img ?>welcome.png" width="100%" height="100%">
                </div>
                
                <div class="col-sm-7 g-margin-b-10--xs g-margin-b-0--md">
                    <div class="row">
                        <div class="col-sm-12 g-margin-b-45--xs g-margin-b-0--md">
                            <div class="clearfix">
                                <div class="g-media__body g-padding-x-20--xs">
                                    <h3 class="g-font-size-18--xs g-text-left--lg g-text-center--xs"><?php echo $lang['HOME2']; ?></h3>
                                    <p class="g-margin-b-0--xs"><?php echo $lang['HOME3']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-5 g-margin-b-60--xs g-margin-b-0--md">
                            <div class="clearfix">
                                <div class="g-media__body g-padding-x-20--xs g-text-center--xs">
                                    <a href="about.php" class="text-uppercase s-btn s-btn--md s-btn--blue-brd g-radius--50">
                                        <?php echo $lang['HOME13']; ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 g-margin-b-60--xs g-margin-b-0--md">
                            <div class="clearfix">
                                <div class="g-media__body g-padding-x-20--xs g-text-center--xs">
                                    <a href="androgenetika-alopecia.php" class="text-uppercase s-btn s-btn--md s-btn--blue-brd g-radius--50">
                                        Androgenetika Alopecia ?
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- End Features -->

       <!-- Parallax -->
        <div class="js__parallax-window" style="background-color:#1d4396;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-30--xs g-font-size-50--sm g-font-size-60--md g-color--white"><?php echo $lang['HOME4']; ?></h2>
                </div>
                <a href="#" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50"><?php echo $lang['HOME12']; ?></a>
            </div>
        </div>
        <!-- End Parallax -->

        <!-- Plan -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md"><?php echo $lang['HOME5']; ?></h2>
                </div>

                <div class="row g-row-col--5">
                     <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <img class="img-plan" src="<?php echo $img ?>01.jpg">
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"><?php echo $lang['HOME6']; ?></h3>
                                <p class="paragraf"><?php echo $lang['HOME7']; ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->

                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <img class="img-plan" src="<?php echo $img ?>02.jpg">
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"><?php echo $lang['HOME8']; ?></h3>
                                <p class="paragraf"><?php echo $lang['HOME9']; ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->
                    
                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <img class="img-plan" src="<?php echo $img ?>03.jpg">
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"><?php echo $lang['HOME10']; ?></h3>
                                <p class="paragraf"><?php echo $lang['HOME11']; ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->
                </div>
            </div>
        </div>
        <!-- End Plan -->

                </div>
            </div>
        </div>
        

        

       

       <!-- sosial media -->
        <div class="" style="background-color:#1d4396;">
            <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-color--white g-font-size-32--xs g-font-size-36--sm">Social Media</h2>
                    <p class="g-color--white g-font-size-18--md text-center">FOLLOW US</p>
                </div>
                
                <div class="s-swiper js__swiper-clients">
                    <div class="swiper-wrapper">
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow FadeIn" data-wow-duration="1" >
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>facebook.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration="1" >
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>twitter.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration="1" >
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>instagram.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration="1" >
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>youtube.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration="1" >
                                <a href="#" class=""><img class="img-sosial-media " src="<?php echo $img_clients ?>whatsapp.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- end sosial media -->

       

        <!-- Google Map -->
        <section class="google-map">
        
            <iframe width="1350" height="400" frameborder="0" style="border:0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.223109855029!2d115.21925331441591!3d-8.670320290648815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ed20785f71%3A0xdee39daa695a6f36!2sPrecious+Hair+%26+Skin+Solutions!5e0!3m2!1sen!2sid!4v1496339808232"   allowfullscreen></iframe>
            
            
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

        <!-- popup 
<div class="modal fade hide" id="modalAds" role="dialog">
    <div class="modal-dialog  modal-bg-1">
        <div class="modal-body-content">
            <a class="close" data-dismiss="modal">×</a>

            <div class="modal-body">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h3>Masukkan email anda <br> untuk menerima </h3>

                    <p class="discountLg">diskon 10%</p>

                    <p class="ads-ket">Kami mengundang Anda untuk berlangganan newsletter dan menerima diskon 10%.
                    </p>

                    <div class="clearfx">
                        <form id="newsletter" class="newsletter">
                            <input type="text" id="subscribe" name="s" placeholder="Enter email">
                            <button class="subscribe-btn">Subscribe</button>
                        </form>
                    </div>

                    


                </div>
            </div>

        </div>
    </div>
</div>
 end popup -->
        <?php include $layout . 'footer.php'; ?>
