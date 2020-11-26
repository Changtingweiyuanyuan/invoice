<?php
include_once "base.php";

// invoices&awards 一樣的欄位
// period(期數) in的date2020-08-31
// 特別獎type1 八位數字全部一樣

// dealperiod=1 處理第一期的特別獎 總共六期
$_GET['dealperiod']=1;
switch($_GET['dealperiod']){
    case 1:
        $period=1;
        // 抓出1月特別獎中獎號碼
        $sql_awards="select `number` from `award_numbers` where `type`='1' && `period`='1'";
        $awards=$pdo->query($sql_awards)->fetchALL(pdo::FETCH_ASSOC);
        
        foreach($awards as $award){
            // print_r($award['number']);
            // echo '<br>';
        }
        // 再抓出1.2月的所有發票
        $sql_invoices="select `number` from `invoices` where `date` LIKE '2020-01%' AND '2020-02%'";
        $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);

        foreach($invoices as $invoice){
            // print_r($invoice['number']);
            // echo '<br>';
            if($invoice['number']==$award['number']){
                $dindon='中特別獎(1000萬)啦！！！';
                $dindon1=$award['number'];
            }
            
        }
        if(isset($dindon)){
            ?>
            <!-- get網址可能太長 改成post 設定變顏色的form -->
            <!-- value可以帶變數嗎? -->
            <!-- <form action="post">
            <input type="hidden" name="dindon_type1" value="$award'number'"> -->
            
            <!-- </form> -->
            <?php
            // echo $_POST['dindon_type1'];
            to("?go=invoice_list&dindontype=1&number=$dindon1");
            // to("?go=invoice_list&dindontype=1);
        }else{echo 槓龜啦！！！;}
        


        // }
    break;
    case 2:

    break;
    case 3:

    break;
    case 4:

    break;
    case 5:

    break;
    case 6:

    break;
}
?>


<!-- dealperiod=1 處理第一期的特獎 總共六期 -->
<?php
echo '特別獎的部分是 ';
switch($_GET['dealperiod']){
    case 1:
        $period=1;
        // 抓出1月特獎中獎號碼
        $sql_awards="select `number` from `award_numbers` where `type`='2' && `period`='1'";
        $awards=$pdo->query($sql_awards)->fetchALL(pdo::FETCH_ASSOC);
        
        foreach($awards as $award){
            // print_r($award['number']);
            // echo '<br>';
        }
        // 再抓出1.2月的所有發票
        $sql_invoices="select `number` from `invoices` where `date` LIKE '2020-01%' AND '2020-02%'";
        $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);

        foreach($invoices as $invoice){
            // print_r($invoice['number']);
            // echo '<br>';
            if($invoice['number']==$award['number']){
                $dindon='中特獎(200萬)啦！！！';
                $dindon1=$award['number'];
            }
            
        }
        if(isset($dindon)){
            echo $dindon;
            to("?go=invoice_list&dindontype=1&number=$dindon1");
        }else{echo 槓龜啦！！！;}
        


        // }
    break;
    case 2:

    break;
    case 3:

    break;
    case 4:

    break;
    case 5:

    break;
    case 6:

    break;
}




?>
