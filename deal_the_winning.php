<?php
session_start();
include_once "base.php";

// invoices&awards 一樣的欄位
// period(期數) in的date2020-08-31
// 特別獎type1 八位數字全部一樣



$_GET['dealperiod']=1;
switch($_GET['dealperiod']){
    // dealperiod=1 處理第一期的特別獎(1000萬)
    case 1:
        $period=1;
        // 抓出1月特別獎中獎號碼
        $sql_awards="select `number` from `award_numbers` where `type`='1' && `period`='1'";
        $awards=$pdo->query($sql_awards)->fetchALL(pdo::FETCH_ASSOC);
        foreach($awards as $award){
        }
        // 再抓出1.2月的所有發票
        $sql_invoices="select `number` from `invoices` where `date` LIKE '2020-01%' OR '2020-02%'";
        $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);
        
        foreach($invoices as $invoice){
            if($invoice['number']==$award['number']){
                $_SESSION['type1_dindonNumber']=$award['number'];
            }
        }
        
    break;
    // dealperiod=2 處理第二期的特別獎(1000萬)
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


<?php
switch($_GET['dealperiod']){
    // dealperiod=1 處理第一期的特獎 總共六期
    case 1:
        $period=1;
        // 抓出1月特獎中獎號碼
        $sql_awards="select `number` from `award_numbers` where `type`='2' && `period`='1'";
        $awards=$pdo->query($sql_awards)->fetchALL(pdo::FETCH_ASSOC);
        foreach($awards as $award){
        }
        // 再抓出1.2月的所有發票
        $sql_invoices="select `number` from `invoices` where `date` LIKE '2020-01%' OR '2020-02%'";
        $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);
        foreach($invoices as $invoice){
            if($invoice['number']==$award['number']){
                $_SESSION['type2_dindonNumber']=$award['number'];
            }
        }

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
<?php
switch($_GET['dealperiod']){
    // dealperiod=1 處理第一期的頭獎～六獎
    case 1:
        $period=1;
        // 抓出1月特獎中獎號碼
        $sql_awards="select `number` from `award_numbers` where `type`='3' && `period`='1'";
        $awards=$pdo->query($sql_awards)->fetchALL(pdo::FETCH_ASSOC);
        // 再抓出1.2月的所有發票
        $sql_invoices="select `number` from `invoices` where `date` LIKE '2020-01%' OR '2020-02%'";
        $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);
        foreach($invoices as $invoice){
            foreach($awards as $award){
                // echo substr($award['number'],-7).'<br>';
                // 頭獎
                if($invoice['number']==$award['number']){
                    $_SESSION['type3_dindonNumber_get8']=$award['number'];
                    $_SESSION['checkv3']=true;
                // 2
                }elseif(substr($invoice['number'],-7)==substr($award['number'],-7)){
                    $_SESSION['type3_dindonNumber_get7']=substr($award['number'],-7);
                // 3
                }elseif(substr($invoice['number'],-6)==substr($award['number'],-6)){
                    $_SESSION['type3_dindonNumber_get6']=substr($award['number'],-6);
                // 4
                }elseif(substr($invoice['number'],-5)==substr($award['number'],-5)){
                    $_SESSION['type3_dindonNumber_get5']=substr($award['number'],-5);
                // 5
                }elseif(substr($invoice['number'],-4)==substr($award['number'],-4)){
                    $_SESSION['type3_dindonNumber_get4']=substr($award['number'],-4);
                    echo $_SESSION['type3_dindonNumber_get4'];
                // 6
                }elseif(substr($invoice['number'],-3)==substr($award['number'],-3)){
                    $_SESSION['type3_dindonNumber_get3']=substr($award['number'],-3);
                }
            }
        }

    break;
    // dealperiod=2 處理第二期的頭獎～六獎
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




<?php
switch($_GET['dealperiod']){
// dealperiod=1 處理第一期的增開六獎
case 1:
    $period=1;
        // 抓出1月特獎中獎號碼
    $sql_awards="select `number` from `award_numbers` where `type`='4' && `period`='1'";
    $awards=$pdo->query($sql_awards)->fetchALL(pdo::FETCH_ASSOC);
    // 再抓出1.2月的所有發票
    $sql_invoices="select `number` from `invoices` where `date` LIKE '2020-01%' OR '2020-02%'";
    $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);
    foreach($invoices as $invoice){
        foreach($awards as $award){
            if(substr($invoice['number'],-3)==$award['number']){
                $type4[]=$invoice['number'];
                $_SESSION['type4_dindonNumbers']=[];
                $_SESSION['type4_dindonNumbers']=$type4;
                $_SESSION['checkv4']=true;
            }
        }
    }
    // print_r($_SESSION['type4_dindonNumbers']);
    // if((checkv6($_SESSION['type4_dindonNumbers'],$a))){
    //     echo 'yes';
    // }else{echo 'nooooo';}


break;
// dealperiod=2 處理第二期的增開六獎
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





<?php



// echo $_SESSION['type3_dindonNumber_get8'];
// echo '<br>';
// echo $_SESSION['type3_dindonNumber_get7'];

to("?go=invoice_list");









?>
