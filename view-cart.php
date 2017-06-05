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
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
            <h3 class="section-title-inner"><span><i
                    class="glyphicon glyphicon-shopping-cart"></i> Shopping cart </span></h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
            <h5 class="caps"><a href="produk.php" class="btn btn-primary  button-log"><i class="glyphicon glyphicon-chevron-left"></i> Kembali Belanja </a></h5>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                    <div class="cartContent w100">
                        <table class="cartTable table-responsive" style="width:100%">
                            <tbody>

                            <tr class="CartProduct cartTableHeader">
                                <td style="width:15%"> Product</td>
                                <td style="width:40%">Details</td>
                                <td style="width:10%" class="delete">&nbsp;</td>
                                <td style="width:10%">QNT</td>
                                <td style="width:10%">Discount</td>
                                <td style="width:15%">Total</td>
                            </tr>

                            <tr class="CartProduct">
                                <td class="CartProductThumb">
                                    <div><a href="product-details.html"><img src="img/produk-detail/01.jpg" alt="img" class="img-responsive"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="CartDescription">
                                        <h4><a href="product-details.html">Nama Barang </a></h4>
                                        <span class="size">Size</span>

                                        <div class="price"><span>Rp.8.80</span></div>
                                    </div>
                                </td>
                                <td class="delete"><a title="Delete"> <i
                                        class="glyphicon glyphicon-trash"></i></a></td>
                                <td><input class="quanitySniper" type="text" value="2" name="quanitySniper"></td>
                                <td>0</td>
                                <td class="price">Rp.300</td>
                            </tr>

                            <tr class="CartProduct">
                                <td class="CartProductThumb">
                                    <div><a href="product-details.html"><img src="img/produk-detail/01.jpg" alt="img" class="img-responsive"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="CartDescription">
                                        <h4><a href="product-details.html">Nama Barang </a></h4>
                                        <span class="size">Size</span>

                                        <div class="price"><span>Rp.30</span></div>
                                    </div>
                                </td>
                                <td class="delete"><a title="Delete"> <i
                                        class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                                <td><input class="quanitySniper" type="text" value="2" name="quanitySniper"></td>
                                <td>0</td>
                                <td class="price">Rp.60</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class="cartFooter w100">
                        <div class="box-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary  button-log"><i class="glyphicon glyphicon-repeat"></i> &nbsp; Update
                                    cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <div class="contentBox">
                <div class="w100 costDetails">
                    <div class="table-block" id="order-detail-content"><a class="btn btn-primary  button-log btn-block "
                                                                          title="checkout" href="checkout_login.php"
                                                                          style="margin-bottom:20px"> Pembayaran &nbsp; <i class="glyphicon glyphicon-chevron-right"></i> </a>

                        <div class="w100 cartMiniTable">
                            <table id="cart-summary" class="std table">
                                <tbody>
                                <tr>
                                    <td>Total products</td>
                                    <td class="price">Rp.216.51</td>
                                </tr>
                                <tr style="">
                                    <td>Pengiriman</td>
                                    <td class="price"><span class="success">Gratis!</span></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class=" site-color" id="total-price">Rp.216.51</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-append couponForm">
                                            <input class="col-lg-8" id="appendedInputButton" type="text"
                                                   placeholder="Kode Kupon">
                                            <button class="col-lg-4 btn btn-success" type="button">Apply</button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End popular -->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
</div>
<!-- /.main-container -->
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>