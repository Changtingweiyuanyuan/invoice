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









<!-- 切換完成->做date前七碼=$period前七碼的話 去相對period（switch case1~6 -->




    <!-- 判斷$period屬於哪一期 -->
    <?php
        
        $thisMonth=date('m');
        $thisYear=date('Y');

if(isset($_GET['period'])){
    // while($_GET['period']=='-1'){
    //     // 沒有定義$two
    //     $two=$two+2;
    //     $prevMonth=strtotime($thisMonth,'-'.$two.' months');
        if($thisMonth>=11){
            $prevMonth=1;
            // $one=$one+1;
            // $prevYear=strtotime($thisYear,'-'.$one.' months');
            $prevYear=$thisYear-1;
            $period=$prevYear.'-'.$prevMonth.','.($prevMonth+1).'月份';
        }else{
            $preMonth=$thisMonth-2;
            $preYear=$thisYear;
            $period=$prevYear.'-'.$prevMonth.','.($prevMonth+1).'月份';
        }
    // }


}else{

    $period=$thisYear.'-'.$thisMonth.','.($thisMonth+1).'月份';
}

?>


    <div class="col-3">
    <a href="?go=add_invoice&period=-1&month=".$prevMonth.>
    <!-- <a href="?go=add_invoice&period=-1&month=<?=$prevMonth?>&year=<?=$prevYear?>"> -->
    <img src="images/angle-double-left-solid.svg" width="25px" height="25px">
    </a></div>

    <div class="col-5" name="period">
        <?= $period;?>
    </div>

    <!-- <div class="col-3">
    <a href="?go=add_invoice&period=+1&month=
    <img src="images/angle-double-right-solid.svg" width="25px" height="25px">
    </a></div> -->



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