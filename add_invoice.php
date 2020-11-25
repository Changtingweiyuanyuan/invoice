<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增發票頁面</title>
    <style>
    form>*{
        margin:5px;
    }
    .adbtn{
        text-shadow: 0 0 0 #fff;
    }
    </style>
</head>
<body>
    


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

<!-- 判斷$period屬於哪一期 -->


<?php
        $period=date('Y-m').','.(date('m')+1).'月份';
        $month=date('m');
        $year=date('Y');

    // if(isset($_GET['month'])){$m=$_GET['month'];

        // if(isset($_GET['period'])){
        //     if($_GET['period']=="+1"){
        //         $m=$month;
        //         if($m>=11){
        //             $m=1;
        //             $month=$m;
        //             $y=$year;
        //             $y=$y+1;
        //             $year=$y;
        //             $period=$y.'-'.($m).','.($m+1).'月份';
        //         }
        //         else{
        //             $m=$m+2;
        //             $month=$m;
        //             $period=$y.'-'.($m).','.($m+1).'月份';
        //         }
        //     }else{echo $month;}



            // else{
                // 正常下一期
                // if($m<11){
                //     // echo $m;
                //     $m=$m+2;
                //     $period=$y.'-'.($m).','.($m+1).'月份';
                // }
        //         }
        //         echo $period;
        //     }else if($_GET['period']=="-1"){
        //         if(date('m')==2){
        //             // 跳去年年份
        //             $y=$y-1;
        //             $m=12;
        //             $period=$y.'-'.($m-1).','.($m).'月份';
        //         }else{
        //         // 正常上一期
        //         $period=$y.'-'.($m-2).','.($m-1).'月份<br>';
        //         $m=$m-2;
        //         }
        //         echo $period;
        // }else{$period=date('Y-m').','.(date('m')+1).'月份';
        // }else{
            
        // }
    // }
?>




<!-- 切換完成->做date前七碼=$period前七碼的話 去相對period（switch case1~6 -->







    <div class="col-2">
    <a href="?go=add_invoice&period=-1&month=<?= $m;?>&year=<?=$y?>">
    <img src="images/angle-double-left-solid.svg" width="25px" height="25px">
    </a></div>

    <!-- <div class="col-4" name="period">
        <?= $period;?>

    </div>
    <div class="col-2">
    <a href="?go=add_invoice&period=+1&month=
    <?= $month;?>
    &year=<?= $year?>">
    <img src="images/angle-double-right-solid.svg" width="25px" height="25px">
    </a></div> -->

<?php
if(isset($_GET['month'])){
$m=$_GET['month'];

}else{
$m=date('Y-m-d');
}
?>
<div class="col-4"><?= $m;?></div>
<div class="col-2">
<a href="?go=add_invoice&month=<?= date(strtotime('+1 momth',$m));?>">
<img src="images/angle-double-right-solid.svg" width="25px" height="25px">
</a></div>


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