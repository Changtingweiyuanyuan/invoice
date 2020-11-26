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
        .dddd{
            color:red;
        }
    </style>
</head>
<body>
    
<div class="invoice_list_period">
<p class="col-12">第一二期</p>
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
include_once "base.php";
$sql="select * from `invoices` where `date` LIKE '2020-01%' AND '2020-02%'";
$invoices=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);
// print_r($invoices);


foreach($invoices as $invoice){
    // print_r($invoice);
    $codeNumber=$invoice['code'].$invoice['number'];
    $payment=$invoice['payment'];
    $date=$invoice['date'];

    echo '<tr class="row d-flex justify-content-around m-2">';
    echo '<td class="col-4">'.$date."</td>";
    // 中獎號碼要變顏色
    if(isset($_GET['number']) && substr("$codeNumber",-8)==$_GET['number']){
        echo '<td class="col-4 dddd">'.$codeNumber."</td>";
    }else{echo '<td class="col-4">'.$codeNumber."</td>";}

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