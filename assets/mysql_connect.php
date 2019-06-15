<?php

//MYSQL CONNECT
$db_host = "localhost";
$db_name = "b95104r0_jewell";
$db_login = "b95104r0_jewell";
$db_password = "fdjsal*^14562%2djal"; 

//DO NOT TOUCH!!!
$mysql = new PDO("mysql:host=$db_host;dbname=$db_name", $db_login, $db_password);
$mysql->query("SET NAMES 'utf8'");

?>