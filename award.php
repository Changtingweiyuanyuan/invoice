<?php
include_once "base.php";

if(isset($_GET['id'])){
$inv_id=$_GET['id'];}else{echo '沒拿到$_GET[id]';}
// $inv_id=$_GET['id'];
$invoice=$pdo->query("select `id`,`code`,`number`,`payment`,`date` from `invoices` where id='$inv_id'")->fetch();
$number=$invoice['number'];

// echo "<pre>";
// print_r($invoice);
// echo "</pre>";


//找出獎號
/**
 * 1.確認期數->目前的發票日期 做分析
 * 2.得到期數資料後->撈出該期的開獎獎號
 * 3.
 */
$date=$invoice['date'];
//用explode('-',$date) 取得日期資料的陣列 再取陣列[1]第二個元素 就是月份 可以推算期數,有期數及年份就可以找到開獎號碼
//$array=explode('-',$date)
//$month=$array[1]
//$period=ceil($month/2)
$year=explode('-',$date)[0];
$period=ceil(explode('-',$date)[1]/2);
// echo $period;
$awards=$pdo->query("select * from `award_numbers` where `year`='$year' && `period`='$period'")->fetchALL();

//echo出來 看有沒有找到
echo "<pre>";
print_r($awards);
echo "</pre>";

// print_r(explode('-',$date)[1]);







?>