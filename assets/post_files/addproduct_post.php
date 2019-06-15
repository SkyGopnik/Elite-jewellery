<?

session_start();

if($_SESSION['status']) {

    require_once '../mysql_connect.php';
    require_once '../all_functions.php';


    if($_POST['addproduct_button']) {
        $params = array(
            'value_id' => 0,
            'value_name' => $_POST['name'],
            'value_category' => $_POST['category'],
            'value_brand' => $_POST['brand'],
            'value_price' => $_POST['price'],
            'value_img_src' => $_POST['img_src'], 
            'value_count' => $_POST['count'],
            'value_description' => $_POST['description']
        );

        insertSQL($mysql, $params, 'shop_products');

        header("Location: http://elite-jewellery.dp.ua/admin_panel/addproduct.php");
    }
 
} else { 
    header("Location: http://elite-jewellery.dp.ua/authentication.php");
}

?>