<?

session_start();

require_once '../mysql_connect.php';
require_once '../all_functions.php';

if($_POST['addnewcomment']) {
    $params = array(
        'value_id' => 0, 
        'value_comment_date' => strtotime(date('d-m-o G:i')),
        'value_product_id' => $_GET['id'],
        'value_name_surname' => $_POST['surname']." ".$_POST['name'],
        'value_email' => $_POST['email'],
        'value_comment_text' => $_POST['comment'],  
        'value_is_visible' => 0 
    );

    insertSQL($mysql, $params, 'shop_comments');
    header("Location: http://elite-jewellery.dp.ua/infofile.php?message=Вы успешно добавили новый комментарий, сейчас он находится на рассмотрение.");
}