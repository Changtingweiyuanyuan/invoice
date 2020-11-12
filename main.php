

<h3 class="text-center p-3">統一發票紀錄</h3>



<nav class="container col-8">
<ul class="nav justify-content-around nav-tabs border p-3">

<!-- 建立陣列 -->
<?php
    $month=[
        1=>'1,2月',
        2=>'3,4月',
        3=>'5,6月',
        4=>'7,8月',
        5=>'9,10月',
        6=>'11,12月'
    ];
$m=ceil(date("m")/2);

?>
    <il class="nav-item"><?=$month[$m];?></il>
    <il class="nav-item"><a href="#">當期發票</a></il>
    <il class="nav-item"><a href="#">兌獎</a></il>
    <il class="nav-item"><a href="#">輸入獎號</a></il>
</ul>


<div class="border d-flex justify-content-center p-2">

<form action="api/add_invoice.php" method="post">
    <div class="p-2">日期:<input type="date" name="date"></div>
    <div class="p-2">期別:<select name="period">
        <option value="1">1,2月</option>
        <option value="2">3,4月</option>
        <option value="3">5,6月</option>
        <option value="4">7,8月</option>
        <option value="5">9,10月</option>
        <option value="6">11,12月</option>
    </select></div>
    <div class="p-2">
    發票號碼:<input type="text" name="code">
    <input type="number" name="number"></div>
    <div class="p-2">發票金額:<input type="number" name="payment"></div>
    <div class="p-2 text-center"><input type="submit" value="送出囉"></div>
</form>

</div>

</nav>