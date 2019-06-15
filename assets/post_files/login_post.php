<?php

session_start();

require_once '../mysql_connect.php';

if($_POST['login_button']) {

    $select = $mysql->prepare("SELECT * FROM shop_authentication WHERE login = :value_login");

    $params = array(
        'value_login' => md5($_POST['login'])
    );

    $select->execute($params);
 
    if($select->rowCount() == 1) {

        $row = $select->fetch();

        if($row['login'] == md5($_POST['login']) && $row['password'] == md5($_POST['password'])) {

            $_SESSION['login'] = $row['login'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['status'] = true;
 
            header("Location: http://elite-jewellery.dp.ua/admin_panel");

        } else {

            header("Location: http://elite-jewellery.dp.ua/authentication.php");

        }

    } else {

        header("Location: http://elite-jewellery.dp.ua/authentication.php");

    }

}

?>