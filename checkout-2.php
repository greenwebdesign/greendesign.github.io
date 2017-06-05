<?php
$judul_halaman = 'Precious Hair Solution - Contact';
include 'setting.php';
?>

       <!--========== HEADER ==========-->

            <?php include $layout . 'produk_menu.php'; ?>

        
        <!--========== END HEADER ==========-->
        <div class="g-bg-color--sky-light" style="background: url(img/category.jpg) 50% 0 no-repeat fixed;" >
            <div class="container g-padding-y-125--xs">
                <div class="g-padding-y-50--xs">
                    <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">Product</h2>
                    <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">COLLECTION.</h2>
                </div>
            </div>
        </div>

        <!--========== PAGE CONTENT ==========-->
        
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li class="active"> Checkout</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Checkout</span></h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
            <h5 class="caps"><a href="produk.php" class="btn btn-primary  button-log"><i class="glyphicon glyphicon-chevron-left"></i> Kembali Belanja </a></h5>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                    <div class="w100 clearfix">
                        <ul class="orderStep orderStepLook2">
                            <li><a href="checkout-1.php"> <i class="ti-location-pin "></i> <span> Alamat</span></a></li>
                            <li class="active"><a href="checkout-2.php"><i class="ti-truck "> </i><span>Pengiriman</span> </a></li>
                            <li><a href="checkout-3.php"><i class="ti-money  "> </i><span>Pembayaran</span> </a></li>
                            <li><a href="checkout-4.php"><i class="ti-check "> </i><span>Order</span></a>
                            </li>
                        </ul>
                        <!--/orderStep-->
                    </div>
                    <div class="w100 clearfix">
                        <div class="row userInfo">
                            <div class="col-lg-12">
                                <h2 class="block-title-2"> Choose your delivery method </h2>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="w100 row">
                                    <div class="form-group col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                        <label for="id_country">Country</label>
                                        <select class="form-control" required aria-required="true" id="id_country"
                                                name="id_country">
                                            <option value="">Choose</option>
                                            <option value="38">Algeria</option>
                                            <option value="39">American Samoa</option>
                                            <option value="40">Andorra</option>
                                            <option value="41">Angola</option>
                                            <option value="42">Anguilla</option>
                                            <option value="43">Antigua and Barbuda</option>
                                            <option value="44">Argentina</option>
                                            <option value="45">Armenia</option>
                                            <option value="46">Aruba</option>
                                            <option value="24">Australia</option>
                                            <option value="2">Austria</option>
                                            <option value="47">Azerbaijan</option>
                                            <option value="48">Bahamas</option>
                                            <option value="49">Bahrain</option>
                                            <option value="50">Bangladesh</option>
                                            <option value="3">Belgium</option>
                                            <option value="34">Bolivia</option>
                                            <option value="4">Canada</option>
                                            <option value="5">China</option>
                                            <option value="16">Czech Republic</option>
                                            <option value="20">Denmark</option>
                                            <option value="7">Finland</option>
                                            <option value="8">France</option>
                                            <option value="1">Germany</option>
                                            <option value="9">Greece</option>
                                            <option value="22">HongKong</option>
                                            <option value="26">Ireland</option>
                                            <option value="29">Israel</option>
                                            <option value="10">Italy</option>
                                            <option value="32">Ivory Coast</option>
                                            <option value="11">Japan</option>
                                            <option value="12">Luxemburg</option>
                                            <option value="35">Mauritius</option>
                                            <option value="13">Netherlands</option>
                                            <option value="27">New Zealand</option>
                                            <option value="31">Nigeria</option>
                                            <option value="23">Norway</option>
                                            <option value="14">Poland</option>
                                            <option value="15">Portugal</option>
                                            <option value="36">Romania</option>
                                            <option value="25">Singapore</option>
                                            <option value="37">Slovakia</option>
                                            <option value="30">South Africa</option>
                                            <option value="28">South Korea</option>
                                            <option value="6">Spain</option>
                                            <option value="18">Sweden</option>
                                            <option value="19">Switzerland</option>
                                            <option value="33">Togo</option>
                                            <option value="17">United Kingdom</option>
                                            <option selected="selected" value="21">United States</option>
                                        </select>
                                    </div>
                                    <div id="states" class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                        <label for="id-state">State</label>
                                        <select class="form-control" required aria-required="true" id="id-state"
                                                name="id-state">
                                            <option value="">Choose</option>
                                            <option value="1">Alabama</option>
                                            <option value="2">Alaska</option>
                                            <option value="3">Arizona</option>
                                            <option value="4">Arkansas</option>
                                            <option value="5">California</option>
                                            <option value="6">Colorado</option>
                                            <option value="7">Connecticut</option>
                                            <option value="8">Delaware</option>
                                            <option value="9">Florida</option>
                                            <option value="10">Georgia</option>
                                            <option value="11">Hawaii</option>
                                            <option value="12">Idaho</option>
                                            <option value="13">Illinois</option>
                                            <option value="14">Indiana</option>
                                            <option value="15">Iowa</option>
                                            <option value="16">Kansas</option>
                                            <option value="17">Kentucky</option>
                                            <option value="18">Louisiana</option>
                                            <option value="19">Maine</option>
                                            <option value="20">Maryland</option>
                                            <option value="21">Massachusetts</option>
                                            <option value="22">Michigan</option>
                                            <option value="23">Minnesota</option>
                                            <option value="24">Mississippi</option>
                                            <option value="25">Missouri</option>
                                            <option value="26">Montana</option>
                                            <option value="27">Nebraska</option>
                                            <option value="28">Nevada</option>
                                            <option value="29">New Hampshire</option>
                                            <option value="30">New Jersey</option>
                                            <option value="31">New Mexico</option>
                                            <option value="32">New York</option>
                                            <option value="33">North Carolina</option>
                                            <option value="34">North Dakota</option>
                                            <option value="35">Ohio</option>
                                            <option value="36">Oklahoma</option>
                                            <option value="37">Oregon</option>
                                            <option value="38">Pennsylvania</option>
                                            <option value="39">Rhode Island</option>
                                            <option value="40">South Carolina</option>
                                            <option value="41">South Dakota</option>
                                            <option value="42">Tennessee</option>
                                            <option value="43">Texas</option>
                                            <option value="44">Utah</option>
                                            <option value="45">Vermont</option>
                                            <option value="46">Virginia</option>
                                            <option value="47">Washington</option>
                                            <option value="48">West Virginia</option>
                                            <option value="49">Wisconsin</option>
                                            <option value="50">Wyoming</option>
                                            <option value="51">Puerto Rico</option>
                                            <option value="52">US Virgin Islands</option>
                                            <option value="53">District of Columbia</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                        <label for="zipcode">Zip Code</label>
                                        <input type="text" id="zipcode" name="zipcode" class="form-control">
                                        (Needed for certain carriers.)
                                    </div>
                                    <div class="form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12">
                                        <table style="width:100%" class="table-bordered table tablelook2">
                                            <tbody>
                                            <tr>
                                                <td> Carrier</td>
                                                <td>Method</td>
                                                <td>Information</td>
                                                <td>Price!</td>
                                            </tr>
                                            <tr>
                                                <td><label class="radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                           value="option1" checked>
                                                    <i class="fa  fa-plane fa-2x"></i> </label></td>
                                                <td> By Road</td>
                                                <td>Pick up in-store</td>
                                                <td>Free!</td>
                                            </tr>
                                            <tr>
                                                <td><label class="radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                           value="option2">
                                                    <i class="fa fa-truck fa-2x"></i> </label></td>
                                                <td>By Air</td>
                                                <td>Delivery next day!</td>
                                                <td>Free!</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--/row-->

                                <div class="cartFooter w100">
                                    <div class="box-footer">
                                        <div class="pull-right"><a href="checkout-2.php" class="btn btn-primary  button-log"> &nbsp; Pembayaran
                                <i class="glyphicon glyphicon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                                <!--/ cartFooter -->

                            </div>
                        </div>
                    </div>
                    <!--/row end-->

                </div>
            </div>
        </div>
        <!--/row end-->

         <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
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
                                </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!--  /cartMiniTable-->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style="clear:both"></div>

</div>
<!-- /main-container -->


<div class="gap"></div>
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>