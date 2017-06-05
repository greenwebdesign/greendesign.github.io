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
                <li><a href="index.php">Home</a></li>
                <li><a href="view_cart.php">Cart</a></li>
                <li class="active"> Checkout</li>
                <li class="view-cart"><a href="view-cart.php" ><i class="glyphicon glyphicon-shopping-cart" ></i> View Cart</a></li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Checkout</span></h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
             <h5 class="caps"><a href="produk.php" class="btn btn-primary  button-log"><i class="glyphicon glyphicon-chevron-left"></i> Kembali Belanja </a></h5>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                    <div class="w100 clearfix">
                        <ul class="orderStep orderStepLook2">
                            <li class="active"><a href="checkout-1.php"> <i class="ti-location-pin "></i> <span> Alamat</span></a></li>
                            <li><a href="checkout-2.php"><i class="ti-truck "> </i><span>Pengiriman</span> </a></li>
                            <li><a href="checkout-3.php"><i class="ti-money  "> </i><span>Pembayaran</span> </a></li>
                            <li><a href="checkout-4.php"><i class="ti-check "> </i><span>Order</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>


                    <div class="w100 clearfix">
                        <div class="row userInfo">
                            <div class="col-lg-12">
                                <h2 class="block-title-2"> Untuk menambahkan alamat baru, isi formulir di bawah ini. </h2>
                            </div>

                            <form>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group required">
                                        <label for="InputName">Nama Depan <sup>*</sup> </label>
                                        <input required type="text" class="form-control" id="InputName"
                                               placeholder="Nama Depan">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputLastName">Nama Belakang <sup>*</sup> </label>
                                        <input required type="text" class="form-control" id="InputLastName"
                                               placeholder="Nama Belakang">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail">Email </label>
                                        <input type="text" class="form-control" id="InputEmail" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputCompany">Perusahaan </label>
                                        <input type="text" class="form-control" id="InputCompany" placeholder="Perusahaan">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputAddress">Alamat <sup>*</sup> </label>
                                        <input required type="text" class="form-control" id="InputAddress"
                                               placeholder="Alamat">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputCity">Kota <sup>*</sup> </label>
                                        <input required type="text" class="form-control" id="InputCity"
                                               placeholder="Kota">
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group required">
                                        <label for="InputZip">Kode Pos <sup>*</sup> </label>
                                        <input required type="text" class="form-control" id="InputZip"
                                               placeholder="Kode Pos">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputCountry">Negara <sup>*</sup> </label>
                                        <select class="form-control" required aria-required="true" id="InputCountry"
                                                name="InputCountry">
                                            <option value="">- Pilih -</option>
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
                                            <option value="21">United States</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputAdditionalInformation">Informasi tambahan</label>
                                        <textarea rows="3" cols="26" name="InputAdditionalInformation"
                                                  class="form-control" id="InputAdditionalInformation"></textarea>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputMobile">No. Telpon <sup>*</sup></label>
                                        <input required type="tel" name="InputMobile" class="form-control"
                                               id="InputMobile">
                                    </div>
                                    <div class="form-group required">
                                        <label for="addressAlias">Harap berikan judul alamat untuk referensi di kemudian hari.
                                            <sup>*</sup></label>
                                        <input required type="text" value="Alamat saya" name="addressAlias"
                                               class="form-control" id="addressAlias">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/row end-->

                    </div>
                    <div class="cartFooter w100">
                        <div class="box-footer">
                            <div class="pull-right"><a href="checkout-2.php" class="btn btn-primary  button-log"> &nbsp; Pengiriman
                                <i class="glyphicon glyphicon-chevron-right"></i></a></div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
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
<!-- /.main-container-->
<div class="gap"></div>
        <!--========== END PAGE CONTENT ==========-->

        <?php include $layout . 'footer.php'; ?>