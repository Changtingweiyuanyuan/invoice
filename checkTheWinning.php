<!-- 中獎金額及開獎號碼 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: 'Libre Baskerville', serif;
        }
        table{
            width:100%;
        }
        table tr th{
            padding:10px;
            font-size:40px;
            font-weight:100;
        }
        .awardtype1{
            font-size:70px;
        }
        .awardtype2{
            font-size:55px;
        }
        tr .number{
            font-size:30px;
            margin:auto;
            color:#ee8855;
        }
        .circle{
            border:2px solid #111;
            width:75px;
            height:75px;
            border-radius:37.5px;
            border-right-color:transparent;
            position:absolute;
            left:-25px;
            top:-0px;
        }
        .type1circle{
            width:120px;
            height:120px;
            border-radius:60px;
        }
        .type2circle{
            width:95px;
            height:95px;
            border-radius:47.5px;
            left:-30px;
        }
        .remark{
            font-size:14px;
        }

        .ctitle{
            white-space: nowrap;
        }
        .click{
            font-size:15px;
            text-align:center;
        }
    </style>
</head>
<body>
    
    
<?php
// 一開始跳到這個頁面 要顯示第幾期
switch(date('m')){
    case 1||2:
        $pp=1;
    break;
    case 3||4:
        $pp=2;
    break;
    case 5||6:
        $pp=3;
    break;
    case 7||8:
        $pp=4;
    break;
    case 9||10:
        $pp=5;
    break;
    case 11||12:
        $pp=6;
    break;
}
#click{}

include_once "base.php";
?>
<!-- 期數按鈕 -->

<form method="post" action="index.php?go=checkTheWinning" class="text-center ctitle">
    <button type="submit" name="p1" class="btn click">第1期</button>
    <button type="submit" name="p2" class="btn click">第2期</button>
    <button type="submit" name="p3" class="btn click">第3期</button>
    <button type="submit" name="p4" class="btn click">第4期</button>
    <button type="submit" name="p5" class="btn click">第5期</button>
    <button type="submit" name="p6" class="btn click">第6期</button>
</form>

<?php

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

$sql="SELECT * FROM `award_numbers` WHERE `period`='".$pp."' ORDER BY `type`";
$datas=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);

// 取增開六獎號碼(另外設定因為開獎號碼不固定)
$sql_v6="SELECT * FROM `award_numbers` WHERE `period`='".$pp."' AND `type`='4'";
$d6s=$pdo->query($sql_v6)->fetchALL(pdo::FETCH_ASSOC);
// print_r($d6s);
// echo '<br>';
// echo '<br>';
// print_r($d6);




?>

<table class="CTWtable">
<tr class="row">
    <th class="col-6 offset-1 awardtype1">
        <div class="circle type1circle"></div>
    10Million</th>
    <td class="col-5 offset-0 number">
        <?php
            print_r($datas[0]['number']);
        ?>
    </td>
</tr>
<tr class="row mb-4">
    <td class="col-7 offset-5 remark">同期發票收執聯8位數號碼與特別獎號碼相同</td>
</tr>
<tr class="row">
    <th class="col-5 offset-3 awardtype2">
        <div class="circle type2circle"></div>
    2Million</th>
    <td class="col-4 offset-0 number">
        <?php
            print_r($datas[1]['number']);
        ?>
    </td>
</tr>
<tr class="row mb-4">
    <td class="col-7 offset-5 remark">同期發票收執聯8位數號碼與特獎號碼相同</td>
</tr>
<tr class="row">
    <th class="col-4 offset-1 awardtype3">
        <div class="circle"></div>
    200,000</th>
    <td class="col-6 offset-1 number">
        <?php
            print_r($datas[2]['number']);
        ?>
    </td>
</tr>
<tr class="row">
    <td class="col-5"> </td>
    <td class="col-6 offset-1 number">
        <?php
            print_r($datas[3]['number']);
        ?>
    </td>
</tr>
<tr class="row">
    <td class="col-5"> </td>
    <td class="col-6 offset-1 number">
        <?php
            print_r($datas[4]['number']);
        ?>
    </td>
</tr>
<tr class="row mb-4">
    <td class="col-7 offset-5 remark">同期發票收執聯8位數號碼與頭獎號碼相同</td>
</tr>

<tr class="row">
    <td class="col-12 remark">同期發票收執聯末3位數號碼與增開號碼相同</td>
</tr>
<tr class="row mb-4">
    <?php
        foreach($d6s as $d6){
        echo '<td class="m-auto number">';
            echo $d6['number'];
        echo '</td>';
        }
    ?>
</tr>

</table>







</body>
</html>