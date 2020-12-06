<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發票們</title>
    <link rel=stylesheet type="text/css" href="invoice.css">
</head>
<body>
<navigation>
<form method="post" action="index.php?go=invoice_list" class="text-center ctitle">
    <button type="submit" name="p1" class="btn click">第1期</button>
    <button type="submit" name="p2" class="btn click">第2期</button>
    <button type="submit" name="p3" class="btn click">第3期</button>
    <button type="submit" name="p4" class="btn click">第4期</button>
    <button type="submit" name="p5" class="btn click">第5期</button>
    <button type="submit" name="p6" class="btn click">第6期</button>
</form>
</navigation>

<?php
// 一開始跑的畫面
switch(ceil(date('m')/2)){
    case 1:
        $pp=1;
    break;
    case 2:
        $pp=2;
    break;
    case 3:
        $pp=3;
    break;
    case 4:
        $pp=4;
    break;
    case 5:
        $pp=5;
    break;
    case 6:
        $pp=6;
    break;
}

// 點了按鈕跑得畫面
if(!empty($_POST)){
    if(isset($_POST['p1'])){
        $pp=1;
    }elseif(isset($_POST['p2'])){
        $pp=2;
    }elseif(isset($_POST['p3'])){
        $pp=3;
    }elseif(isset($_POST['p4'])){
        $pp=4;
    }elseif(isset($_POST['p5'])){
        $pp=5;
    }elseif(isset($_POST['p6'])){
        $pp=6;
    }
}
// 點了兌獎希望顯示的畫面
elseif(isset($_GET['deal_period'])){
    switch($_GET['deal_period']){
        case 1:
            $pp=1;
        break;
        case 2:
            $pp=2;
        break;
        case 3:
            $pp=3;
        break;
        case 4:
            $pp=4;
        break;
        case 5:
            $pp=5;
        break;
        case 6:
            $pp=6;
        break;
    }
}
?>


<div class="invoice_list_period">
<p class="col-12">
<?php
echo $pp;
?>
</p>
<a href="?go=invoice_list">#</a>

</div><br>
<i class="fas fa-copy"></i>
<table class="border" style="width:100%;">
<tr class="row d-flex justify-content-around m-2">
<td class="alert-warning">發票日期</td>
<td class="alert-warning">發票號碼</td>
<td class="alert-warning">消費金額</td>
</tr>





<!-- 發票儲存 -->
<?php
session_start();
include_once "base.php";
$sql="select * from `invoices` where `period`='".$pp."' ORDER BY `date`";
$invoices=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);

foreach($invoices as $invoice){
    // print_r($invoice);
    $codeNumber=$invoice['code'].$invoice['number'];
    $payment=$invoice['payment'];
    $date=$invoice['date'];

    echo '<tr class="row d-flex justify-content-around m-2">';
    echo '<td class="col-4">'.$date."</td>";




    // 中獎號碼變顏色

// 特別獎
if(isset($_SESSION['type1_dindonNumber']) && $_SESSION['type1_dindonNumber']==substr("$codeNumber",-8)){
    echo '<td class="col-4 getSpecialColor">'.$codeNumber."</td>";}
// 特獎
elseif(isset($_SESSION['type2_dindonNumber']) && $_SESSION['type2_dindonNumber']==substr("$codeNumber",-8)){
    echo '<td class="col-4 getSuperColor">'.$codeNumber."</td>";}

// 頭獎-六獎
    // 中八碼
elseif(!empty($_SESSION['type3_dindonNumbers']) && checkinv($_SESSION['type3_dindonNumbers'],$invoice['number'],8)){
    echo '<td class="col-4 getType3_8">'.$codeNumber."</td>";
    // 中七碼
}elseif(!empty($_SESSION['type3_dindonNumbers']) && checkinv($_SESSION['type3_dindonNumbers'],$invoice['number'],7)){
    echo '<td class="col-4 getType3_7">'.$codeNumber."</td>";
    // 中六碼
}elseif(!empty($_SESSION['type3_dindonNumbers']) && checkinv($_SESSION['type3_dindonNumbers'],$invoice['number'],6)){
        echo '<td class="col-4 getType3_6">'.$codeNumber."</td>";
    // 中五碼
}elseif(!empty($_SESSION['type3_dindonNumbers']) && checkinv($_SESSION['type3_dindonNumbers'],$invoice['number'],5)){
    echo '<td class="col-4 getType3_5">'.$codeNumber."</td>";
    // 中四碼
}elseif(!empty($_SESSION['type3_dindonNumbers']) && checkinv($_SESSION['type3_dindonNumbers'],$invoice['number'],4)){
    echo '<td class="col-4 getType3_4">'.$codeNumber."</td>";
    // 中三碼
}elseif(!empty($_SESSION['type3_dindonNumbers']) && checkinv($_SESSION['type3_dindonNumbers'],$invoice['number'],3)){
    echo '<td class="col-4 getType3_3">'.$codeNumber."</td>";
    


// print_r($_SESSION['type4_dindonNumbers']);
// 增開六獎
}elseif(!empty($_SESSION['type4_dindonNumbers']) && checkv6($_SESSION['type4_dindonNumbers'],$invoice['number'])){
        echo '<td class="col-4 getIncrease6">'.$codeNumber."</td>";
}
// 都沒中
else{
    echo '<td class="col-4">'.$codeNumber."</td>";
}


    echo '<td class="col-4">'.$payment."</td>";
    echo '</tr>';
}
?>


</table>
<br>
<div class="invoice_list_btn">
<a href="?go=deal_the_winning&dealperiod=<?=$pp;?>" class="btn alert-danger p-1">兌獎囉!</a>
</div>






<br><br><br>





</body>
</html>