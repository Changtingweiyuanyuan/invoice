<?php
include_once "base.php";

$sql="select * from `invoices` order by date desc";

$rows=$pdo->query($sql)->fetchAll();
?>

<table>
    <tr class="table text-center">
        <td>發票號碼</td>
        <td>消費日期</td>
        <td>消費金額</td>
        <td>操作</td>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr class="table text-center">
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
            <button class="btn btn-sm btn-primary">編輯</button>
            <button class="btn btn-sm btn-danger">刪除</button>
        </td>
    </tr>
    <?php
    }
    ?>
</table>