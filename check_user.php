<?php
$dsn="mysql:host=localhost;dbname=controller;charset=utf8";
$pdo=new PDO($dsn,"root","");
?>


<?php
$sql="select * from `loginform`";

$logins=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

// print_r($login);

foreach($logins as $login){
    if($_POST['userName']==$login['user'] && $_POST['userPassword']==$login['password']){
        echo '登入成功';
        header("location:controller.php");
    }elseif((($_POST['userName']!==$login['user']) && ($_POST['userPassword']==$login['password'])) || (($_POST['userName']==$login['user']) && ($_POST['userPassword']!==$login['password']))){
        echo '帳號或密碼錯誤:)';
    }else{echo '登入失敗';}
    
}


?>
