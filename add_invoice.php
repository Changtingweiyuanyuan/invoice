<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增發票頁面</title>
    <link rel=stylesheet type="text/css" href="invoice.css">

</head>
<body>
<?php session_start();?>
<div class="text-center">
<?php
if(isset($_SESSION['insert_inv'])){
    echo $_SESSION['insert_inv'];
}
?>
</div>



<form action="inv_api/insert_inv.php" class="p-4" method="post">
    <span>發票號碼 </span>
    <input type="text" name="code" maxlength="2" class="col-2" text-transform: lowercase>
    <input type="text" name="number" maxlength="8" class="col-4"><br>

    <span>發票金額 </span>
    <input type="text" name="payment" onkeyup="value=value.replace(/[^\d]/g,'')"><br>

    <span>發票日期 </span>
    <input type="date" name="date"><br>

    <span>發票期別 </span>
    <div class="row p-3">



<!-- 切換完成->做date前七碼=$period前七碼的話 去相對period（switch case1~6 -->




    <!-- 判斷$period屬於哪一期 -->
<?php
$m=isset($_GET["month"])? $_GET["month"]:date('m');
$y=isset($_GET['year'])? $_GET['year']:date('Y');

if($m>=11){$nextm=1;$nexty=$y+1;}
else{$nextm=$m+2;$nexty=$y;}
if($m<=2){$prem=11;$prey=$y-1;}
else{$prem=$m-2;$prey=$y;}

if(isset($_GET['period'])){
        if($_GET['period']=="+1"){
            if($_GET['month']%2=='1'){
                $period=$y.'-'.$m.','.($m+1).'月份';
                $_SESSION['period']=$m.($m+1);
                // echo $_SESSION['period'];
            }elseif($_GET['month']%2=='0'){
                $period=$y.'-'.($m-1).','.$m.'月份';
                $_SESSION['period']=($m-1).$m;
                // echo $_SESSION['period'];
            }
        }
        elseif($_GET['period']=="-1"){
            if($_GET['month']%2=='1'){
                $period=$y.'-'.$m.','.($m+1).'月份';
                $_SESSION['period']=$m.($m+1);
                // echo $_SESSION['period'];
            }elseif($_GET['month']%2=='0'){
                $period=$y.'-'.($m-1).','.$m.'月份';
                $_SESSION['period']=($m-1).$m;
                // echo $_SESSION['period'];
            }
        }
}else{
        $m=date('m');
        $y=date('Y');
    if($m=='12'){
            $period=$y.'-'.($m-1).','.$m.'月份';
            $_SESSION['period']=($m-1).$m;
            // echo $_SESSION['period'];
        }elseif($m%2=='1'){
            $period=$y.'-'.$m.','.($m+1).'月份';
            $_SESSION['period']=$m.($m+1);
            // echo $_SESSION['period'];
        }else{
            $period=$y.'-'.($m-1).','.$m.'月份';
            $_SESSION['period']=($m-1).$m;
            // echo $_SESSION['period'];
        }
}

?>

    <div class="col-3">
    <a href="?go=add_invoice&period=-1&year=<?=$prey?>&month=<?=$prem?>">
    <img src="images/angle-double-left-solid.svg" width="25px" height="25px">
    </a></div>

    <div class="col-5" name="period">
        <?= $period;?>
    </div>

    <div class="col-3">
    <a href="?go=add_invoice&period=+1&year=<?=$nexty?>&month=<?=$nextm?>">
    <img src="images/angle-double-right-solid.svg" width="25px" height="25px">
    </a></div>



<br><br>    

    <input type="submit" value="送出" class="btn alert-danger col-5 m-auto">
    <input type="reset" value="重置" class="btn alert-dark col-5 m-auto">
</form>



<?php

include_once "base.php";


?>

</body>
</html>