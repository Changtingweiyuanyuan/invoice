<?php
$dsn="mysql:host=localhost;dbname=controller;charset=utf8";
$pdo=new PDO($dsn,"root","");
session_start();

?>


<?php
$sql="select * from `loginform`";

$logins=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

// print_r($logins);
if($_POST['userName']=='chel'){
    $_POST['userName']='CHEL';
}

foreach($logins as $login){
    if($_POST['userName']==$login['user'] && $_POST['userPassword']==$login['password']){
        echo '登入成功';
        header("location:controller.php");
    }elseif((($_POST['userName']!==$login['user']) && ($_POST['userPassword']==$login['password'])) || (($_POST['userName']==$login['user']) && ($_POST['userPassword']!==$login['password']))){
        $_SESSION['wrong1']='帳號或密碼錯誤:)';
        header("location:index.php?go=login");
    }else{
        $_SESSION['wrong2']='帳號與密碼都錯誤喔>_<||';
        header("location:index.php?go=login");
    }
    
}


?>
