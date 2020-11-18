<?php
$dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo=new PDO($dsn,'root','');

date_default_timezone_set("Asia/Taipei");
session_start();


// 中獎號碼的陣列
$awardStr=['頭','二','三','四','五','六'];

?>