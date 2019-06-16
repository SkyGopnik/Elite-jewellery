<?

session_start();

require_once '../mysql_connect.php';
require_once '../all_functions.php';

if($_SESSION['status']) {
    if($_POST['hidecomment']) {
        $mysql->query("UPDATE `shop_comments` SET `is_visible`=0 WHERE `comment_date`=".$_GET['date']." AND `name_surname`='".$_GET['namesur']."' AND `product_id`=".$_GET['id']);
        header("Location: http://elite-jewellery.dp.ua/admin_panel/comments.php");
    }
    
    if($_POST['showcomment']) {
        $mysql->query("UPDATE `shop_comments` SET `is_visible`=1 WHERE `comment_date`=".$_GET['date']." AND `name_surname`='".$_GET['namesur']."' AND `product_id`=".$_GET['id']);
        header("Location: http://elite-jewellery.dp.ua/admin_panel/comments.php");
    } 
}