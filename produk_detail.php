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
                <li><a href="index.php">HOME</a></li>
                <li class="view-cart"><a href="view-cart.php" ><i class="glyphicon glyphicon-shopping-cart" ></i> View Cart</a></li>
            </ul>

        </div>
        
    </div>
    <div class="row transitionfx">

        <!-- left column -->
        <div class="col-lg-6 col-md-6 col-sm-6">
            <!-- product Image and Zoom -->

            <div class="main-image sp-wrap col-lg-12 no-padding style3">

                <a href="img/produk-detail/01.jpg"><img
                        src="img/produk-detail/01.jpg" class="img-responsive" alt="img"></a>
                <a href="img/produk-detail/02.jpg"><img
                        src="img/produk-detail/02.jpg" class="img-responsive" alt="img"></a>
                <a href="img/produk-detail/03.jpg"><img
                        src="img/produk-detail/03.jpg" class="img-responsive" alt="img"></a></div>
        </div>
        <!--/ left column end -->

        <!-- right column -->
        <div class="col-lg-6 col-md-6 col-sm-5">
            <h2 class="product-title"> Nama Barang</h2>

                <h4 class="product-code">Kode Produk : DEN1098</h4>

                <div class="rating">
                    <p><span><i class="glyphicon glyphicon-star-empty"></i></span> <span><i class="glyphicon glyphicon-star-empty"></i></span> <span><i
                            class="glyphicon glyphicon-star-empty"></i></span> <span><i class="glyphicon glyphicon-star-empty"></i></span> <span><i
                            class="glyphicon glyphicon-star-empty "></i></span> <span class="ratingInfo"> <a
                            data-toggle="modal" data-target="#modal-review"> Peringkat</a> </span></p>
                </div>
                <div class="product-price"><span class="price-sales"> Rp.70</span> <span class="price-standard">Rp.95</span>
                </div>
                <div class="details-description">
                    <p> ini adalah isi keterangan ini adalah isi keterangan . </p>
                </div>

                <div class="productThumb"></div>
                <!--/.productThumb-->

                <div class="productFilter productFilterLook2">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-6">
                            <div class="filterBox">
                                <select class="form-control">
                                    <option value="0" selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-6">
                            <div class="filterBox">
                                <select class="form-control">
                                    <option value="0" selected>Size</option>
                                    <option value="1">SMALL</option>
                                    <option value="2">MEDIUM</option>
                                    <option value="4">LARGE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- productFilter -->

                <div class="cart-actions">
                    <div class="addto row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <button onclick="productAddToCartForm.submit(this);"
                                    class="btn btn-primary btn-block button-log" title="Add to Cart" type="button">Add
                                to Cart
                            </button>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <!--/.cart-actions-->

                <div class="clear"></div>
                <div class="product-tab w100 clearfix">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        ini adalah isi keterangan ini adalah isi keterangan ini adalah isi keterangan ini adalah isi keterangan
                            ini adalah isi keterangan.<br>
                            100% Cotton<br>
                    </div>

                </div>
                <!--/.product-tab-->

                <div style="clear:both"></div>
                <div class="product-share clearfix">
                    <p> SHARE </p>

                    <div class="socialIcon">
                    <a href="#"><i class="ti-twitter"></i></a> 
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="fa google-plus"></i></a>
                    </div>
                </div>
                <!--/.product-share-->

        </div>
        <!--/ right column end -->

    </div>
    <!--/.row-->

    <div class="row recommended">
       <center> <h3> Produk Terkait </h3></center>

        
    </div>
    <!--/.recommended-->

    <div style="clear:both"></div>
</div>
</div>
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>