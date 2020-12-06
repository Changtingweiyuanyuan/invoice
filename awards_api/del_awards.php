<!-- 處理刪除中獎獎號頁面 -->



<?php
session_start();
include_once "../base.php";
if(isset($_GET['period'])&&($_GET['del'])){
    // DELETE FROM `award_numbers` WHERE 0
    $sql="DELETE FROM `award_numbers` WHERE `period`='".$_GET['period']."' AND `number`='".$_GET['del']."'";
    echo $sql;
    $pdo->exec($sql);
    
    switch($_GET['period']){
        case 1:
            $_SESSION['del1']='已刪除第'.$_GET['period'].'期'.$_GET['del'].'中獎號碼~';
        break;
        case 2:
            $_SESSION['del2']='已刪除第'.$_GET['period'].'期'.$_GET['del'].'中獎號碼~';
        break;
        case 3:
            $_SESSION['del3']='已刪除第'.$_GET['period'].'期'.$_GET['del'].'中獎號碼~';
        break;
        case 4:
            $_SESSION['del4']='已刪除第'.$_GET['period'].'期'.$_GET['del'].'中獎號碼~';
        break;
        case 5:
            $_SESSION['del5']='已刪除第'.$_GET['period'].'期'.$_GET['del'].'中獎號碼~';
        break;
        case 6:
            $_SESSION['del6']='已刪除第'.$_GET['period'].'期'.$_GET['del'].'中獎號碼~';
        break;
    }
    
    
    header("location:../controller.php");
    exit;
}else{
    $_SESSION['del']='刪除'.$_GET['del'].'失敗!';
    header("location:../controller.php");
}

?>