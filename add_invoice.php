<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增發票頁面</title>
    <link rel=stylesheet type="text/css" href="invoice.css">

</head>
<body>
    
<!-- session_start(); -->

<form action="?go=add_invoice" class="p-4" method="post">
    <span>發票號碼 </span>
    <input type="text" name="code" maxlength="2" class="col-2" onkeyup="value=value.replace(/[^\d]/g,'')">
    <input type="text" name="nember" maxlength="8" class="col-4"><br>

    <span>發票金額 </span>
    <input type="text" name="payment" onkeyup="value=value.replace(/[^\d]/g,'')"><br>

    <span>發票日期 </span>
    <input type="date" name="payment"><br>

    <span>發票期別 </span>
    <div class="row p-3">









<!-- 切換完成->做date前七碼=$period前七碼的話 去相對period（switch case1~6 -->




    <!-- 判斷$period屬於哪一期 -->
    <?php
        
$mmm=[
    '1,2','3,4','5,6','7,8','9,10','11,12'
];


if(isset($_GET['period'])){
        if($_GET['period']=="+1"){
            $m=$_GET['month'];
            if($m>='11'){
                $nextm='1';
                $y=date('Y')+1;
                $period=$y.'-'.$nextm.','.($nextm+1).'月份';
            }elseif($m%2=='1'){
                $nextm=$m+2;
                $y=date('Y');
                $period=$y.'-'.$nextm.','.($nextm+1).'月份';
            }else{
                $nextm=$m+2;
                $y=date('Y');
                $period=$y.'-'.($nextm-1).','.$nextm.'月份';
            }
        }elseif($_GET['period']=="-1"){
            $m=$_GET['month'];
            if($m<='2'){
                $prem='12';
                $y=date('Y')-1;
                $period=$y.'-'.($prem-1).','.$prem.'月份';
            }elseif($m%2=='1'){
                $prem=$m-2;
                $y=date('Y');
                $period=$y.'-'.$prem.','.($prem+1).'月份';
            }else{
                $prem=$m-2;
                $y=date('Y');
                $period=$y.'-'.($prem-1).','.$prem.'月份';
            }
        }
}else{
    $m=date('m');
    $y=date('Y');
    if($m=='12'){
        $period=$y.'-'.($m-1).','.$m.'月份';
    }elseif($m%2=='1'){
        $period=$y.'-'.$m.','.($m+1).'月份';
    }else{$period=$y.'-'.($m-1).','.$m.'月份';}
}

?>


    <div class="col-3">
    <a href="?go=add_invoice&period=+1&month=<?=date('m')-1;?>">
    <img src="images/angle-double-left-solid.svg" width="25px" height="25px">
    </a></div>

    <div class="col-5" name="period">
        <?= $period;?>
    </div>

    <div class="col-3">
    <a href="?go=add_invoice&period=+1&month=<?=date('m')+1;?>">
    <img src="images/angle-double-right-solid.svg" width="25px" height="25px">
    </“a></div>



<br><br>    

    <input type="submit" value="送出" class="btn alert-danger adbtn col-5 m-auto">
    <input type="reset" value="重置" class="btn alert-dark adbtn col-5 m-auto">
</form>



<?php

include_once "base.php";
// $sql="INSERT INTO `invoices`(`code`,`number`,`period`,`payment`,`date`) VALUES ({$_POST['code']}','{$_POST['number']}','$期別','{$_POST['payment']}','{$_POST['date']}')";

// 標點符號有錯

?>

</body>
</html>