
<header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">

            <!-- Navbar -->
            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="ti-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="ti-close"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                            <li class="negara"><a class="ico-negara" href="?lang=id"><img src="<?php echo $img; ?>ind.png" class="logo" alt=""></a></li>
                            <li class="negara"><a class="ico-negara" href="?lang=en"><img src="<?php echo $img; ?>en.png" class="logo" alt=""></a></li>
                        </ul>

                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="ti-menu"></i>
                        </button>
                        <a class="navbar-brand sm-text-center" href="index.php">
                            <img src="<?php echo $img; ?>logo-biru.png" class="logo" alt="">
                            
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="hvr-underline-from-center"><?php echo $lang['MENU_HOME'];?></a></li>                    
                            <li><a href="about.php" class="hvr-underline-from-center"><?php echo $lang['MENU_COMPANY'];?></a></li>
                            <li><a href="services.php" class="hvr-underline-from-center"><?php echo $lang['MENU_SERVICES'];?></a></li>
                            <li><a href="#" class="hvr-underline-from-center"><?php echo $lang['MENU_TREATMENT'];?></a></li>
                            <li><a href="contacts.php" class="hvr-underline-from-center"><?php echo $lang['MENU_CONTACT'];?></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>



</header>
