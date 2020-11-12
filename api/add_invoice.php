<?php
//撰寫新增消費發票的程式碼
//將發票的號碼及相關資訊寫入資料庫


include_once "../base.php";


// foreach($_POST as $key => $value){
//     echo "欄位".$key."==值".$value;
// }
// 之前作法 $code=$_POST['code'];
// $sql="insert into invoice () values('{$_POST['code']}','{}','{}','{}','{}','{}')";

foreach($_POST as $key => $value){
    $tmp[]=$key;
}

// implode已經是把陣列value取出來了 不需要再執行下面的foreach
// foreach($_POST as $key => $value){
//     $tmp2[]=$value;
// }

echo "<pre>";
print_r(array_keys($_POST));
echo "</pre>";
echo '<br>';
// echo "<pre>";
// print_r($tmp);
// echo "</pre>";

// $tmp可以換成array_keys($_POST)
echo 'insert into invoices(`'.implode('`,`',array_keys($_POST)).'`)';

// tmp2直接換成$_POST
echo "values('".implode("','",$_POST)."')";
echo '<br>';
$sql="insert into invoices(`".implode('`,`',array_keys($_POST))."`) values('".implode("','",$_POST)."')";
echo $sql;
$pdo->exec($sql);

echo "新增完成";
// 可以把header拿掉 檢查印出的是否有錯
header("location:../index.php");



?>