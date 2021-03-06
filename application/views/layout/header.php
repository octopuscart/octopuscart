<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/font-awesome.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/css//font/flaticon.css">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/owl.theme.default.min.css">
        <!-- Main Menu CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/meanmenu.min.css">
        <!-- Nivo Slider CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/select2.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/style.css">

        <!-- no slider CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/js/vendor/nouislider.min.css">

        <!--custom css style-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/custom_style.css">

        <!-- Modernizr Js -->
        <script src="<?php echo base_url(); ?>assets/theme2/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>assets/theme/js/vendors/modernizr.js"></script>

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>


    <?php
    $menulist = [
        array(
            "title" => "Women's",
            "link" => site_url("Product/ProductList/54"),
            "icon" => "flaticon-dress-1",
            "block" => "2",
            "issubmenu"=>"Yes",
            "submenu1" => [
                array(
                    "title" => "Cotton Suits",
                    "link" => site_url("Product/ProductList/70"),
                    "submenu" => [
                        array("title" => "Pakistani Suits", "link" => site_url("Product/ProductList/71"),),
                        array("title" => "Indian Suits", "link" => site_url("Product/ProductList/72"),),
                        array("title" => "Indo Western Suits", "link" => site_url("Product/ProductList/73"),),
                    ]
                ),
                array(
                    "title" => "Scarf & Hijab",
                    "link" => site_url("Product/ProductList/61"),
                    "submenu" => [
                        array("title" => "Scarf", "link" => site_url("Product/ProductList/65"),),
                        array("title" => "Hijab", "link" => site_url("Product/ProductList/66"),),
                    ]
                ),
            ],
            "submenu2" => [
                array(
                    "title" => "Sandals",
                    "link" => site_url("Product/ProductList/59"),
                    "submenu" => [
                        array("title" => "Handmade Sandals", "link" => site_url("Product/ProductList/69"),),
                    ]
                ),
                array(
                    "title" => "Shoes",
                    "link" => site_url("Product/ProductList/60"),
                    "submenu" => []
                ),
                array(
                    "title" => "Handmade Purse",
                    "link" => site_url("Product/ProductList/68"),
                    "submenu" => []
                ),
            ],
        ),
        array(
            "title" => "Men's",
            "link" => site_url("Product/ProductList/53"),
            "icon" => "flaticon-polo",
            "block" => "1",
            "issubmenu"=>"Yes",
            "submenu1" => [
                array(
                    "title" => "Shirts",
                    "link" => site_url("Product/ProductList/55"),
                    "submenu" => []),
                array(
                    "title" => "Jackets",
                    "link" => site_url("Product/ProductList/56"),
                    "submenu" => []
                ),
                array(
                    "title" => "Shoes",
                    "link" => site_url("Product/ProductList/57"),
                    "submenu" => [
                        array("title" => "Sports Shoes", "link" => site_url("Product/ProductList/58"),),
                        array("title" => "Casual Shoes", "link" => site_url("Product/ProductList/58"),),
                        array("title" => "Formal Shoes", "link" => site_url("Product/ProductList/58"),),
                    ]
                ),
            ],
        ),
        array(
            "title" => "Electronics",
            "link" => site_url("Product/ProductList/62"),
            "submenu" => [],
            "block" => "1",
            "issubmenu"=>"No",
            "icon" => "flaticon-plug",
        ),
//        array(
//            "title" => "Ready To Eat",
//            "link" => site_url("Product/ProductList/63"),
//            "submenu" => [
//                array(
//                    "title" => "Chocolate",
//                    "link" => site_url("Product/ProductList/67"),
//                    "submenu" => []
//                ),
//            ],
//        ),
//        array(
//            "title" => "Grocery",
//            "link" => site_url("Product/ProductList/64"),
//            "submenu" => [],
//        ),
        array(
            "title" => "Exculsive",
            "link" => site_url("Product/ProductList/62"),
            "submenu" => [],
            "block" => "1",
            "issubmenu"=>"No",
            "icon" => "fa fa-star-o",
        ),
//        array(
//            "title" => "Packers & Movers",
//            "link" => site_url(),
//            "submenu" => [],
//        ),
    ];
    ?>

    <style>
        .preloadimage{
            background: black;
            top: 28%;
            position: absolute;
            height:100px; 

            margin-left: -90px;
        }
    </style>

    <!-- Modal Dialog Box End Here-->
    <!-- Preloader Start Here -->
    <div id="preloader">
        <center>
            <!--<img class="preloadimage  " src="<?php echo base_url() . 'assets/theme2/img/preloader.gif' ?>" alt="logo" >-->
        </center>
    </div>
    <!-- Preloader End Here -->
    <body ng-app="App">
        <div class="wrapper-area" ng-controller="ShopController">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <!-- Add your site or application content here -->
            <!-- Header Area Start Here -->



            <script>


                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
                });
                var baseurl = "<?php echo site_url(); ?>";
                var imageurlg = "<?php echo imageserver; ?>";
                var globlecurrency = "<?php echo globle_currency; ?>";
                var avaiblecredits = 0;</script>

            <style>
                .ownmenu .dropdown.megamenu .dropdown-menu li:last-child{
                    margin-bottom: 20px;
                }

                .ownmenu .dropdown.megamenu .dropdown-menu li a{
                    line-height: 25px;
                }
                .account-wishlist ul li a {
                    font-size: 12px;
                    color: white;
                }
                .header-contact ul li a {
                    color:white;

                    letter-spacing: 2px; 
                }
                .header-contact ul li{
                    color:white;
                    letter-spacing: 2px; 
                }
            </style>

            <!-- Header Area Start Here -->
            <header>
                <input type="hidden" ng-model="showmodel" ng-init="showmodel = 0">
                <input type="hidden" ng-model="gitem_price" ng-init="showmodel = 0">
                <div class="header-area-style3" id="sticker">
                    <div class="header-top">
                        <div class="header-top-inner-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <div class="header-contact">
                                            <ul>
                                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="+(852) 6878 4014"> +(852) 6878 4014</a></li>
                                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> sales@octopuscart.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="account-wishlist">
                                            <ul>
                                                <li><a href="<?php echo site_url("Account/profile"); ?>"><i class="fa fa-lock" aria-hidden="true"></i> Account</a></li>
                                                <li><a href="<?php echo site_url("Account/profile"); ?>"><i class="fa fa-heart-o" aria-hidden="true"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> $HKD</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-top-inner-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="logo-area">
                                            <a href="<?php echo site_url(); ?>"><img class="img-responsive" src="<?php echo base_url() . 'assets/images/logo73.png'; ?>" style="height: 50px;" alt="logo"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div class="search-area">
                                            <div class="input-group" id="adv-search">
                                                <input type="text" class="form-control" placeholder="Search Product" />
                                                <div class="input-group-btn">
                                                    <div class="btn-group" role="group">
                                                        <div class="dropdown dropdown-lg">
                                                            <button type="button" class="btn btn-metro dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>All Categories</span><i class="fa fa-caret-up" aria-hidden="true"></i><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <ul class="sidenav-nav">
                                                                    <?php foreach ($menulist as $mkey => $mvalue) { ?>
                                                                        <li><a href="#"><i class="flaticon"></i><?php echo $mvalue['title']; ?></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <ul class="header-cart-area">
                                            <li>
                                                <div class="cart-area">
                                                    <a href="#"><i class="fa fa-shopping-cart"  aria-hidden="true"></i><span style="background: #f01211">{{globleCartData.total_quantity}}</span></a>
                                                    <ul ng-if="globleCartData.total_quantity">
                                                        <li  ng-repeat="product in globleCartData.products">

                                                            <div class="cart-single-product">
                                                                <div class="media">
                                                                    <div class="pull-left cart-product-img">
                                                                        <a href="#">
                                                                            <div class="product_image_back1" style="background: url({{product.file_name}});height: 80px;width: 80px;  background-size: contain;     background-repeat: no-repeat;"></div>

                                                                    <!--<img class="img-responsive" alt="product" src="{{product.file_name}}">-->
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body cart-content">
                                                                        <ul>
                                                                            <li>
                                                                                <h2 style="    white-space: nowrap;
                                                                                    overflow: hidden;
                                                                                    text-overflow: ellipsis;
                                                                                    width: 250px;"><a href="#" style="">{{product.title}}</a></h2>
                                                                                <h3>                                                                 
                                                                                    <p>
                                                                                        {{product.price|currency:" "}} X {{product.quantity}} 
                                                                                    </p>
                                                                                </h3>
                                                                            </li>
                                                                            <li>
                                                                            </li>
                                                                            <li>
                                                                                <p></p>
                                                                            </li>
                                                                            <li>
                                                                                <a class="trash" href="#." ng-click="removeCart(product.product_id)"><i class="fa fa-trash-o"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <span><span>Sub Total</span></span><span>{{globleCartData.total_price|currency:"<?php echo globle_currency; ?> "}}</span>

                                                        </li>
                                                        <li>
                                                            <ul class="checkout">
                                                                <li><a href="<?php echo site_url("Cart/details"); ?>" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                                <!--<li><a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>-->
                                                            </ul>
                                                        </li>
                                                    </ul>




                                                </div>
                                            </li>
                                            <li>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                    <div class="logo-area">
                                        <a href="<?php echo site_url(); ?>"><img class="img-responsive" src="<?php echo base_url() . 'assets/images/logo73.png'; ?>" style="height: 50px;" alt="logo"></a>
                                    </div>
                                    <div class="category-menu-area" id="category-menu-area">
                                        <h2 class="category-menu-title"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>Categories</h2>
                                        <ul class="category-menu-area-inner">
                                            <?php foreach ($menulist as $mkey => $mvalue) { ?>
                                                <li>
                                                    <a href="<?php echo $mvalue['link']; ?>">
                                                        <i class="<?php echo $mvalue['icon']; ?>"></i><?php echo $mvalue['title']; ?><span><i class="flaticon-next"></i></span>
                                                    </a>
                                                    <?php
                                                    if($mvalue['issubmenu']=='Yes'){
                                                    ?>
                                                    <ul class="dropdown-menu" style='width: <?php echo $mvalue['block'] == '2'?'600px':'200px;'  ?> '>

                                                        <?php
                                                        if ($mvalue['block'] == '2') {
                                                            ?>
                                                            <div class='col-md-6'>
                                                                <?php foreach ($mvalue['submenu1'] as $mkey1 => $mvalue1) { ?>
                                                                    <li class='menu_heading' ><a href="<?php echo $mvalue1['link']; ?>"><?php echo $mvalue1['title']; ?></a></li>
                                                                    <?php foreach ($mvalue1['submenu'] as $mkeys1 => $mvalues1) { ?>
                                                                        <li class='submenu_heading'><a href="<?php echo $mvalues1['link']; ?>"><?php echo $mvalues1['title']; ?></a></li>
                                                                    <?php }
                                                                    ?>

                                                                    <span style='margin-bottom: 10px;'></span>
                                                                <?php }
                                                                ?>
                                                            </div>
                                                            <div class='col-md-6'>
                                                                <?php foreach ($mvalue['submenu2'] as $mkey1 => $mvalue1) { ?>
                                                                    <li class='menu_heading' ><a href="<?php echo $mvalue1['link']; ?>"><?php echo $mvalue1['title']; ?></a></li>
                                                                    <?php foreach ($mvalue1['submenu'] as $mkeys1 => $mvalues1) { ?>
                                                                        <li class='submenu_heading'><a href="<?php echo $mvalues1['link']; ?>"><?php echo $mvalues1['title']; ?></a></li>
                                                                    <?php }
                                                                    ?>

                                                                    <span style='margin-bottom: 10px;'></span>
                                                                <?php }
                                                                ?>
                                                            </div>
                                                        <?php } ?>
                                                        <?php
                                                        if ($mvalue['block'] == '1') {
                                                            if(isset($mvalue['submenu1'])){
                                                            ?>
                                                            <div class='col-md-6'>
                                                                <?php foreach ($mvalue['submenu1'] as $mkeys1 => $mvalues1) { ?>
                                                                    <li class='submenu_heading'>
                                                                        <a href="<?php echo $mvalues1['link']; ?>"><?php echo $mvalues1['title']; ?></a>
                                                                    </li>
                                                                <?php }
                                                                ?>
                                                            </div>
                                                            <div class='col-md-6'></div>

                                                        <?php }
                                                        }
                                                        ?>



                                                    </ul>
                                                    <?php
                                                    }
                                                    ?>
                                                </li>

                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <div class="main-menu-area">
                                        <nav>
                                            <ul>
                                                <li class="active">
                                                    <a href="#">Home</a>
                                                    <ul>
                                                        <li><a href="">Privacy Policies </a></li>
                                                        <li><a href="">Term Of Services</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">FAQ's</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area Start Here -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mobile-menu">
                                            <nav id="dropdown">



                                                <ul>
                                                    <?php foreach ($menulist as $mkey => $mvalue) { ?>
                                                        <li>
                                                            <a href="<?php echo $mvalue['link']; ?>"><?php echo $mvalue['title']; ?></a>
                                                            <?php
                                                            if (count($mvalue['submenu'])) {
                                                                ?>

                                                                <ul >
                                                                    <?php foreach ($mvalue['submenu'] as $smkey => $smvalue) { ?>

                                                                        <li>
                                                                            <a href="<?php echo $smvalue['link']; ?>"><?php echo $smvalue['title']; ?></a>

                                                                            <?php foreach ($smvalue['submenu'] as $sb1mkey => $sb1mvalue) { ?>
                                                                                <a href="<?php echo $sb1mvalue['link']; ?>"><?php echo $sb1mvalue['title']; ?></a>
                                                                            <?php } ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>



                                                                <?php
                                                            }
                                                            ?>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>






                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area End Here -->
                    </div>
                </div>
            </header>
            <!-- Header Area End Here -->






            <!--mobile model-->


            <!--search_open-->
            <div class="modal fade model_search" id="searchModel" tabindex="-1" role="dialog" aria-labelledby="searchModelLabel">
                <div class="modal-dialog" role="document" style="margin-top: 60px;">
                    <div class="modal-content mobile_model_search">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        </div>
                        <div class="modal-body">

                            <form id="top-search-form1" action="<?php echo site_url('Product/ProductSearch'); ?>">                           
                                <input type="text" name="keyword" class="search-input1 typeahead" placeholder="Search...." required="" style="width: 100%">
                                <button type="submit" style="height: 0px;width: 0px;opacity: 0;"></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="mobileModel" tabindex="-1" role="dialog" aria-labelledby="mobileModelLabel">
                <div class="modal-dialog" role="document" style="margin-top: 60px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="mobileModelLabel">Total: {{globleCartData.total_price|currency:" "}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="cart-area cart-area1">

                                <ul ng-if="globleCartData.total_quantity">
                                    <li  ng-repeat="product in globleCartData.products">

                                        <div class="cart-single-product">
                                            <div class="media">
                                                <div class="pull-left cart-product-img">
                                                    <a href="#">
                                                        <div class="product_image_back" style="background: url({{product.file_name}});height: 80px;width: 80px;    background-size: cover;"></div>

                                                                            <!--<img class="img-responsive" alt="product" src="{{product.file_name}}">-->
                                                    </a>
                                                </div>
                                                <div class="media-body cart-content">
                                                    <ul>
                                                        <li>
                                                            <h2 style="    white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis;
                                                                width: 250px;"><a href="#" style="">{{product.title}}-{{product.item_name}}</a></h2>
                                                            <h3>                                                                 
                                                                <p>
                                                                    {{product.price|currency:" "}} X {{product.quantity}} 
                                                                </p>
                                                            </h3>
                                                        </li>


                                                        <li>
                                                            <a class="trash" href="#." ng-click="removeCart(product.product_id)"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <ul class="checkout">
                                            <li><a href="<?php echo site_url("Cart/details"); ?>" class="btn-checkout1"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                            <li><a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-checkout1"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>




                            </div>
                        </div>
                        <!--                        <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>-->
                    </div>
                </div>
            </div>

