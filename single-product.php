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

            <?
                $params = array(
                    'value_id' => $_GET['id']
                );

                $searchProducts = $mysql->prepare("SELECT * FROM shop_products WHERE id = :value_id LIMIT 1");
                $searchProducts->execute($params);

                
                if($searchProducts->rowCount() != 0) {
                    $row = $searchProducts->fetchAll();
                }    
            ?>

            <div id="single-product" style="margin-top: 50px; margin-bottom: 100px;">
                <div class="container">

                    <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">

                            <div id="owl-single-product" class="owl-carousel">
                                <div class="single-product-gallery-item" id="slide1">
                                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="<?=$row[0]['img_src'];?>" />
                                </div><!-- /.single-product-gallery-item -->
                            </div><!-- /.single-product-slider -->

                        </div><!-- /.single-product-gallery -->
                    </div><!-- /.gallery-holder -->
                    <div class="no-margin col-xs-12 col-sm-7 body-holder">
                        <div class="body">
                            <div class="title"><a href="#"><?=$row[0]['name'];?></a></div>
                            <div class="brand"><?=$row[0]['brand'];?></div>

                            <div class="excerpt">
                                <p><?=$row[0]['description'];?></p>
                            </div>

                            <div class="prices">
                                <div class="price-current"><?=$row[0]['price'];?>.00 грн.</div>
                                <div class="price-prev"><?=($row[0]['price']+1000)?>.00 грн.</div>
                            </div>

                            <form method="POST" action="<? echo 'assets/addtocart.php?id='.$_GET['id'].'&category='.$_GET['category']; ?>&return=product">
                                <div class="qnt-holder">
                                    <div class="le-quantity">
                                        <a class="minus"></a>
                                        <input name="count" readonly="readonly" type="text" value="1" />
                                        <a class="plus"></a>
                                    </div>
                                    <button type="submit" id="addto-cart" class="le-button huge">Добавить в корзину</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
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
