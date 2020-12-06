<!-- 處理修改中獎獎號頁面 -->
<?php
session_start();
include_once "../base.php";
if(isset($_POST['add_type1'])&&($_POST['add_number1'])){
    $sql="INSERT INTO `award_numbers`(`year`, `period`, `number`, `type`) VALUES ('2020','1','".$_POST['add_number1']."','".$_POST['add_type1']."')";
    $insert=$pdo->exec($sql);
    header("location:../controller.php?insert={$_POST['add_number1']}");
    exit;
}elseif(isset($_POST['add_type2'])&&($_POST['add_number2'])){
    $sql="INSERT INTO `award_numbers`(`year`, `period`, `number`, `type`) VALUES ('2020','2','".$_POST['add_number2']."','".$_POST['add_type2']."')";
    $insert=$pdo->exec($sql);
    header("location:../controller.php?insert={$_POST['add_number2']}");
    exit;
}elseif(isset($_POST['add_type3'])&&($_POST['add_number3'])){
    $sql="INSERT INTO `award_numbers`(`year`, `period`, `number`, `type`) VALUES ('2020','3','".$_POST['add_number3']."','".$_POST['add_type3']."')";
    $insert=$pdo->exec($sql);
    header("location:../controller.php?insert={$_POST['add_number3']}");
    exit;
}elseif(isset($_POST['add_type4'])&&($_POST['add_number4'])){
    $sql="INSERT INTO `award_numbers`(`year`, `period`, `number`, `type`) VALUES ('2020','4','".$_POST['add_number4']."','".$_POST['add_type4']."')";
    $insert=$pdo->exec($sql);
    header("location:../controller.php?insert={$_POST['add_number4']}");
    exit;
}elseif(isset($_POST['add_type5'])&&($_POST['add_number5'])){
    $sql="INSERT INTO `award_numbers`(`year`, `period`, `number`, `type`) VALUES ('2020','5','".$_POST['add_number5']."','".$_POST['add_type5']."')";
    $insert=$pdo->exec($sql);
    header("location:../controller.php?insert={$_POST['add_number5']}");
    exit;
}elseif(isset($_POST['add_type6'])&&($_POST['add_number6'])){
    $sql="INSERT INTO `award_numbers`(`year`, `period`, `number`, `type`) VALUES ('2020','6','".$_POST['add_number6']."','".$_POST['add_type6']."')";
    $insert=$pdo->exec($sql);
    header("location:../controller.php?insert={$_POST['add_number6']}");
    exit;
}else{header("location:../controller.php");}


?>