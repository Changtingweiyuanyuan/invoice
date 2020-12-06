<!-- 處理修改中獎獎號頁面 -->
<?php
session_start();
include_once "../base.php";
if(isset($_POST['add_type1'])&&($_POST['add_number1'])){
    $sql="INSERT INTO `award_numbers`(`year`, `period`, `number`, `type`) VALUES ('2020','1','".$_POST['add_number1']."','".$_POST['add_type1']."')";
    $insert=$pdo->exec($sql);
    header("location:../controller.php?insert={$_POST['add_number1']}");
    exit;
}else{header("location:../controller.php");}


?>