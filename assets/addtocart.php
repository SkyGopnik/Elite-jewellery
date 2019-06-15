<?

session_start();

require_once 'mysql_connect.php';

if(is_numeric($_GET['id'])) {
    if($_POST['count'] != 0 || $_GET['count'] == 1) {
        $_SESSION['main_cart'][] = $_GET['id'];
    }
    $getProduct = $mysql->query("SELECT `price` FROM `shop_products` WHERE `id`=".$_GET['id']);
    if($getProduct->rowCount() != 0) {
        $row = $getProduct->fetchAll();
        if($_GET['return'] == 'product') {
            $_SESSION['cart_products_rows'] += 1*$_POST['count'];
            $_SESSION['cart_price'] += $row[0]['price']*$_POST['count'];
            for ($i=0; $i < $_POST['count']-1; $i++) { 
                $_SESSION['main_cart'][] = $_GET['id'];
            }
            header("Location: http://elite-jewellery.dp.ua/single-product.php?id=".$_GET['id']."&category=".$_GET['category']);
        } else {
            $_SESSION['cart_products_rows'] += 1;  
            $_SESSION['cart_price'] += $row[0]['price'];
            header("Location: http://elite-jewellery.dp.ua/category.php?category=".$_GET['category']);
        }
    }
} 

?>
