<?

session_start();

require_once '../mysql_connect.php';
require_once '../all_functions.php';

if($_SESSION['status']) {
    if($_POST['removeproduct_button']) { 
        removeSQL($mysql, "shop_products", "name", $_POST['removename']);
        echo $_POST['removename'];
        header("Location: http://elite-jewellery.dp.ua/admin_panel/addproduct.php");
    }  
}

?>