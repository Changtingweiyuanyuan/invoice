<!-- 處理刪除中獎獎號頁面 -->



<?php
session_start();
include_once "../base.php";
if(isset($_GET['period'])&&($_GET['del'])){
    // DELETE FROM `award_numbers` WHERE 0
    $sql="DELETE FROM `award_numbers` WHERE `period`='".$_GET['period']."' AND `number`='".$_GET['del']."'";
    echo $sql;
    $pdo->exec($sql);
    $_SESSION['del']='刪除完成!';
    header("location:../controller.php");
    exit;
}else{
    $_SESSION['del']='刪除失敗!';
    header("location:../controller.php");
}

?>