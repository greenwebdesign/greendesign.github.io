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

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-color--sky-light" style="background: url(img/1920x1080/slide-2.jpg) 50% 0 no-repeat fixed;" >
            <div class="container g-padding-y-125--xs">
                <div class="g-padding-y-50--xs">
                    <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">Photos of our work</h2>
                    <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">Our Gallery</h2>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Portfolio Filter -->
        <div class="container g-padding-y-100--xs">
            <div class="s-portfolio">
                <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                    <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">All</div>
                    <div data-filter=".graphic" class="s-portfolio__filter-v1-item cbp-filter-item">KATEGORI 1</div>
                    <div data-filter=".logos" class="s-portfolio__filter-v1-item cbp-filter-item">KATEGORI 2</div>
                    <div data-filter=".motion" class="s-portfolio__filter-v1-item cbp-filter-item">KATEGORI 3</div>
                </div>
            </div>
        </div>
        <!-- End Portfolio Filter -->

        <!-- Portfolio Gallery -->
        <div class="container">
            <div id="js__grid-portfolio-gallery" class="cbp">
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/400x500/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h2 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h2>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/400x500/01.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo $img_970x647; ?>06.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h3>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="<?php echo $img_970x647; ?>06.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos">
                    <div class="s-portfolio__img-effect">
                        <img src="img/400x500/02.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/400x500/02.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="img/400x550/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/400x550/01.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo $img_970x647; ?>09.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="<?php echo $img_970x647; ?>09.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo $img_970x647; ?>04.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="<?php echo $img_970x647; ?>04.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos">
                    <div class="s-portfolio__img-effect">
                        <img src="img/400x500/03.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/400x500/03.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="img/400x500/04.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/400x500/04.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo $img_970x647; ?>07.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="<?php echo $img_970x647; ?>07.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo $img_970x647; ?>05.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by Kotak Wayang.com</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="<?php echo $img_970x647; ?>05.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by Kotak Wayang.com">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->

         <!-- Clients -->
        <div class="g-bg-color--sky-light">
            <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--sm">Sosial Media</h2>
                    <p class="g-font-size-18--md">FOLLOW ME</p>
                </div>
                <!-- Swiper Clients -->
                <div class="s-swiper js__swiper-clients">
                    <div class="swiper-wrapper">
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>facebook.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>twitter.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>instagram.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                                <a href="#"><img class="img-sosial-media" src="<?php echo $img_clients ?>youtube.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        <div class="warp-media-sosial">
                            <div class="hvr-underline-from-center wow fadeIn " data-wow-duration=".3" data-wow-delay=".5s">
                                <a href="#" class=""><img class="img-sosial-media " src="<?php echo $img_clients ?>whatsapp.png" alt="Clients Logo"></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>
