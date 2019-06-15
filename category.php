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

	    <title>Responsive eCommerce Template</title>

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

            <section id="category-grid">
                <div class="container">
                    <!-- ========================================= SIDEBAR ========================================= -->
                    <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
                        <!-- ========================================= PRODUCT FILTER ========================================= -->
                        <div class="widget">
                            <form>
                                <h1>Фильтр товаров</h1>
                                <div class="body bordered">

                                    <div class="category-filter">
                                        <h2>Бренды</h2>
                                        <hr>
                                        <ul>
                                            <?
                                                foreach ($mysql->query("SELECT DISTINCT `category` FROM `shop_products`") as $row) {
                                                    if($_GET['category'] == $row['category'])
                                                        echo '<li><input checked="checked"  class="le-checkbox" type="checkbox" /> <label>'.$row['category'].'</label> <span class="pull-right">'.$row['count'].'</span></li>';
                                                    else
                                                        echo '<li><input  class="le-checkbox" type="checkbox" /> <label>'.$row['category'].'</label> <span class="pull-right">'.$row['count'].'</span></li>';
                                                }
                                            ?>
                                        </ul>
                                    </div><!-- /.category-filter -->

                                    <div class="price-filter">
                                        <!-- <h2>Цена</h2>
                                        <hr>
                                        <div class="price-range-holder">

                                            <input type="text">

                                            <span class="min-max">
                                                Цена: $89 - $2899
                                            </span> -->
                                        <!-- </div> -->
                                        <span class="filter-button">
                                            <a href="#">Фильтровать</a>
                                        </span>
                                    </div>

                                </div><!-- /.body -->
                            </form>
                        </div><!-- /.widget -->
                        <!-- ========================================= PRODUCT FILTER : END ========================================= -->

                        <!-- ========================================= FEATURED PRODUCTS ========================================= -->
                        <div class="widget">
                            <h1 class="border">Рекомендуемые</h1>
                            <ul class="product-list">
                                <?
                                    foreach ($mysql->query("SELECT * FROM `shop_products` LIMIT 5") as $row) {
                                        echo '
                                            <li class="sidebar-product-list-item">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 no-margin">
                                                        <a href="#" class="thumb-holder">
                                                            <img alt="" src="assets/images/blank.gif" data-echo="'.$row['img_src'].'" />
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-8 col-sm-8">
                                                        <a href="single-product.php?id='.$row['id'].'&category='.$row['category'].'&count=1">'.$row['name'].'</a>
                                                        <div class="price">
                                                            <div class="price-prev">'.($row['price']+1000).' грн.</div>
                                                            <div class="price-current">'.$row['price'].' грн.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        ';
                                    }
                                ?>
                            </ul><!-- /.product-list -->
                        </div><!-- /.widget -->
                        <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
                    </div>
                    <!-- ========================================= SIDEBAR : END ========================================= -->

                    <!-- ========================================= CONTENT ========================================= -->

                    <div class="col-xs-12 col-sm-9 no-margin wide sidebar">
                        <section id="gaming">
                            <div class="grid-list-products"> 
                                <h2 class="section-title"><? echo $_GET['category']; ?></h2>
                                <div class="tab-content">
                                    <div id="grid-view" class="products-grid fade tab-pane in active">
                                        <div class="product-grid-holder">
                                            <div class="row no-margin">
                                                <? 
                                                    if(isset($_GET['category'])) {
                                                        $params = array(
                                                            'value_category' => $_GET['category']
                                                        );
    
                                                        $searchProducts = $mysql->prepare("SELECT * FROM shop_products WHERE category = :value_category");
                                                        $searchProducts->execute($params);
                                                    } else {
                                                        $searchProducts = $mysql->query("SELECT * FROM shop_products");
                                                    }
                                                    
                                                    if($searchProducts->rowCount() != 0) {
                                                        foreach ($searchProducts->fetchAll() as $row) {
                                                            echo '
                                                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                                                    <div class="product-item"> 
                                                                        <div class="image">
                                                                            <img alt="" src="assets/images/blank.gif" data-echo="'.$row['img_src'].'" />
                                                                        </div>
                                                                        <div class="body">
                                                                            <div class="title">
                                                                                <a href="single-product.php?id='.$row['id'].'&category='.$_GET['category'].'&count=1">'.$row['name'].'</a>
                                                                            </div>
                                                                            <div class="brand">'.$row['brand'].'</div>
                                                                        </div> 
                                                                        <div class="prices">
                                                                            <div class="price-prev">'.($row['price']+1000).'.00 грн.</div>
                                                                            <div class="price-current pull-right">'.$row['price'].'.00 грн.</div>
                                                                        </div>
                                                                        <div class="hover-area">
                                                                            <div class="add-cart-button">
                                                                                <a href="assets/addtocart.php?id='.$row['id'].'&category='.$_GET['category'].'&count=1" class="le-button">Добавить в корзину</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ';
                                                        }
                                                    } else {
                                                        echo "<h1>Ничего не найдено!</h1>";
                                                    }

                                                ?>

                                            </div><!-- /.row -->
                                        </div><!-- /.product-grid-holder -->

                                        <div class="pagination-holder">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 text-left">
                                                    <ul class="pagination ">
                                                        <li class="current"><a  href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">next</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.pagination-holder -->
                                    </div><!-- /.products-grid #grid- view -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.grid-list-products -->

                        </section><!-- /#gaming -->
                    </div><!-- /.col -->
                    <!-- ========================================= CONTENT : END ========================================= -->
                </div><!-- /.container -->
            </section><!-- /#category-grid -->

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
