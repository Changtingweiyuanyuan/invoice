<?php

include_once "base.php";

// find('invoices',"`id`='9'");

// echo implode(" && ",['A'=>'B','C'=>'D','id'=>'9']);

$array = ['name' => 'chel', 'tel' => '09309184125', 'id' => '9'];
foreach ($array as $key => $value) {
    $tmp[] = "`" . $key . "`='" . $value . "'";
    $tmp1[] = sprintf("`%s`='%s'", $key, $value);

    // 先決定字串的形式 再看要帶什麼值進去
    // %s=字串 %d=
    // 用sprintf會幫忙審查型態是否符合 %s就只能帶字串進去
}
print_r($tmp);
echo '<br>';
print_r($tmp1);
echo '<br><hr><br>';
echo '<br><hr><br>';

echo '<hr><hr>';


// 取得單一的自訂函式
function find($table, $id)
{
    global $pdo;

    $sql = "select * from $table where ";

    if (is_array($id)) {
        // 如果是陣列 條件為id
        // 產生一個暫時的陣列
        foreach ($id as $key => $value) {
            // $tmp1[]="`".$key."`='".$value."'";
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
            // print_r($tmp);
        }
        $sql = $sql . implode(' && ', $tmp);
        // echo $sql;
    } else {
        // 那麼就是數字 條件自己定義
        $sql = $sql . " id='$id' ";
    }

    $row = $pdo->query($sql)->fetch(pdo::FETCH_ASSOC);

    return $row;
}

// return 有回傳值 可代入變數重複利用

$row = find('invoices', 1);
echo $row['code'] . $row['number'] . '<br>';

$row = find('invoices', ['code' => 'AB', 'number' => '85055610']);
print_r($row);
echo '<br>';
echo $row['code'] . $row['number'] . '<br>';


$row = find('invoices', 17);
echo $row['code'] . $row['number'] . '<br>';


echo '<hr>';
echo '<hr>';

echo '<h3>...arg用法</h3>';
echo '<h3>一個函式可同時執行四種條件</h3>';
echo '用arg來取代all($table,$where,$other)的where&other';

// 參數用...$arg 代表使用函式時可依照需求 選擇要不要填寫此參數

function all($table, ...$arg)
{
    global $pdo;

    $sql = "select * from $table ";

    if (isset($arg[0])) {
        if (is_array($arg[0])) {
            // 製作會在where後面的句子字串(陣列格式)
            foreach ($arg[0] as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
            $sql = $sql . " where " . implode(' && ', $tmp);
        } else {
            // 製作非陣列的語句接在$sql後面
            $sql = $sql . $arg[0];
        }
    }
    if (isset($arg[1])) {
        // 製作接在最後面的句子字串
        $sql = $sql . $arg[1];
        // 例如:: $sql=$sql." order bt date desc";
    }


    echo $sql . "<br>";


    $row = $pdo->query($sql)->fetchALL();
    return $row;
    // 或是簡化成 return $pdo->query($sql)->fetch();
    //--------------------
    // arg會顯示出array
    gettype($arg);
}
// 測試看看取不取得到值 要加key[0] 不要跑全部資料
all('invoices');
echo '<hr>';
all('invoices', ['code' => 'GD', 'period' => 6]);
echo '<hr>';
all('invoices', ['code' => "AB", 'period' => 1], " order by date desc");
echo '<hr>';
all('invoices', "limit 5");
echo '<hr>';


function del($table, $id)
{
    global $pdo;
    $sql = "delete * from $table where ";
    if (is_array($id)) {
        foreach ($id as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . implode(' && ', $tmp);
    } else {

        $sql = $sql . " id='$id' ";
    }

    $row = $pdo->exec($sql);
    // 顯示刪除成功或失敗 刪除幾筆資料
    return $row;
}

del('invoices', 3);

?>

<?php
$row = find('invoices', 22);
echo "<pre>";
print_r($row);
echo "</pre><br>";
$row['code'] = 'AA';
$row['payment'] = 1;

update('invoices', $row);

// update function echo出
// update invoices set `id`='22',`0`='22',`code`='AA',`1`='KW',`number`='41736872',`2`='41736872',`period`='1',`3`='1',`payment`='1',`4`='89956',`date`='2020-01-03',`5`='2020-01-03',`create_time`='2020-11-18 16:20:25',`6`='2020-11-18 16:20:25' where `id`='22'
// 應該要呈現 沒有索引值 然後set裡面不能有id (id不能被更改)

// update function裡面要增加 if($key!='id'){}



// 測試用
function update1($table,$array){
    global $pdo;
    $sql="update `$table` set ";
    foreach($array as $key => $value){
        if($key!='id'){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
    }
    // print_r($tmp);
    // Array ( [0] => `code`='KW' [1] => `number`='41736872' [2] => `period`='1' [3] => `payment`='89956' [4] => `date`='2020-01-03' [5] => `create_time`='2020-11-18 16:20:25' )
    echo '<br>';
    // $tmp2=implode(",", $tmp);
    // `code`='KW',`number`='41736872',`period`='1',`payment`='89956',`date`='2020-01-03',`create_time`='2020-11-18 16:20:25'
    // print_r($tmp2);

    $sql=$sql.implode(",", $tmp)." where `id`='{$array['id']}'";
    $pdo->exec($sql);

}
echo '<hr>';
$row = find('invoices', 22);
update1('invoices',$row);









function update($table, $array)
{
    global $pdo;
    // set `key1`='v1',
    //     `key2`='v2',
    $sql = "update $table set ";
    foreach ($array as $key => $value) {
        if($key!='id'){
        // $tmp1[]="`".$key."`='".$value."'";
        $tmp[] = sprintf("`%s`='%s'", $key, $value);
        // print_r($tmp);
        }
    }
    $sql = $sql . implode(",", $tmp) . " where `id`='{$array['id']}'";
    echo $sql;
    // $pdo->exec($sql);
}




function insert($table, $array)
{
    global $pdo;
    // ..是為了把字串接起來
    // $sql="insert into $table(`".."`) values('') ";
    $sql = "insert into $table(`" . implode("`,`", array_keys($array)) . "`) values('" . implode("','", $array) . "') ";
    $pdo->exec($sql);
}



// 把兩個函式合併成一個 不用記兩個~
// 既要更新也要新增save

function save($table,$array){
    if(is_array($array)){
        if(isset($array['id'])){
            update($table,$array);
        }else{
            insert($table,$array);
        }
    }else{
        echo "Notice:函式save()的第二個參數必須是陣列!";
    }
}

?>