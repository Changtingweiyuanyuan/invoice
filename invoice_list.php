
<table style="width:100%;">
<tr class="row d-flex justify-content-around m-2">
<td class="alert-warning">發票日期</td>
<td class="alert-warning">發票號碼</td>
<td class="alert-warning">消費金額</td>
</tr>

<!-- 各期發票儲存 -->
<?php
include_once "base.php";
$sql="select * from `invoices` where `date` LIKE '2020-01%' AND '2020-02%' limit 5";
$invoices=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);
// print_r($invoices);


foreach($invoices as $invoice){
    // print_r($invoice);
    $codeNumber=$invoice['code'].$invoice['number'];
    $payment=$invoice['payment'];
    $date=$invoice['date'];

    echo '<tr class="row d-flex justify-content-around m-2">';
    echo "<td>$date</td>";
    echo "<td>$codeNumber</td>";
    echo "<td>$payment</td>";
    echo '</tr>';
}

?>
</table>

