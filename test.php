<?php

include_once "base.php";

find('invoices',"`id`='9'");

// echo implode(" && ",['A'=>'B','C'=>'D','id'=>'9']);

$array=['name'=>'chel','tel'=>'09309184125','id'=>'9'];
foreach($array as $key=>$value){
    $tmp[]="`".$key."`='".$value."'";
    $tmp1[]=sprintf("`%s`='%s'",$key,$value);
    // 先決定字串的形式 再看要帶什麼值進去
    // %s=字串 %d=
    // 用sprintf會幫忙審查型態是否符合 %s就只能帶字串進去
}
print_r($tmp);
echo '<br>';
print_r($tmp1);
echo '<br><hr><br>';
echo '<br><hr><br>';

function find($table,$id){
    global $pdo;

    $sql="select * from $table where ";

    if(is_array($id)){
        // 如果是陣列 條件為id
            // 產生一個暫時的陣列
            foreach($id as $key=>$value){
                $tmp1[]="`".$key."`='".$value."'";
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
        $sql=$sql.implode(' && ',$tmp);
    }else{
        // 那麼就是數字 條件自己定義
        $sql=$sql . " id='$id' ";
    }

    $row=$pdo->query($sql)->fetch();

    return $row;
}

// return 有回傳值 可代入變數重複利用

$row=find('invoices',"id='11'");
echo $row['code'];
echo $row['number'];

$row=find('invoices',['code'=>'AB','number'=>'22816072']);
echo $row['code'];
echo $row['number'];

$row=find('invoices',"id='20'");
echo $row['code'];
echo $row['number'];




echo '<hr>';
echo '<hr>';

function one($str1, $str2)
{
two("Glenn", "Quagmire");
}

function two($str1, $str2)
{
three("Cleveland", "Brown");
}

function three($str1, $str2)
{
print_r(debug_backtrace());
}

one("Peter", "Griffin");
?>
<?php

echo '<hr>';
print_r(debug_backtrace());

?>