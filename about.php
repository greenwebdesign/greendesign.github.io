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
        
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('<?php echo $img_1920x1080; ?>slide-2.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Company Profile </h1>
                        </div>
                        <a class="js__popup__youtube" href="#" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
                
           
        <!--========== END SWIPER SLIDER ==========-->


        <!--========== PAGE CONTENT ==========-->
        <!-- About -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">

        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                <div class="col-sm-6 col-xs-12 col-sm-push-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="<?php echo $img; ?>group.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-left--lg g-text-right--md">
                    <h2 class="g-font-size-32--xs g-font-size-30--sm g-margin-b-25--xs "><?php echo $lang['PROFIL1']; ?></h2>
                    <p class="g-font-size-18--sm"><?php echo $lang['PROFIL2']; ?></p>
                </div>
            </div>
            
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                <div class="col-sm-6 col-xs-12 col-sm-push-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="<?php echo $img; ?>build.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-left--lg g-text-right--md">
                    <h2 class="g-font-size-32--xs g-font-size-30--sm g-margin-b-25--xs"><?php echo $lang['PROFIL3']; ?></h2>
                    <p class="g-font-size-18--sm"><?php echo $lang['PROFIL4']; ?></p>
                </div>
            </div>
            
        </div>
        <!-- End About -->

        <!-- Portfolio Filter 
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

        <!-- 
        <div class="container g-margin-b-80--xs">
            <div id="js__grid-portfolio-gallery" class="cbp g-margin-b-80--xs">
                
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
                
            </div>
             End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->


        <!--========== END PAGE CONTENT ==========-->

       <?php include $layout . 'footer.php'; ?>