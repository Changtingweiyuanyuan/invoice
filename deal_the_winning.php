<?php
session_start();
include_once "base.php";
?>


<?php
if(isset($_GET['dealperiod'])){

//--------------------------------------------------------
// 處理特別獎
        // 抓出特別獎中獎號碼
        $sql_awards1="select `number` from `award_numbers` where `type`='1' && `period`='".$_GET['dealperiod']."'";
        $awards=$pdo->query($sql_awards1)->fetchALL(pdo::FETCH_ASSOC);
        foreach($awards as $award){
        }
        // 再抓出當期所有發票
        $sql_invoices="select `number` from `invoices` where `period`='".$_GET['dealperiod']."'";
        $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);
        
        foreach($invoices as $invoice){
            if($invoice['number']==$award['number']){
                $_SESSION['type1_dindonNumber']=$award['number'];
            }
        }
        // echo $_SESSION['type1_dindonNumber'];


//--------------------------------------------------------
// 處理特獎
        // 抓出特獎中獎號碼
        $sql_awards2="select `number` from `award_numbers` where `type`='2' && `period`='".$_GET['dealperiod']."'";
        $awards=$pdo->query($sql_awards2)->fetchALL(pdo::FETCH_ASSOC);
        foreach($awards as $award){
        }
        // 再抓出當期所有發票
        $sql_invoices="select `number` from `invoices` where `period`='".$_GET['dealperiod']."'";
        $invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);
        
        foreach($invoices as $invoice){
            if($invoice['number']==$award['number']){
                $_SESSION['type2_dindonNumber']=$award['number'];
            }
        }
        // echo $_SESSION['type2_dindonNumber'];



//--------------------------------------------------------
// 處理頭獎-六獎
        // 抓出頭獎中獎號碼
        $sql_awards3="select `number` from `award_numbers` where `type`='3' && `period`='".$_GET['dealperiod']."'";
        $awards3=$pdo->query($sql_awards3)->fetchALL(pdo::FETCH_ASSOC);
        // 再抓出當期所有發票
        $sql_invoices="select `number` from `invoices` where `period`='".$_GET['dealperiod']."'";
        $invoices3=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);

        // print_r($awards3);

        // 只要有中三個 就丟到type3陣列  type=至少有六獎!
        foreach($invoices3 as $invoice){
            foreach($awards3 as $award){
                if(substr($invoice['number'],-3)==substr($award['number'],-3)){
                    $type3[]=$invoice['number'];
                }
            }
        }

        if(isset($type3)){
            $_SESSION['type3_dindonNumbers']=$type3;
        }

        print_r($_SESSION['type3_dindonNumbers']);


//--------------------------------------------------------
// 處理增開六獎


// 抓出增開6獎中獎號碼
$sql_awards4="select `number` from `award_numbers` where `type`='4' && `period`='".$_GET['dealperiod']."'";
$awards=$pdo->query($sql_awards4)->fetchALL(pdo::FETCH_ASSOC);
// 再抓出當期所有發票
$sql_invoices="select `number` from `invoices` where `period`='".$_GET['dealperiod']."'";
$invoices=$pdo->query($sql_invoices)->fetchALL(pdo::FETCH_ASSOC);

// 挑選出一樣的號碼(8碼) 先丟到type4陣列裡
foreach($invoices as $invoice){
    foreach($awards as $award){
        if(substr($invoice['number'],-3)==$award['number']){
            $type4[]=$invoice['number'];
        }
    }
}

if(isset($type4)){
    $_SESSION['type4_dindonNumbers']=$type4;
}
// print_r($_SESSION['type4_dindonNumbers']);


}





?>


<?php

to("?go=invoice_list&deal_period={$_GET['dealperiod']}");









?>
