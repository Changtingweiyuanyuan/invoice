<?php


include_once "../base.php";
session_start();

// echo $_POST['code'];
// echo $_POST['number'];
// echo $_POST['payment'];
// echo $_POST['date'];
// echo $_SESSION['period'];

if(isset($_SESSION['period'])){

switch($_SESSION['period']){
    case 12:
        $_SESSION['period']=1;
    break;
    case 34:
        $_SESSION['period']=2;
    break;
    case 56:
        $_SESSION['period']=3;
    break;
    case 78:
        $_SESSION['period']=4;
    break;
    case 910:
        $_SESSION['period']=5;
    break;
    case 1112:
        $_SESSION['period']=6;
    break;
}


$sql="INSERT INTO `invoices`(`code`,`number`,`period`,`payment`,`date`) VALUES ('".$_POST['code']."','".$_POST['number']."','".$_SESSION['period']."','".$_POST['payment']."','".$_POST['date']."')";

$pdo->exec($sql);
$_SESSION['insert_inv']='新增發票號碼為'.$_POST['number'];
header("location:../index.php?go=add_invoice");

}else{
    header("location:../index.php?go=add_invoice");
    $_SESSION['insert_inv']='新增失敗';
}

?>