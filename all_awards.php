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

// 請撈出該期發票＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
$invoices=$pdo->query("SELECT * FROM `invoices` 
where `period`='{$_GET['period']}' && `date` LIKE '{$_GET['year']}%' ORDER BY `date` DESC")->fetchALL(pdo::FETCH_ASSOC);
// left(date,4)='{$_GET['year']}' 等於 `date` LIKE '{$_GET['year']}%'
echo '<br>'.$period_str[$_GET['period']].'共有'.count($invoices).'筆資料<br><br>';



// 撈出該期的開獎獎號＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
$award_numbers=$pdo->query("SELECT * FROM `award_numbers` 
where `period`='{$_GET['period']}' && `year`='{$_GET['year']}'")->fetchALL(pdo::FETCH_ASSOC);
// fetchALL(pdo::FETCH_ASSOC) 如果不加FETCH_ASSOC 會出現索引+select兩種KEY值
// ASSOC欄位方式拿資料 NUM索引方式拿資料 BOTH兩個都要
// 從資料庫找出的 都是二維陣列 要用foreach拆成一維陣列 取裡面的value啦~




// 開始全部發票對獎啦＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊


// 跟award.php只差在 去資料庫抓資料時,把屬於當期year跟期數的發票抓出來
// 外面包一個foreach迴圈(取發票一維陣列裡面的value)
        
        
        
        
// 以下為複製award.php貼上 改變
        
$all_res=-1;



$all_res=-1;
// 叫出每一張發票value去對獎 
foreach($invoices as $inv){
    // print_r($inv);
    // echo '<br><br>';

    $number=$inv['number'];
    $date=$inv['date'];
    $year=explode('-',$date)[0];
    $period=ceil(explode('-',$date)[1]/2);



    // 再把獎項的value取出來
    foreach($award_numbers as $award){
        // 逐項去對每個獎項
        switch($award['type']){
            case 1:


                if($award['number']==$number){
                    echo "<br>號碼=".$number."<br>";
                    echo "<br>中了特別獎<br>";
                    $all_res=1;
                }
            break;
            case 2:

                if($award['number']==$number){
                    echo "<br>號碼=".$number."<br>";
                    echo "中了特獎<br>";
                    $all_res=1;
                }

            break;
            case 3:
                $res=-1;
                for($i=5;$i>=0;$i--){
                    $target=mb_substr($award['number'],$i,(8-$i),'utf8');
                    $mynumber=mb_substr($number,$i,(8-$i),'utf8');

                    if($target==$mynumber){

                        $res=$i;
                    }else{
                        break;

                    }
                }
                if($res!=-1){
                    echo "<br>號碼=".$number."<br>";
                    echo "中了{$awardStr[$res]}獎<br>";
                    $all_res=1;
                }
            break;
            case 4:
                if($award['number']==mb_substr($number,5,3,'utf8')){
                    echo "<br>號碼=".$number."<br>";
                    $all_res=1;
                    echo "中了增開六獎";
                }
            break;
        }
    }



}
    if($all_res==-1){
        echo "很可惜，都沒有中";
    }



?>