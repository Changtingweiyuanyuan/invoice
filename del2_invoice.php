<?php

// 確認 跟刪除 在同一個頁面執行=(del_invoice.php+del.php)

include_once "base.php";

$inv=$pdo->query("select * from `invoices` where id='{$_GET['id']}'")->fetch();
?>

<!-- 先做判斷 如果網址內有del 就確定刪除 (但剛進網頁時不會有 所以會先執行else部分) -->
<?php
    if(isset($_GET['del'])){
        $pdo->exec("delete `invoices` where `id`='{$_GET['id']}'");
        // echo "delete `invoices` where `id`='{$_GET['id']}'";
        header("location:index.php?do=invoice_list");
    }else{
        $inv=$pdo->query("select * from invoices where id='{$_GET['id']}'")->fetch();
?>

        <div class="col-md-6 text-center border p-4 mx-auto">
        <div class="text-center">確認要刪除以下發票資料嗎?</div>
        <ul class="list-group">
            <li class="list-group-item"><?=$inv['code'].$inv['number']?></li>
            <li class="list-group-item"><?=$inv['date']?></li>
            <li class="list-group-item"><?=$inv['payment']?></li>
        </ul>
        <div class="text-center mt-4">
            <button class="btn-danger"><a href="?do=del_invoice&del=1&id=<?=$_GET['id'];?>">確認</a></button>
            <button class="btn-primary"><a href="?do=invoice_list">取消</a></button></div>

</div>

    <?php
}
?>