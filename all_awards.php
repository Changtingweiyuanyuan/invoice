<?php
// 全部發票對獎按鈕(award_numbers)->連結到此畫面
include_once "base.php";

$period_str=[
    '1'=>'1,2月',
    '2'=>'3,4月',
    '3'=>'5,6月',
    '4'=>'7,8月',
    '5'=>'9,10月',
    '6'=>'11,12月',
];

echo '你要對的發票是'.$_GET['year'].'年';
echo $period_str[$_GET['period']].'的發票';

// 請撈出該期發票******************
$period_invoice=$pdo->query("SELECT * FROM `invoices` 
where `period`='{$_GET['period']}' && `date` LIKE '{$_GET['year']}%' ORDER BY `date` DESC")->fetchALL();
// left(date,4)='{$_GET['year']}' 等於 `date` LIKE '{$_GET['year']}%'
echo '<br>'.$period_str[$_GET['period']].'共有'.count($period_invoice).'筆資料';
// echo '<pre>';
// print_r($period_invoice);
// echo '</pre>';


// 撈出該期的開獎獎號******************
$period_awards=$pdo->query("SELECT `number`,`type`AS'獎別' FROM `award_numbers` 
where `period`='{$_GET['period']}' && `year`='{$_GET['year']}'")->fetchALL(pdo::FETCH_ASSOC);
// fetchALL(pdo::FETCH_ASSOC) 如果不加FETCH_ASSOC 會出現索引+select兩種KEY值
// ASSOC欄位方式拿資料 NUM索引方式拿資料 BOTH兩個都要
// 從資料庫找出的 都是二維陣列 要用foreach拆成一維陣列 取裡面的value啦~

// echo '<pre>';
// print_r($period_awards);
// echo '</pre>';


// 開始全部發票對獎啦******************




?>