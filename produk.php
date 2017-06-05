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

    <!-- Main component call to action -->

    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="view-cart"><a href="view-cart.php" ><i class="glyphicon glyphicon-shopping-cart" ></i> View Cart</a></li>
            </ul>
        </div>
    </div>
    <!-- /.row  -->

    <div class="row">

        <!--left column-->

        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="panel-group" id="accordionNo">
                <!--Category-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseCategory"
                                                   class="collapseWill active ">
                            <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Category </a></h4>
                    </div>
                    <div id="collapseCategory" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked tree">
                                <li><a href="#"> MENU </a></li>
                                <li><a href="#"> MENU </a></li>
                                <li><a href="#"> MENU </a></li>
                                <li><a href="#"> MENU </a></li>
                                <li><a href="#"> MENU </a></li>
                                <li><a href="#"> MENU </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Category menu end-->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="collapseWill active " data-toggle="collapse"
                                                   href="#collapsePrice">
                            Harga <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapsePrice" class="panel-collapse collapse in">
                        <div class="panel-body priceFilterBody">
                            <!-- -->
                            <label>
                                <input type="radio" name="agree" value="0"/>
                                Rp.100- Rp.500</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="1"/>
                                Rp.500 - Rp.1000</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="2"/>
                                Rp.1000 - Rp.1500</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="3"/>
                                Rp.1500 - Rp.2000</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="4"/>
                                Rp.2000 - Rp.2500</label>
                            <br>
                            <label>
                                <input type="radio" name="agree" value="5"/>
                                Rp.2500 - Rp.3000</label>
                            <br>
                            
                            <hr>
                            

                            
                                <button type="submit" class="btn btn-primary pull-right button-log">check</button>
                           
                        </div>
                    </div>
                </div>
                <!--/price panel end-->


                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseThree"
                                                   class="collapseWill active ">
                            Discount <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Discount </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="3"/>
                                    Tidak Discount </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/discount  panel end-->
            </div>
        </div>

        <!--right column-->
        <div class="col-lg-9 col-md-9 col-sm-12">

            <div class="w100 productFilter clearfix">
                <p class="pull-left"> Showing <strong>4</strong> products </p>
            </div>


            <!--/.productFilter-->
            <div class="row  categoryProduct xsResponse clearfix">
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <a href="produk_detail.php"><img src="img/970x647/12.png" alt="img" class="img-responsive"></a>

                            <div class="promotion"><span class="new-product"> NEW</span> <span
                                    class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="produk_detail.php">Nama Barang </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan</p>
                            </div>
                            </div>
                        <div class="price"><span>Rp.25</span></div>
                        <div class="action-control"><a class="btn btn-primary button-log"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            
                            <a href="produk_detail.php"><img src="img/970x647/12.png" alt="img" class="img-responsive"></a>

                            <div class="promotion"><span class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="produk_detail.php">Nama Barang </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan. </p>
                            </div>
                            </div>
                        <div class="price"><span>Rp.25</span></div>
                        <div class="action-control"><a class="btn btn-primary button-log"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            
                            <a href="produk_detail.php"><img src="img/970x647/12.png" alt="img" class="img-responsive"></a>

                            <div class="promotion"><span class="new-product"> NEW</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="produk_detail.php">Nama Barang </a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan. </p>
                            </div>
                           </div>
                        <div class="price"><span>Rp.25</span> <span class="old-price">Rp.75</span></div>
                        <div class="action-control"><a class="btn btn-primary button-log"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                           data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>

                       <div class="image">
                            
                            <a href="produk_detail.php"><img src="img/970x647/12.png" alt="img" class="img-responsive"></a>
                        </div>
                        <div class="description">
                            <h4><a href="produk_detail.php">Nama Barang</a></h4>

                            <div class="grid-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                            <div class="list-description">
                                <p> Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan Ini adalah isi keterangan. </p>
                            </div>
                            </div>
                        <div class="price"><span>Rp.25</span></div>
                        <div class="action-control"><a class="btn btn-primary button-log"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                
                
            </div>
            <!--/.categoryProduct || product content end-->

            <div class="w100 categoryFooter">
                <div class="pagination pull-left no-margin-top">
                    <ul class="pagination no-margin-top">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
                    <p>Showing 1–100 of 4 results</p>
                </div>
            </div>
            <!--/.categoryFooter-->
        </div>
        <!--/right column end-->
    </div>
    <!-- /.row  -->
</div>
</div>
<!-- /main container -->
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>