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
    </style>
</head>
<body>
    

<?php
include_once "base.php";

?>
<table class="CTWtable">
<tr class="row">
    <th class="col-6 offset-1 awardtype1">
        <div class="circle type1circle"></div>
    10Million</th>
    <td class="col-5 offset-0 number">12345678</td>
</tr>
<tr class="row mb-4">
    <td class="col-7 offset-5 remark">同期發票收執聯8位數號碼與特別獎號碼相同</td>
</tr>
<tr class="row">
    <th class="col-5 offset-3 awardtype2">
        <div class="circle type2circle"></div>
    2Million</th>
    <td class="col-4 offset-0 number">12345678</td>
</tr>
<tr class="row mb-4">
    <td class="col-7 offset-5 remark">同期發票收執聯8位數號碼與特獎號碼相同</td>
</tr>
<tr class="row">
    <th class="col-4 offset-1 awardtype3">
        <div class="circle"></div>
    200,000</th>
    <td class="col-6 offset-1 number">12345678</td>
</tr>
<tr class="row">
    <td class="col-5"> </td>
    <td class="col-6 offset-1 number">87654321</td>
</tr>
<tr class="row">
    <td class="col-5"> </td>
    <td class="col-6 offset-1 number">12345678</td>
</tr>
<tr class="row mb-4">
    <td class="col-7 offset-5 remark">同期發票收執聯8位數號碼與頭獎號碼相同</td>
</tr>

</table>







</body>
</html>