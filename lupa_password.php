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
            <div class="container main-container headerOffset">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">

            <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white"><span> <i class="ti-unlock"> </i> Lupa  password? </span></h2>

            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                <p class="text-uppercase g-font-size-14--xs g-color--white-opacity g-margin-b-25--xs">Untuk mereset kata sandi Anda, masukkan alamat email yang Anda gunakan untuk masuk ke situs ini. Kemudian kami akan mengirimkan kata sandi baru kepada kami. </p>

                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs" > Alamat Email </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan email">
                        </div>
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-margin-b-20--xs">Miliki Kembali Password
                        </button>
                    </form>
                    <div class="clear clearfix">
                        <ul class="pager">
                            <li class="previous pull-right"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg  g-margin-b-20--xs">Kembali ke Login</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5"></div>
    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /wrapper -->

<div class="gap"></div>
            </div>
        </div>
        <!-- End Feedback Form -->
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>