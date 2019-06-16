<?
require_once 'mysql_connect.php';

function updateSQL($mysql, $params, $table_name, $where_name) {
    $array_keys = array_keys($params);
    for ($i = 0; $i < count($array_keys); $i++) { 
        $array_update[$i] = substr($array_keys[$i], 6);
    }
    for ($i = 0; $i < count($array_keys); $i++) { 
        if($i != count($array_keys)-1)
            $array_keys[$i] = $array_update[$i]." = :".$array_keys[$i].",";
        else
            $array_keys[$i] = $array_update[$i]." = :".$array_keys[$i];
    }
    $update = $mysql->prepare("UPDATE `{$table_name}` SET ".implode($array_keys)." WHERE ".$where_name);
    $updateValues = $update->execute($params);

    if($updateValues) {
        return "All is okey.";
    } else {
        return $mysql->errorInfo();
    }
}

function insertSQL($mysql, $params, $table_name) {
    $array_keys = array_keys($params);
    for ($i = 0; $i < count($array_keys); $i++) { 
        if($i != count($array_keys)-1)
            $array_keys[$i] = ":".$array_keys[$i].",";
        else
            $array_keys[$i] = ":".$array_keys[$i];
    }
    $insert = $mysql->prepare("INSERT INTO `{$table_name}` VALUES (".implode($array_keys).")");
    $insertValue = $insert->execute($params);

    if($insertValue) {
        return "All is okey.";
    } else {
        return $mysql->errorInfo();
    }
} 
  
function removeSQL($mysql, $table_name, $value_where, $value_value) {
    $mysql->query("DELETE FROM `{$table_name}` WHERE `{$value_where}` = '".$value_value."'");
}

function getSum($mysql, $date, $time) {
    $getSum = $mysql->query("SELECT SUM(price) FROM `shop_orders` WHERE `order_date`>".strtotime(date($date))." AND `order_date`<".(strtotime(date($date))+$time)."");
    $row = $getSum->fetchAll();
    if(!is_null($row[0][0]))
        return $row[0][0];
    else
        return 0;
} 

function getOrdersCount($mysql, $date, $time) {
    $getOrders = $mysql->query("SELECT * FROM `shop_orders` WHERE `order_date`>".strtotime(date($date))." AND `order_date`<".(strtotime(date($date))+$time)."");
    return $getOrders->rowCount();
}