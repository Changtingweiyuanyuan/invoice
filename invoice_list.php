<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發票們</title>
    <style>
        .invoice_list_period{
            text-align:center;
            font-size:30px;
        }
        .invoice_list_btn{
            text-align:right;
            text-shadow:0 0 0;
        }
        td{
            text-align:center;
        }
        .getSpecialColor{
            color:red;
        }
        .getSuperColor{
            color:blue;
        }
        .getno1,.getno2{
            color:green;
        }
        .getIncrease6{
            color:gray;
        }
    </style>
</head>
<body>
    
<div class="invoice_list_period">
<p class="col-12">第一二期</p>
<a href="?go=invoice_list">#</a>
</div><br>
<i class="fas fa-copy"></i>
<table class="border" style="width:100%;">
<tr class="row d-flex justify-content-around m-2">
<td class="alert-warning">發票日期</td>
<td class="alert-warning">發票號碼</td>
<td class="alert-warning">消費金額</td>
</tr>

<!-- 第一期發票儲存 -->
<?php
session_start();
include_once "base.php";
$sql="select * from `invoices` where `date` LIKE '2020-01%' OR '2020-02%'";
$invoices=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);
// print_r($invoices);


foreach($invoices as $invoice){
    // print_r($invoice);
    $codeNumber=$invoice['code'].$invoice['number'];
    $payment=$invoice['payment'];
    $date=$invoice['date'];
    foreach($_SESSION['type4_dindonNumbers'] as $_SESSION['type4_dindonNumber']){}

    echo '<tr class="row d-flex justify-content-around m-2">';
    echo '<td class="col-4">'.$date."</td>";
    // 中獎號碼要變顏色
    if(isset($_SESSION['type1_dindonNumber']) && $_SESSION['type1_dindonNumber']==substr("$codeNumber",-8)){
        echo '<td class="col-4 getSpecialColor">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type2_dindonNumber']) && $_SESSION['type2_dindonNumber']==substr("$codeNumber",-8)){
        echo '<td class="col-4 getSuperColor">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type3_dindonNumber_get8']) && $_SESSION['type3_dindonNumber_get8']==substr("$codeNumber",-8)){
        echo '<td class="col-4 getno1">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type3_dindonNumber_get7']) && $_SESSION['type3_dindonNumber_get7']==substr("$codeNumber",-7)){
        echo '<td class="col-4 getno2">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type3_dindonNumber_get6']) && $_SESSION['type3_dindonNumber_get6']==substr("$codeNumber",-6)){
        echo '<td class="col-4 getno3">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type3_dindonNumber_get5']) && $_SESSION['type3_dindonNumber_get5']==substr("$codeNumber",-5)){
        echo '<td class="col-4 getno4">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type3_dindonNumber_get4']) && $_SESSION['type3_dindonNumber_get4']==substr("$codeNumber",-4)){
        echo '<td class="col-4 getno5">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type3_dindonNumber_get3']) && $_SESSION['type3_dindonNumber_get3']==substr("$codeNumber",-3)){
        echo '<td class="col-4 getno6">'.$codeNumber."</td>";}
    elseif(isset($_SESSION['type4_dindonNumber']) && $_SESSION['type4_dindonNumber']==substr("$codeNumber",-3)){
        // foreach($_SESSION['type4_dindonNumbers'] as $_SESSION['type4_dindonNumber']){
        //     if($_SESSION['type4_dindonNumber']==substr("$codeNumber",-3)){
                echo '<td class="col-4 getIncrease6">'.$codeNumber."</td>";
            // }
        // }
        //  && $_SESSION['type4_dindonNumber']==substr("$codeNumber",-3)){

        // echo '<td class="col-4 getIncrease6">'.$codeNumber."</td>";
    }else{
        echo '<td class="col-4">'.$codeNumber."</td>";
    }




    echo '<td class="col-4">'.$payment."</td>";
    echo '</tr>';
}
?>


</table>
<br>
<div class="invoice_list_btn">
<a href="?go=deal_the_winning&dealperiod=1" class="btn alert-danger p-1">兌獎囉!</a>
</div>






<br><br><br>





</body>
</html>