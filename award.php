<?php
include_once "base.php";

if(isset($_GET['id'])){
$inv_id=$_GET['id'];}else{echo '沒拿到$_GET[id]';}
// $inv_id=$_GET['id'];
$invoice=$pdo->query("select `id`,`code`,`number`,`payment`,`date` from `invoices` where id='$inv_id'")->fetch();
$number=$invoice['number'];

// echo "<pre>";
// print_r($invoice);
// echo "</pre>";


//找出獎號
/**
 * 1.確認期數->目前的發票日期 做分析
 * 2.得到期數資料後->撈出該期的開獎獎號
 * 3.
 */
$date=$invoice['date'];
//用explode('-',$date) 取得日期資料的陣列 再取陣列[1]第二個元素 就是月份 可以推算期數,有期數及年份就可以找到開獎號碼
//$array=explode('-',$date)
//$month=$array[1]
//$period=ceil($month/2)
$year=explode('-',$date)[0];
$period=ceil(explode('-',$date)[1]/2);
// echo $period;
$awards=$pdo->query("select * from `award_numbers` where `year`='$year' && `period`='$period'")->fetchALL();

//echo出來 看有沒有找到
// echo "<pre>";
// print_r($awards);
// echo "</pre>";

foreach($awards as $award){
    switch($award['type']){
        // 特別獎(8碼全中 發票號碼)
        case 1:
            // echo '號碼='.$number.'<br>';
            // echo '特別獎='.$award['number'].'<br>';
            if($award['number']==$number){echo '號碼為'.$number.'<br>';echo '中特別獎啦~';}else{echo '特別獎沒中獎<br>';}
        break;
        
        // 特獎(8碼全中 發票號碼)
        case 2:
            if($award['number']==$number){echo '號碼為'.$number.'<br>';echo '中特獎啦~';}else{echo '特獎沒中獎<br>';}
        break;
        
        // 頭獎-6獎
        case 3:
            // 從頭獎開始對到六獎
            // for($i=0;$i<6;$i++){
            //     $target=mb_substr($award['number'],$i,(8-$i),'utf8');
            //     $mynumber=mb_substr($number['number'],$i,(8-$i),'utf8');
            //     if($target==$mynumber){echo '號碼為'.$number.'<br>';echo "中{$awardStr[$i]}獎啦~";}else{echo "{$awardStr[$i]}獎沒中";}
            // }

            // 從六獎開始對到頭獎 如果六獎沒中 後面都不用對了
            for($i=5;$i>=0;$i--){
                $target=mb_substr($award['number'],$i,(8-$i),'utf8');
                $mynumber=mb_substr($number,$i,(8-$i),'utf8');
                if($target==$mynumber){echo '號碼為'.$number;echo "中{$awardStr[$i]}獎啦<br>";}else{break;}
            }
        break;
        
        // 增開六獎 後三碼一樣
        case 4:
            if($award['number']==mb_substr($number,5,3,'utf8')){echo '號碼為'.$number;echo "中了增開六獎<br>";}
        break;
    }
}

// echo substr($award['number'],$i,8-$i);

// print_r(explode('-',$date)[1]);







?>