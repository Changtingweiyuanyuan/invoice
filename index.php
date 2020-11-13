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
    <style>
        .number{
            font-size:1.2rem;
            color:red;
            font-weight:bolder;
        }
    </style>
</head>
<body>

<h3 class="text-center p-3">統一發票紀錄</h3>



<nav class="container col-lg-8 col-ms-10">
<ul class="nav justify-content-around nav-tabs border p-3">

<!-- 建立陣列 -->
<?php
    $month=[
        1=>'1,2月',
        2=>'3,4月',
        3=>'5,6月',
        4=>'7,8月',
        5=>'9,10月',
        6=>'11,12月'
    ];
$m=ceil(date("m")/2);

?>
    <il class="nav-item"><a href="index.php">回首頁</a></il>
    <il class="nav-item"><?=$month[$m];?></il>
    <il class="nav-item"><a href="?do=invoice_list">當期發票</a></il>
    <il class="nav-item"><a href="?do=award_numbers">兌獎</a></il>
    <il class="nav-item"><a href="?do=add_awards">輸入獎號</a></il>
</ul>


<div class="border d-flex p-2 mx-auto">

<!-- 中間內容 -->






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

</div>
</nav>


</body>
</html>