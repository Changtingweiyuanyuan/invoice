<?php
// 資料來源名稱(數據源)="資料庫類型:主機地址;資料庫名稱;文字格式";
// php資料物件=new PDO(數據源,連接數據庫服務器的用戶,密碼);
$dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo=new PDO($dsn,'root','');


// session_start();
?>





<!-- 自建函式 -->
<?php


$aa=[
    '55'=>'id1',
    '65'=>'id2',
    '75'=>'id3',
    '85'=>'id4'
];

// find(單一id)

function find2($table,$id){
    global $pdo;

    if(is_array($id)){
        $sql="select * from $table where ";
        foreach($id as $key => $value){
            $tmp=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql.implode(" && ",$tmp);
    }else{
        $sql="select * from $table where `id`='$id'";
    }

    $result=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);
    return $result;
}
// -----------------------------------------------------
// all
// del


// update(單一資料)

function update($table,$array){
    global $pdo;
    $sql="update $table set ";
    
    foreach($array as $key => $value){
        if($key!='id'){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
    }
    $sql=$sql.implode(",",$tmp)." where `id`='{$array['id']}'";
    $pdo->exec($sql);
}

// nsert(單一資料)


function to($url){
    header("location:".$url);
}


// 從發票裡面找出是否符合陣列$v6ary的值 一樣的話就傳回true;
function checkv6($v6ary,$inv){
    $result=false;
    foreach($v6ary as $value){
        if(substr($value,-3)==substr($inv,-3)){
            // print_r($v6ary);
            $result=true;
        }
    }
    return $result;
}

// 從發票裡面找出是否符合陣列$v6ary的值 一樣的話就傳回true;
function checkinv($ary,$inv,$number){
    $result=false;
    if(is_array($ary)){
        foreach($ary as $v){
            if(substr($v,-$number)==substr($inv,-$number)){
                $result=true;
            }
        }
    }
    return $result;
}

?>