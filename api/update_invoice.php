<?php
include_once "../base.php";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$sql="update
        `invoices`
    set
        `code`='{$_POST['code']}',
        `number`='{$_POST['number']}',
        `date`='{$_POST['date']}',
        `payment`='{$_POST['payment']}' 
    where
        `id`='{$_POST['id']}'";

// exec更新資料不需要回傳資料 如果要回傳可以用query
$pdo->exec($sql);

if($pdo->exec($sql)==0){
    header("location:../index.php?do=invoice_list");
    
}else{echo '更新失敗';}
// header("location:../index.php?do=invoice_list");

?>