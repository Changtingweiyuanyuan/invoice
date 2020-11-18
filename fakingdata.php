<?php
include_once "base.php";

// strtoupper()

echo '資料產生中......<br>';
echo date("Y-m-d H:i:s");


// 跑個一萬筆
for($i=0;$i<50;$i++){
    $codeBase=['AB','FF','GD','KJ','OE','PG','KD','KW','QM','IS'];
    $code=$codeBase[rand(0,9)];
    $number=str_pad(rand(0,99999999),8,'0',STR_PAD_LEFT);
    // 做法二: sprintf("%08d",rand(0,99999999));
    $payment=rand(1,200000);
    $start=strtotime("2020-01-01");
    $end=strtotime("2020-12-31");
    $date=date("Y-m-d",rand($start,$end));
    // 要看日期 去抓屬於哪一期數的發票
    $period=ceil(explode("-",$date)[1]/2);


    $fake=['code'=>$code,'number'=>$number,'payment'=>$payment,'date'=>$date,'period'=>$period];

    $sql="insert into invoices(`".implode('`,`',array_keys($fake))."`) values('".implode("','",$fake)."')";
    $pdo->exec($sql);

}

echo '<hr>';
echo '資料產生完成<br>';
echo date("Y-m-d H:i:s");


?>