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

        <!--========== PAGE CONTENT ==========-->

        <!-- Portfolio -->
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row g-margin-b-30--xs">
                <div class="col-sm-12">
                    <div class="g-margin-t-20--md g-margin-b-40--xs">
                        
                        <center>
                        <h2 class="g-font-size-32--xs g-font-size-36--md"><?php echo $lang['SERVICE1']; ?> <strong><?php echo $lang['SERVICE2']; ?></strong></h2>
                        
                        </center>
                        <p><?php echo $lang['SERVICE3']; ?></p>
                        <p><?php echo $lang['SERVICE4']; ?></p>
                        <p><?php echo $lang['SERVICE5']; ?></p>
                        <p><?php echo $lang['SERVICE6']; ?></p>
                    </div>
                </div>

                
            </div>
        </div>
        <!-- End Portfolio -->

        <!-- treament -->
        <div class="js__parallax-window" style="background: #1d4396;">
            <div class="container g-text-center--xs g-padding-y-80--xs ">
                <h1 class="g-font-size-32--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">
                <?php echo $lang['TREATMENT1']; ?></h1>
            
                            
                                    <div class="col-md-12  g-margin-b-10--xs g-margin-b-0--lg col-xs-12">
                                        <div class="s-plan-v1-tritment g-text-center--xs .g-bg-color--transparant g-padding-y-15--xs">
                                             <div class="row">

                                                <div class="col-md-6  g-margin-b-0--md col-xs-12">
                                                    <ul class="list-unstyled-treatment g-ul-li-tb-5--xs g-margin-b-0--xs ">
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs " href="#"><?php echo $lang['TREATMENT2a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT2a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs " href="#"><?php echo $lang['TREATMENT3a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT3a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs " href="#"><?php echo $lang['TREATMENT4a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT4a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs " href="#"><?php echo $lang['TREATMENT5a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT5a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs " href="#"><?php echo $lang['TREATMENT6a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT6a1']; ?></span></a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-6 g-margin-b-0--md col-xs-12">
                                                    <ul class="list-unstyled-treatment g-ul-li-tb-5--xs g-margin-b-0--xs ">
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs" href="#"><?php echo $lang['TREATMENT7a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT7a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs " href="#"><?php echo $lang['TREATMENT8a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT8a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs e" href="#"><?php echo $lang['TREATMENT9a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT9a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs " href="#"><?php echo $lang['TREATMENT10a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT10a1']; ?></span></a></li>
                                                        <li><a class="g-font-size-18--lg g-font-size-15--xs" href="#"><?php echo $lang['TREATMENT11a']; ?><span class="list-treatment"><?php echo $lang['TREATMENT11a1']; ?></span></a></li>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                            
            </div>
        </div>
        <!-- End treament -->

        <!-- treament -->
        <div class="g-bg-color--white">
            <div class="container-fluid g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="col-md-12 g-margin-b-10--xs g-margin-b-0--lg">
                                    <div class="col-md-3 g-margin-b-20--xs g-margin-b-0--md col-md-offset-3 col-xs-12">
                                        <a href="#" class="text-uppercase s-btn s-btn--md s-btn--blue-brd g-radius--50">
                                        Book Now
                                        </a>
                                    </div>

                                    <div class="col-md-3 g-margin-b-20--xs g-margin-b-0--md col-xs-12">
                                        <center><p class="booking-text g-color--primary ">Call Book</p>
                                        <p class="booking-text g-color--primary"><i class="glyphicon glyphicon-earphone"></i> 0361 228048</p></center>
                                    </div>
                                </div>
                            
            </div>
        </div>
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>