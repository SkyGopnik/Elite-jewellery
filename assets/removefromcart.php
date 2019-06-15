<?

session_start();

require_once 'mysql_connect.php';

if(isset($_GET['id']) && isset($_GET['position'])) {
    $getProduct = $mysql->query("SELECT `price` FROM `shop_products` WHERE `id`=".$_GET['id']);
    if($getProduct->rowCount() != 0) {
        $row = $getProduct->fetchAll();
        $_SESSION['cart_products_rows'] -= 1;
        $_SESSION['cart_price'] -= $row[0]['price'];
        $_SESSION['main_cart'][$_GET['position']] = null;
        header("Location: http://elite-jewellery.dp.ua/cart.php");
    }
}


?>