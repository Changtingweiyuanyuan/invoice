<?php
// 資料來源名稱(數據源)="資料庫類型:主機地址;資料庫名稱;文字格式";
// php資料物件=new PDO(數據源,連接數據庫服務器的用戶,密碼);
$dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo=new PDO($dsn,'root','');




// session_start();
?>