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
    <span>發票號碼 </span><input type="text" name="code" maxlength="2" class="col-2">
    <input type="text" name="nember" maxlength="8" class="col-4"><br>
    <span>發票金額 </span><input type="text" name="payment"><br>

    <span>發票期別 </span>
    <div class="row p-3">

<!-- 判斷$period屬於哪一期 -->



        <div class="col-2"><a href="?go=add_invoice&period=-1"><img src="angle-double-left-solid.svg" width="25px" height="25px"></a></div>
        <div class="col-4" name="period">
        <?php

        // $period=date('Y-m').','.(date('m')+1).'月份';
        // $month[]=[
        //     1=>'1.2月份',
        //     2=>'3.4月份',
        //     2=>'5.6月份',
        //     2=>'7.8月份',
        //     2=>'9.10月份',
        //     2=>'11.12月份'
        // ];
        $m=date('m');
        $y=date('Y');

        if(isset($_GET['period'])){
            if($_GET['period']=="+1"){
                if(date('m')==11){
                    // 跳明天年份
                    $y=$y+1;
                    $m=1;
                    $period=$y.'-'.$m.','.($m+1).'月份';
                }else{
                // 正常下一期
                $period=$y.'-'.($m+2).','.($m+3).'月份';
                $m=$m+2;
                }

                echo $period;
            }elseif($_GET['period']=="-1"){
                if(date('m')<=2){
                    // 跳去年年份
                    $y=$y-1;
                    $m=12;
                    $period=$y.'-'.($m-1).','.($m).'月份';
                }else{
                // 正常上一期
                $period=$y.'-'.($m-2).','.($m-1).'月份<br>';
                $m=$m-2;
                }

                echo $period;
            }
        }else{
            $period=date('Y-m').','.(date('m')+1).'月份';
            echo $period;
        }

// 切換完成->做date前七碼=$period前七碼的話 去相對period（switch case1~6)



?>
</div>
    <div class="col-2">
    <a href="?go=add_invoice&period=+1">
    <img src="angle-double-right-solid.svg" width="25px" height="25px">
    </a></div>


    <!-- 發票期別 <select name="period" class="btn p-0 m-0 bropdown-toggle">
            <option value="1" class="dropdown-item">1,2月份</option>
            <option value="2" class="dropdown-item">3,4月份</option>
            <option value="3" class="dropdown-item">5,6月份</option>
            <option value="4" class="dropdown-item">7,8月份</option>
            <option value="5" class="dropdown-item">9,10月份</option>
            <option value="6" class="dropdown-item">11,12月份</option>
    </select> -->
    <br><hr>

    <input type="submit" value="送出" class="btn alert-danger adbtn">
    <input type="reset" value="重置" class="btn alert-dark adbtn">
</form>



<?php

include_once "base.php";
$sql="INSERT INTO `invoices`(`code`,`number`,`period`,`payment`,`date`) VALUES ({$_POST['code']}','{$_POST['number']}','$期別','{$_POST['payment']}','{$_POST['date']}')";

// 標點符號有錯

?>

</body>
</html>