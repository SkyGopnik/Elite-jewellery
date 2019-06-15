<?

session_start();

require_once '../mysql_connect.php';
require_once '../all_functions.php';

if($_POST['neworder']) {
    for ($i=0; $i < count($_SESSION['main_cart']); $i++) { 
        if(is_numeric($_SESSION['main_cart'][$i])) {
            $getProduct = $mysql->query("SELECT * FROM `shop_products` WHERE `id`=".$_SESSION['main_cart'][$i]);
            if($getProduct->rowCount() != 0) {
                $row = $getProduct->fetchAll();
                
                if(strcasecmp($_POST['delivery'], "самовывоз") == 0) 
                    $delivery = "самовывоз";
                else
                    $delivery = "доставка";

                $params = array(
                    'value_id' => 0, 
                    'value_oder_time' => strtotime(date('d-m-o G:i')),
                    'value_name' => $row[0]['name'], 
                    'value_price' => $row[0]['price'],
                    'value_adress' => null,
                    'value_delivery' => $delivery,
                    'value_email' => $_POST['email'],
                    'value_name_surname' => $_POST['name']." ".$_POST['surname'],
                    'value_phone_number' => $_POST['phone_number'],
                    'value_is_visible' => 1             
                );

                insertSQL($mysql, $params, 'shop_orders');
                header("Location: http://elite-jewellery.dp.ua/index.php"); 
            }
        } 
    }

    $_SESSION['main_cart'] = array();
    $_SESSION['cart_price'] = 0;
    $_SESSION['cart_products_rows'] = 0;
}

?>