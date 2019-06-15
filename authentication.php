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

	    <title>dResponsive eCommerce Template</title>

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

            <!-- ========================================= MAIN ========================================= -->
            <main id="authentication" class="inner-bottom-md">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <section class="section sign-in inner-right-xs">
                                <h2 class="bordered">Вход в АП</h2>
                                <p>Привет, Добро пожаловать в твой аккаунт</p>

                                <form role="form" class="login-form cf-style-1" method="POST" action="assets/post_files/login_post.php">
                                    <div class="field-row">
                                        <label>Почта</label>
                                        <input type="text" class="le-input" name="login">
                                    </div><!-- /.field-row -->

                                    <div class="field-row">
                                        <label>Пароль</label>
                                        <input type="password" class="le-input" name="password">
                                    </div><!-- /.field-row -->

                                    <div class="buttons-holder">
                                        <input type="submit" value="Войти" name="login_button" class="le-button huge">
                                    </div><!-- /.buttons-holder -->
                                </form><!-- /.cf-style-1 -->

                            </section><!-- /.sign-in -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </main><!-- /.authentication -->
            <!-- ========================================= MAIN : END ========================================= -->

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