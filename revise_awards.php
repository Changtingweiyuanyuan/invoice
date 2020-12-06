<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel=stylesheet type="text/css" href="invoice.css">
    <title>Controller</title>
</head>
<body>
    <?php include_once "base.php";?>

<?php

if(isset($_GET['period'])&&!empty($_GET['revise'])){
// 撈出要修改的那筆資料
    $sql="SELECT * FROM `award_numbers` WHERE `year`='2020' AND `number`='".$_GET['revise']."'";
    $revise_inv=$pdo->query($sql)->fetch(pdo::FETCH_ASSOC);
    // print_r($revise_inv);
?>


<form class="text-center" method="post" action="#">
    修改發票號碼為: <?=$_GET['revise'];?>
    <div>
        <table class="container">
            <tr>
                <td>年份</td>
                <td>期數</td>
                <td>獎項</td>
                <td>號碼</td>
            </tr>
            <tr>
                <td><?= $revise_inv['year']?></td>
                <td><?= $revise_inv['period']?></td>
                <td><?= $revise_inv['type']?></td>
                <td><?= $revise_inv['number']?></td>
            </tr>
            <tr>
                <td><input type="text" name="year" placeholder=" enter as  2020"></td>
                <td><input type="text" name="period" placeholder=" enter  1-6"></td>
                <td><input type="text" name="type" placeholder=" enter  type1~4"></td>
                <td><input type="text" name="number" placeholder=" enter 8 numbers"></td>
            </tr>
            <tr><td colspan="4">
                <input class="btn" type="submit" name="determine_revise" value="確認修改">
            </td></tr>
        </table>
    </div>
</form>

<!-- 處理更動資料表 -->
<?php

// if(isset($_GET['revise'])&&$_GET['type']==1){
// }

// UPDATE `award_numbers` SET `number`='自己填入的',`type`='自己填入的(1-4)' WHERE `year`='2020',`period`='1',`number`=''

    if(isset($_POST['determine_revise'])&&$_GET['period']==1){
        $y="`year`='".$revise_inv['year']."'";
        $p="`period`='".$revise_inv['period']."'";
        $t="`type`='".$revise_inv['type']."'";
        $n="`number`='".$revise_inv['number']."'";

        if(($_POST['year'])>0){
            $y="`year`='".$_POST['year']."'";
        }
        if(($_POST['period'])>0){
            $p="`period`='".$_POST['period']."'";
        }
        if(($_POST['type'])>0){
            $t="`type`='".$_POST['type']."'";
        }
        if(($_POST['number'])>0){
            $n="`number`='".$_POST['number']."'";
        }

        $sql1="UPDATE `award_numbers` SET ".$n.",".$t.",".$y.",".$p." WHERE `year`='2020' AND `period`='1' AND `number`='".$_GET['revise']."'";
        // echo $sql1;
        $pdo->exec($sql1);
        header("location:controller.php");
    }
    elseif(isset($_POST['determine_revise'])&&$_GET['period']==2){
        $y="`year`='".$revise_inv['year']."'";
        $p="`period`='".$revise_inv['period']."'";
        $t="`type`='".$revise_inv['type']."'";
        $n="`number`='".$revise_inv['number']."'";

        if(($_POST['year'])>0){
            $y="`year`='".$_POST['year']."'";
        }
        if(($_POST['period'])>0){
            $p="`period`='".$_POST['period']."'";
        }
        if(($_POST['type'])>0){
            $t="`type`='".$_POST['type']."'";
        }
        if(($_POST['number'])>0){
            $n="`number`='".$_POST['number']."'";
        }

        $sql1="UPDATE `award_numbers` SET ".$n.",".$t.",".$y.",".$p." WHERE `year`='2020' AND `period`='2' AND `number`='".$_GET['revise']."'";
        // echo $sql1;
        $pdo->exec($sql1);
        header("location:controller.php");
    }
    elseif(isset($_POST['determine_revise'])&&$_GET['period']==3){
        $y="`year`='".$revise_inv['year']."'";
        $p="`period`='".$revise_inv['period']."'";
        $t="`type`='".$revise_inv['type']."'";
        $n="`number`='".$revise_inv['number']."'";

        if(($_POST['year'])>0){
            $y="`year`='".$_POST['year']."'";
        }
        if(($_POST['period'])>0){
            $p="`period`='".$_POST['period']."'";
        }
        if(($_POST['type'])>0){
            $t="`type`='".$_POST['type']."'";
        }
        if(($_POST['number'])>0){
            $n="`number`='".$_POST['number']."'";
        }

        $sql1="UPDATE `award_numbers` SET ".$n.",".$t.",".$y.",".$p." WHERE `year`='2020' AND `period`='3' AND `number`='".$_GET['revise']."'";
        // echo $sql1;
        $pdo->exec($sql1);
        header("location:controller.php");
    }
    elseif(isset($_POST['determine_revise'])&&$_GET['period']==4){
        $y="`year`='".$revise_inv['year']."'";
        $p="`period`='".$revise_inv['period']."'";
        $t="`type`='".$revise_inv['type']."'";
        $n="`number`='".$revise_inv['number']."'";

        if(($_POST['year'])>0){
            $y="`year`='".$_POST['year']."'";
        }
        if(($_POST['period'])>0){
            $p="`period`='".$_POST['period']."'";
        }
        if(($_POST['type'])>0){
            $t="`type`='".$_POST['type']."'";
        }
        if(($_POST['number'])>0){
            $n="`number`='".$_POST['number']."'";
        }

        $sql1="UPDATE `award_numbers` SET ".$n.",".$t.",".$y.",".$p." WHERE `year`='2020' AND `period`='4' AND `number`='".$_GET['revise']."'";
        // echo $sql1;
        $pdo->exec($sql1);
        header("location:controller.php");
    }
    elseif(isset($_POST['determine_revise'])&&$_GET['period']==5){
        $y="`year`='".$revise_inv['year']."'";
        $p="`period`='".$revise_inv['period']."'";
        $t="`type`='".$revise_inv['type']."'";
        $n="`number`='".$revise_inv['number']."'";

        if(($_POST['year'])>0){
            $y="`year`='".$_POST['year']."'";
        }
        if(($_POST['period'])>0){
            $p="`period`='".$_POST['period']."'";
        }
        if(($_POST['type'])>0){
            $t="`type`='".$_POST['type']."'";
        }
        if(($_POST['number'])>0){
            $n="`number`='".$_POST['number']."'";
        }

        $sql1="UPDATE `award_numbers` SET ".$n.",".$t.",".$y.",".$p." WHERE `year`='2020' AND `period`='5' AND `number`='".$_GET['revise']."'";
        // echo $sql1;
        $pdo->exec($sql1);
        header("location:controller.php");
    }
    elseif(isset($_POST['determine_revise'])&&$_GET['period']==6){
        $y="`year`='".$revise_inv['year']."'";
        $p="`period`='".$revise_inv['period']."'";
        $t="`type`='".$revise_inv['type']."'";
        $n="`number`='".$revise_inv['number']."'";

        if(($_POST['year'])>0){
            $y="`year`='".$_POST['year']."'";
        }
        if(($_POST['period'])>0){
            $p="`period`='".$_POST['period']."'";
        }
        if(($_POST['type'])>0){
            $t="`type`='".$_POST['type']."'";
        }
        if(($_POST['number'])>0){
            $n="`number`='".$_POST['number']."'";
        }

        $sql1="UPDATE `award_numbers` SET ".$n.",".$t.",".$y.",".$p." WHERE `year`='2020' AND `period`='6' AND `number`='".$_GET['revise']."'";
        // echo $sql1;
        $pdo->exec($sql1);
        header("location:controller.php");
    }

}else{header("location:controller.php");}
?>
</body>
</html>