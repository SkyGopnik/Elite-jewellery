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

            <!-- ========================================= CONTENT ========================================= -->
            <section id="checkout-page">
                <div class="container">
                    <div class="col-xs-12 no-margin">
                        <form method="POST" action="assets/post_files/neworder.php">
                            <div class="billing-address">
                                <h2 class="border h1">Дополнительная информация</h2>
                                <div class="row field-row">
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Фамилия*</label>
                                        <input class="le-input" name="surname">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Имя*</label>
                                        <input class="le-input" name="name">
                                    </div>
                                </div>

                                <!-- <div class="row field-row">
                                    <div class="col-xs-12">
                                        <label>Название компании</label>
                                        <input class="le-input" >
                                    </div>
                                </div>

                                <div class="row field-row">
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Адресс</label>
                                        <input class="le-input" data-placeholder="Название улицы" >
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label>&nbsp;</label>
                                        <input class="le-input" data-placeholder="Город" >
                                    </div>
                                </div> -->

                                <div class="row field-row">
                                    <!-- <div class="col-xs-12 col-sm-4">
                                        <label>Индекс</label> 
                                        <input class="le-input"  >
                                    </div> -->
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Email*</label>
                                        <input class="le-input" name="email">
                                    </div> 
 
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Номер телефона*</label>
                                        <input class="le-input" name="phone_number">
                                    </div>
                                </div>
                            </div>

                            <section id="your-order">
                                <h2 class="border h1">Ваш заказ</h2>
                                <?  
                                    $_SESSION['checkout_main_all_products'] = array();

                                    for ($i=0; $i < count($_SESSION['main_cart']); $i++) { 
                                        if(is_numeric($_SESSION['main_cart'][$i])) {
                                            $getProduct = $mysql->query("SELECT * FROM `shop_products` WHERE `id`=".$_SESSION['main_cart'][$i]);
                                            if($getProduct->rowCount() != 0) {
                                                $row = $getProduct->fetchAll();
                                                $_SESSION['checkout_main_all_products'][] = '
                                                    <div class="row order-item">
                                                        <div class="col-xs-12 col-sm-2 no-margin">
                                                            <img alt="" src="'.$row[0]['img_src'].'" />
                                                        </div>
                                                                            
                                                        <div class="col-xs-12 col-sm-7" style="margin-left: 30px">
                                                            <div class="title"><a href="single-product.php?id='.$row[0]['id'].'&category='.$row[0]['category'].'">'.$row[0]['name'].'</a></div>
                                                            <div class="brand">'.$row[0]['brand'].'</div>
                                                        </div>
                    
                                                        <div class="col-xs-12 col-sm-2 no-margin">
                                                            <div class="price">'.$row[0]['price'].'.00 грн.</div>
                                                        </div>
                                                    </div>
                                                ';
                                            }
                                        } 
                                    }

                                    if(empty($_SESSION['checkout_main_all_products'])) {
                                        echo "<h4 style='text-align: center;'>Корзина пуста!</h4>";
                                    } else {
                                        for ($i=0; $i < count($_SESSION['checkout_main_all_products']); $i++) { 
                                            echo $_SESSION['checkout_main_all_products'][$i];
                                        }
                                    }
                                ?>
                            </section><!-- /#your-order -->

                            <div id="total-area" class="row no-margin">
                                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                                    <div id="subtotal-holder">
                                        <ul class="tabled-data inverse-bold no-border">
                                            <li>
                                                <label>Товаров на сумму</label>
                                                <div class="value "><?=$_SESSION['cart_price'];?>.00 грн.</div>
                                            </li>
                                            <li>
                                                <label>Способ доставки</label>
                                                <div class="value">
                                                    <div class="radio-group">
                                                        <input class="le-radio" type="radio" name="delivery" value="самовывоз" checked> <div class="radio-label bold">Самовывоз</div><br>
                                                        <input class="le-radio" type="radio" name="delivery" value="доставка">  <div class="radio-label">Доставка<br></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul><!-- /.tabled-data -->

                                        <ul id="total-field" class="tabled-data inverse-bold ">
                                            <li>
                                                <label>Всего к оплате</label>
                                                <div class="value"><?=$_SESSION['cart_price'];?>.00 грн.</div>
                                            </li>
                                        </ul><!-- /.tabled-data -->

                                    </div><!-- /#subtotal-holder -->
                                </div><!-- /.col -->
                            </div><!-- /#total-area -->

                            <div class="place-order-button">
                                <input class="le-button big" type="submit" name="neworder" value="Оформить заказ">
                            </div><!-- /.place-order-button -->
                        </form>
                    </div><!-- /.col -->
                </div><!-- /.container -->
            </section><!-- /#checkout-page -->
            <!-- ========================================= CONTENT : END ========================================= -->

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
