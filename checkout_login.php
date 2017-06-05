<?php
$judul_halaman = 'Precious Hair Solution';
$keyword = 'Green Design';
$deskripsi = 'Green Design';
$pembuat = 'Green Design.web.id';
include 'setting.php';
?>

       <!--========== HEADER ==========-->

            <?php include $layout . 'produk_menu.php'; ?>

        
        <!--========== END HEADER ==========-->
        

        <!--========== PAGE CONTENT ==========-->
<div class="container g-padding-y-80--xs g-padding-y-125--xsm">        
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active"> Authentication</li>
                <li class="view-cart"><a href="view-cart.php" ><i class="glyphicon glyphicon-shopping-cart" ></i> View Cart</a></li>
            </ul>
        </div>
    </div>
    <!-- /.row -->


    <div class="row">

        <div class="col-lg-12 col-md-12  col-sm-12">

            <h3 class="section-title-inner"><span><i class="glyphicon glyphicon-lock"></i> Authentication</span></h3>

            <div class="row userInfo">
                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2"> Buat Akun </h2>

                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary button-log"><i class="fa fa-user"></i> Buat Akun
                        </button>
                    </form>
                </div>


                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2"><span>Sudah Terdaftar? Silahkan Login</span></h2>

                    <form role="form">
                        <div class="form-group">
                            <label for="InputEmail2">Email address</label>
                            <input type="email" class="form-control" id="InputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword2">Password</label>
                            <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox">
                                Ingatkan saya </label>
                        </div>
                        <div class="form-group">
                            <p><a title="Recover your forgotten password" href="lupa_password.php">Lupa Password? </a></p>
                        </div>
                        <a href="checkout-1.php" class="btn btn-primary button-log"> Sign In</a>
                    </form>
                </div>
               
            </div>
            <!--/row end-->

        </div>
    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
</div>
<!-- /.main-container -->
<div class="gap"></div>
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>