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

            <section id="cart-page">
                <div class="container">
                    <!-- ========================================= CONTENT ========================================= -->
                    <div class="col-xs-12 col-md-9 items-holder no-margin">
                        <?  
                            $_SESSION['cart_main_all_products'] = array();

                            for ($i=0; $i < count($_SESSION['main_cart']); $i++) { 
                                if(is_numeric($_SESSION['main_cart'][$i])) {
                                    $getProduct = $mysql->query("SELECT * FROM `shop_products` WHERE `id`=".$_SESSION['main_cart'][$i]);
                                    if($getProduct->rowCount() != 0) {
                                        $row = $getProduct->fetchAll();
                                        $_SESSION['cart_main_all_products'][] = '
                                            <div class="row no-margin cart-item">
                                                <div class="col-xs-12 col-sm-2 no-margin">
                                                    <a href="single-product.php?id='.$row[0]['id'].'&category='.$row[0]['category'].'" class="thumb-holder">
                                                        <img class="lazy" src="'.$row[0]['img_src'].'" />
                                                    </a>
                                                </div>
                    
                                                <div class="col-xs-12 col-sm-5 ">
                                                    <div class="title">
                                                        <a href="single-product.php?id='.$row[0]['id'].'&category='.$row[0]['category'].'">'.$row[0]['name'].'</a>
                                                    </div>
                                                    <div class="brand">'.$row[0]['brand'].'</div>
                                                </div>

                                                <div class="col-xs-12 col-sm-2" style="margin-left: 200px">
                                                    <div class="price">
                                                        '.$row[0]['price'].' грн.
                                                    </div> 
                                                    <a class="close-btn" href="assets/removefromcart.php?id='.$row[0]['id'].'&position='.$i.'"></a>
                                                </div>
                                            </div>
                                        ';
                                    }
                                } 
                            }

                            if(empty($_SESSION['cart_main_all_products'])) {
                                echo "<h4 style='text-align: center;'>Корзина пуста!</h4>";
                            } else {
                                for ($i=0; $i < count($_SESSION['cart_main_all_products']); $i++) { 
                                    echo $_SESSION['cart_main_all_products'][$i];
                                }
                            }
                        ?>
                    </div>
                    <!-- ========================================= CONTENT : END ========================================= -->

                    <!-- ========================================= SIDEBAR ========================================= -->

                    <div class="col-xs-12 col-md-3 no-margin sidebar ">
                        <div class="widget cart-summary">
                            <h1 class="border">Корзина</h1>
                            <div class="body">
                                <ul class="tabled-data no-border inverse-bold">
                                    <li>
                                        <label>Стоимость</label>
                                        <div class="value pull-right"><?=$_SESSION['cart_price'];?>.00 грн.</div>
                                    </li>
                                </ul>
                                <ul id="total-price" class="tabled-data inverse-bold no-border">
                                    <li>
                                        <label>Всего</label>
                                        <div class="value pull-right"><h4><?=$_SESSION['cart_price'];?>.00 грн.</h4></div>
                                    </li>
                                </ul>
                                <div class="buttons-holder">
                                    <a class="le-button big" href="checkout.php" >Оформить</a>
                                    <a class="simple-link block" href="category.php" >Продолжить покупки</a>
                                </div>
                            </div>
                        </div><!-- /.widget -->

                        <div id="cupon-widget" class="widget">
                            <h1 class="border">Купон</h1>
                            <div class="body">
                                <form>
                                    <div class="inline-input">
                                        <input data-placeholder="Код купона" type="text" />
                                        <button class="le-button" type="submit">✔</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.sidebar -->

                    <!-- ========================================= SIDEBAR : END ========================================= -->
                </div>
            </section>

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
