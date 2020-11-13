<?php
include_once "base.php";

$sql="select * from `invoices` where `id`='{$_GET['id']}'";
$inv=$pdo->query($sql)->fetch();
// echo "<pre>";
// print_r($inv);
// echo "</pre>";
?>
<!-- 傳值方式 1:用get ?後面傳值 2:post只能用表單 所以按鈕後面放name -->
<!-- 方法1:<form action="api/update_invoice.php?id=<?=$inv['id']?>" method="post"> -->
<form action="api/update_invoice.php" method="post">
    <!-- 方法2 -->
    <input type="hidden" name="id" value="<?=$inv['id']?>" readonly>
    <div>發票號碼:<input type="text" name="code" style="width:30px" value="<?=$inv['code']?>">
    <input type="text" name="number" value="<?=$inv['number']?>"></div>
    <div>消費日期:<input type="date" name="date" value="<?=$inv['date']?>"></div>
    <div>消費金額:<input type="text" name="payment" value="<?=$inv['payment']?>"></div>
    <div>
    <input type="submit" value="送出">
    <input type="reset" value="重設">
    </div>
</form>