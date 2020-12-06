<!-- 管理者頁面 要能新增特別獎號碼 -->

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


    <!-- 2020年第一期中獎號碼 -->
    <?php
    session_start();
    $sql1="SELECT `period`,`number`,`type` FROM `award_numbers` WHERE `period`='1' AND `year`='2020' ORDER BY `type`";
    $type1=$pdo->query($sql1)->fetchAll(pdo::FETCH_ASSOC);
    ?>
    <div class="text-center">
    <a href="index.php?go=main" class="go_index">#</a>
    </div>
    <div>
    <table class="controllerTable border mt-5 container text-center">
        <tr><td colspan="4">01&02</td></tr>
        <tr class="border">
            <th>獎項</th>
            <th>中獎號碼</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php
        foreach($type1 as $t1value){
            echo '<tr class="col-1">';
            echo '<td class="text-left">';
            switch($t1value['type']){
                case 1:
                    echo '特別獎(1000萬)';
                break;
                case 2:
                    echo '特獎(200萬)';
                break;
                case 3:
                    echo '頭獎-六獎(20萬-200)';
                break;
                case 4:
                    echo '增開六獎(200)';
                break;
            }
            echo '</td>';
                if(!empty($_GET['insert'])&&$t1value['number']==$_GET['insert']){
                    echo '<td class="insert">'.$t1value['number'].'</td>';
                }else{
                    echo '<td>'.$t1value['number'].'</td>';
                }


            echo '<td><a href="revise_awards.php?period=1&revise='.$t1value['number'].'" class="btn">修改</a></td>';
            echo '<td><a href="awards_api/del_awards.php?period=1&del='.$t1value['number'].'" class="btn">刪除</a></td>';
            echo '</tr>';
            
            
        }
        ?>
        <tr><td colspan="4">&emsp;</td></tr>
        <tr>
            <form method="post" action="awards_api/add_awards.php">
            <td><input type="text" placeholder=" type1~4" name="add_type1"></td>
            <td><input type="text" placeholder=" award_number" name="add_number1"></td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn">新增中獎號碼</button>
    </div>    
    <div class="text-center deltext">
        <?php
        if(isset($_SESSION['del'])){echo $_SESSION['del'];}
        ?>
    </div>
</form>
    </div>
    <br><br><hr><br><br>
    <br><br><hr><br><br>
    <br><br><hr><br><br>
    <br><br><hr><br><br>
    <br><br><hr><br><br>
    <br><br><hr><br><br>
    <br><br><hr><br><br>
    <br><br><hr><br><br>
    <br><br><hr><br><br>

<!-- 2020年第二期中獎號碼 -->
<!-- 2020年第三期中獎號碼 -->
<!-- 2020年第四期中獎號碼 -->
<!-- 2020年第五期中獎號碼 -->
<!-- 2020年第六期中獎號碼 -->
    
</body>
</html>