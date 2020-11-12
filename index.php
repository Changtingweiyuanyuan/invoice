<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>統一發票紀錄及對獎系統</title>
</head>
<body>


<!-- 用include來寫主要程式,<head><body>不用一直重新寫 -->
<!-- 但要寫:什麼時候該引入對的畫面 -->
<?php
if(isset($_GET['do'])){
    $file=$_GET['do'].".php";
    // file="invoice.php"
    include $file;
    // include invoice.php;
}else{
include "main.php";
}
?>


</body>
</html>