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
        <!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--primary">
            <div class="g-container--md g-padding-y-125--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white text-center"><?php echo $lang['CONTACT1']; ?></h2>
                    <p class=" g-font-size-14--xs g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs "><?php echo $lang['CONTACT2']; ?></p>
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs">
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-color--white-opacity text-center">support@precioushairsolution.com</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Address</h4>
                            <p class="g-color--white-opacity text-center">Ruko Graha Renon No. 8 <br class="text-center"> Jl. Raya Puputan Renon Denpasar 80226</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                            <p class="g-color--white-opacity text-center">+62 (361) 228048</p>
                        </div>
                    </div>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs"><?php echo $lang['CONTACT3']; ?></p>
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                        </div>
                    </div>
                    <div class="g-margin-b-80--xs">
                        <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <a href="#" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50"><?php echo $lang['CONTACT4']; ?></a>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Feedback Form -->
        <!--========== END PAGE CONTENT ==========-->
<!-- Google Map -->
        <section class="google-map">
        
            <iframe width="1350" height="400" frameborder="0" style="border:0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.223109855029!2d115.21925331441591!3d-8.670320290648815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ed20785f71%3A0xdee39daa695a6f36!2sPrecious+Hair+%26+Skin+Solutions!5e0!3m2!1sen!2sid!4v1496339808232"   allowfullscreen></iframe>
            
        </section>
        <!-- End Google Map -->
        <?php include $layout . 'footer.php'; ?>