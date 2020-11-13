<?php

// 專門做刪除的頁面

include_once "../base.php";

$pdo->exec("delete frome `invoices` where `id`='{$_GET['id']}'");
header("location:../index.php?do=invoice_list");

?>