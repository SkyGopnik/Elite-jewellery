<?
session_start();

require_once 'assets/mysql_connect.php';
 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>MediaCenter - Responsive eCommerce Template</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/style.css">
	    <link rel="stylesheet" href="assets/css/colors/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">

	    <!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="wrapper">
            <!-- ============================================================= HEADER ============================================================= -->
			<? require_once 'assets/header.php'; ?> 
			<!-- ============================================================= HEADER : END ============================================================= -->
            <div id="top-banner-and-menu" class="homepage2">
                <div class="container">
                    <div class="col-xs-12">
                        <!-- ========================================== SECTION – HERO ========================================= -->
                        <div id="hero">
                            <div id="owl-main" class="owl-carousel height-lg owl-inner-nav owl-ui-lg">

                                <div class="item" style="background-image: url(assets/images/sliders/slider02.jpg);">
                                    <div class="container-fluid">
                                        <div class="caption vertical-center text-left right" style="padding-right:0;">
                                            <div class="big-text fadeInDown-1">
                                                Сэкономьте до<span class="big">400<span class="sign">руб</span></span>
                                            </div>

                                            <div class="excerpt fadeInDown-2">
                                                скидки на все товары <br>
                                                только до завтра <br>
                                                успейте купить
                                            </div> 
                                            <div class="button-holder fadeInDown-3">
                                                <a href="single-product.html" class="big le-button ">Быстрее за покупками</a>
                                            </div>
                                        </div><!-- /.caption -->
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                                <div class="item" style="background-image: url(assets/images/sliders/slider04.jpg);">
                                    <div class="container-fluid">
                                        <div class="caption vertical-center text-left left" style="padding-left:7%;">
                                            <div class="big-text fadeInDown-1">
                                                Хотите<span class="big">200<span class="sign">руб</span></span>скидку?
                                            </div>

                                            <div class="excerpt fadeInDown-2">
                                                только на пк
                                            </div>
                                            <div class="button-holder fadeInDown-3">
                                                <a href="single-product.html" class="big le-button ">Быстрее за покупками</a>
                                            </div>
                                        </div><!-- /.caption -->
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                            </div><!-- /.owl-carousel -->
                        </div>
                        <!-- ========================================= SECTION – HERO : END ========================================= -->
                    </div>
                </div>
            </div><!-- /.homepage2 -->

            <div id="products-tab" class="wow fadeInUp">
                <div class="container">
                    <h1 class="section-title">Новые товары</h1>
                    <div class="product-grid-holder">
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>новый!</span></div>
                                <div class="image">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">добавить в корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>новый!</span></div>
                                <div class="image">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-02.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">White lumia 9001</a>
                                    </div>
                                    <div class="brand">nokia</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">добавить в корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>новый!</span></div>
                                <div class="image">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">добавить в корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>новый!</span></div>
                                <div class="image">
                                    <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">Netbook Acer TravelMate
                                            B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">добавить в корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================================= RECENTLY VIEWED ========================================= -->
            <section id="recently-reviewd" class="wow fadeInUp" style="background-color: #F9F9F9;">
                <div class="container">
                    <div class="carousel-holder hover">
                        <h2 class="h1">Недавно просмотренные</h2>
                        <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                            <div class="no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div>
                                    <div class="image">
                                        <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">LC-70UD1U 70" class aquos 4K ultra HD</a>
                                        </div>
                                        <div class="brand">Sharp</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->

                            <div class="no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">cinemizer OLED 3D virtual reality TV Video</a>
                                        </div>
                                        <div class="brand">zeiss</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->

                            <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                                        </div>
                                        <div class="brand">dell</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->

                            <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                                        </div>
                                        <div class="brand">harman</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->

                            <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon green"><span>bestseller</span></div>
                                    <div class="image">
                                        <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">netbook acer travel B113-E-10072</a>
                                        </div>
                                        <div class="brand">acer</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->

                            <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">iPod touch 5th generation,64GB, blue</a>
                                        </div>
                                        <div class="brand">apple</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->

                            <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                                        </div>
                                        <div class="brand">dell</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->

                            <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                       <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                                        </div>
                                        <div class="brand">harman</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">добавить в корзину</a>
                                        </div>
                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->
                        </div><!-- /#recently-carousel -->

                    </div><!-- /.carousel-holder -->
                </div><!-- /.container -->
            </section><!-- /#recently-reviewd -->
            <!-- ========================================= RECENTLY VIEWED : END ========================================= -->

            <!-- ========================================= TOP BRANDS ========================================= -->
            <section id="top-brands" class="wow fadeInUp">
                <div class="container">
                    <div class="carousel-holder" >

                        <div class="title-nav">
                            <h1>Лучшие бренды</h1>
                            <div class="nav-holder"></div>
                        </div><!-- /.title-nav -->

                        <div id="owl-brands" class="owl-carousel brands-carousel">

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-01.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-02.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-03.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-04.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-01.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-02.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-03.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-04.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                        </div><!-- /.brands-caresoul -->

                    </div><!-- /.carousel-holder -->
                </div><!-- /.container -->
            </section><!-- /#top-brands -->
            <!-- ========================================= TOP BRANDS : END ========================================= -->

            <!-- ============================================================= FOOTER ============================================================= -->
            <? require_once 'assets/footer.php'; ?>
            <!-- ============================================================= FOOTER : END ============================================================= -->
        </div><!-- /.wrapper -->

		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script src="assets/js/jquery-migrate-1.2.1.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyDDZJO4F0d17RnFoi1F2qtw4wn6Wcaqxao&sensor=false&amp;language=en"></script>		<script src="assets/js/gmap3.min.js"></script>
		<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/css_browser_selector.min.js"></script>
		<script src="assets/js/echo.min.js"></script>
		<script src="assets/js/jquery.easing-1.3.min.js"></script>
		<script src="assets/js/bootstrap-slider.min.js"></script>
	    <script src="assets/js/jquery.raty.min.js"></script>
	    <script src="assets/js/jquery.prettyPhoto.min.js"></script>
	    <script src="assets/js/jquery.customSelect.min.js"></script>
	    <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/buttons.js"></script>
		<script src="assets/js/scripts.js"></script>
    </body>
</html>
