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
        <tr><td colspan="4" class="periodtitle" style="font-size:40px;">01&02</td></tr>
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
            <td><input type="text" placeholder=" award_number" name="add_number1" maxlength="8"></td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn">新增中獎號碼</button>
    </div>    
    <div class="text-center deltext">
        <?php
        if(isset($_SESSION['del1'])){echo $_SESSION['del1'];}
        ?>
    </div>
</form>
</div>

    <br><br><hr><br><br>

<!-- 2020年第二期中獎號碼 -->
    <?php
    $sql1="SELECT `period`,`number`,`type` FROM `award_numbers` WHERE `period`='2' AND `year`='2020' ORDER BY `type`";
    $type1=$pdo->query($sql1)->fetchAll(pdo::FETCH_ASSOC);
    ?>
    <div class="text-center">
    <!-- <a href="index.php?go=main" class="go_index">#</a> -->
    </div>
    <div>
    <table class="controllerTable border mt-5 container text-center">
    <tr><td colspan="4" class="periodtitle" style="font-size:40px;">03&04</td></tr>
        <tr class="border">
            <th>獎項</th>
            <th>中獎號碼</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php
        foreach($type1 as $t2value){
            echo '<tr class="col-1">';
            echo '<td class="text-left">';
            switch($t2value['type']){
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
                if(!empty($_GET['insert'])&&$t2value['number']==$_GET['insert']){
                    echo '<td class="insert">'.$t2value['number'].'</td>';
                }else{
                    echo '<td>'.$t2value['number'].'</td>';
                }


            echo '<td><a href="revise_awards.php?period=2&revise='.$t2value['number'].'" class="btn">修改</a></td>';
            echo '<td><a href="awards_api/del_awards.php?period=2&del='.$t2value['number'].'" class="btn">刪除</a></td>';
            echo '</tr>';
            
            
        }
        ?>
        <tr><td colspan="4">&emsp;</td></tr>
        <tr>
            <form method="post" action="awards_api/add_awards.php">
            <td><input type="text" placeholder=" type1~4" name="add_type2"></td>
            <td><input type="text" placeholder=" award_number" name="add_number2" maxlength="8"></td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn">新增中獎號碼</button>
    </div>    
    <div class="text-center deltext">
        <?php
        if(isset($_SESSION['del2'])){echo $_SESSION['del2'];}
        ?>
    </div>
</form>
</div>

    <br><br><hr><br><br>
<!-- 2020年第三期中獎號碼 -->
<?php
    $sql1="SELECT `period`,`number`,`type` FROM `award_numbers` WHERE `period`='3' AND `year`='2020' ORDER BY `type`";
    $type1=$pdo->query($sql1)->fetchAll(pdo::FETCH_ASSOC);
    ?>
    <div class="text-center">
    <!-- <a href="index.php?go=main" class="go_index">#</a> -->
    </div>
    <div>
    <table class="controllerTable border mt-5 container text-center">
    <tr><td colspan="4" class="periodtitle" style="font-size:40px;">05&06</td></tr>
        <tr class="border">
            <th>獎項</th>
            <th>中獎號碼</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php
        foreach($type1 as $t3value){
            echo '<tr class="col-1">';
            echo '<td class="text-left">';
            switch($t3value['type']){
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
                if(!empty($_GET['insert'])&&$t3value['number']==$_GET['insert']){
                    echo '<td class="insert">'.$t3value['number'].'</td>';
                }else{
                    echo '<td>'.$t3value['number'].'</td>';
                }


            echo '<td><a href="revise_awards.php?period=3&revise='.$t3value['number'].'" class="btn">修改</a></td>';
            echo '<td><a href="awards_api/del_awards.php?period=3&del='.$t3value['number'].'" class="btn">刪除</a></td>';
            echo '</tr>';
            
            
        }
        ?>
        <tr><td colspan="4">&emsp;</td></tr>
        <tr>
            <form method="post" action="awards_api/add_awards.php">
            <td><input type="text" placeholder=" type1~4" name="add_type3"></td>
            <td><input type="text" placeholder=" award_number" name="add_number3" maxlength="8"></td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn">新增中獎號碼</button>
    </div>    
    <div class="text-center deltext">
        <?php
        if(isset($_SESSION['del3'])){echo $_SESSION['del3'];}
        ?>
    </div>
</form>
</div>

    <br><br><hr><br><br>
<!-- 2020年第四期中獎號碼 -->
<?php
    $sql1="SELECT `period`,`number`,`type` FROM `award_numbers` WHERE `period`='4' AND `year`='2020' ORDER BY `type`";
    $type1=$pdo->query($sql1)->fetchAll(pdo::FETCH_ASSOC);
    ?>
    <div class="text-center">
    <!-- <a href="index.php?go=main" class="go_index">#</a> -->
    </div>
    <div>
    <table class="controllerTable border mt-5 container text-center">
    <tr><td colspan="4" class="periodtitle" style="font-size:40px;">07&08</td></tr>
        <tr class="border">
            <th>獎項</th>
            <th>中獎號碼</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php
        foreach($type1 as $t4value){
            echo '<tr class="col-1">';
            echo '<td class="text-left">';
            switch($t4value['type']){
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
                if(!empty($_GET['insert'])&&$t4value['number']==$_GET['insert']){
                    echo '<td class="insert">'.$t4value['number'].'</td>';
                }else{
                    echo '<td>'.$t4value['number'].'</td>';
                }


            echo '<td><a href="revise_awards.php?period=4&revise='.$t4value['number'].'" class="btn">修改</a></td>';
            echo '<td><a href="awards_api/del_awards.php?period=4&del='.$t4value['number'].'" class="btn">刪除</a></td>';
            echo '</tr>';
            
            
        }
        ?>
        <tr><td colspan="4">&emsp;</td></tr>
        <tr>
            <form method="post" action="awards_api/add_awards.php">
            <td><input type="text" placeholder=" type1~4" name="add_type4"></td>
            <td><input type="text" placeholder=" award_number" name="add_number4" maxlength="8"></td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn">新增中獎號碼</button>
    </div>    
    <div class="text-center deltext">
        <?php
        if(isset($_SESSION['del4'])){echo $_SESSION['del4'];}
        ?>
    </div>
</form>
</div>

    <br><br><hr><br><br>
<!-- 2020年第五期中獎號碼 -->
<?php
    $sql1="SELECT `period`,`number`,`type` FROM `award_numbers` WHERE `period`='5' AND `year`='2020' ORDER BY `type`";
    $type1=$pdo->query($sql1)->fetchAll(pdo::FETCH_ASSOC);
    ?>
    <div class="text-center">
    <!-- <a href="index.php?go=main" class="go_index">#</a> -->
    </div>
    <div>
    <table class="controllerTable border mt-5 container text-center">
    <tr><td colspan="4" class="periodtitle" style="font-size:40px;">09&10</td></tr>
        <tr class="border">
            <th>獎項</th>
            <th>中獎號碼</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php
        foreach($type1 as $t5value){
            echo '<tr class="col-1">';
            echo '<td class="text-left">';
            switch($t5value['type']){
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
                if(!empty($_GET['insert'])&&$t5value['number']==$_GET['insert']){
                    echo '<td class="insert">'.$t5value['number'].'</td>';
                }else{
                    echo '<td>'.$t5value['number'].'</td>';
                }


            echo '<td><a href="revise_awards.php?period=5&revise='.$t5value['number'].'" class="btn">修改</a></td>';
            echo '<td><a href="awards_api/del_awards.php?period=5&del='.$t5value['number'].'" class="btn">刪除</a></td>';
            echo '</tr>';
            
            
        }
        ?>
        <tr><td colspan="4">&emsp;</td></tr>
        <tr>
            <form method="post" action="awards_api/add_awards.php">
            <td><input type="text" placeholder=" type1~4" name="add_type5"></td>
            <td><input type="text" placeholder=" award_number" name="add_number5" maxlength="8"></td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn">新增中獎號碼</button>
    </div>    
    <div class="text-center deltext">
        <?php
        if(isset($_SESSION['del5'])){echo $_SESSION['del5'];}
        ?>
    </div>
</form>
</div>

    <br><br><hr><br><br>
<!-- 2020年第六期中獎號碼 -->
<?php
    $sql1="SELECT `period`,`number`,`type` FROM `award_numbers` WHERE `period`='6' AND `year`='2020' ORDER BY `type`";
    $type1=$pdo->query($sql1)->fetchAll(pdo::FETCH_ASSOC);
    ?>
    <div class="text-center">
    <!-- <a href="index.php?go=main" class="go_index">#</a> -->
    </div>
    <div>
    <table class="controllerTable border mt-5 container text-center">
    <tr><td colspan="4" class="periodtitle" style="font-size:40px;">11&12</td></tr>
        <tr class="border">
            <th>獎項</th>
            <th>中獎號碼</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php
        foreach($type1 as $t6value){
            echo '<tr class="col-1">';
            echo '<td class="text-left">';
            switch($t6value['type']){
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
                if(!empty($_GET['insert'])&&$t6value['number']==$_GET['insert']){
                    echo '<td class="insert">'.$t6value['number'].'</td>';
                }else{
                    echo '<td>'.$t6value['number'].'</td>';
                }


            echo '<td><a href="revise_awards.php?period=6&revise='.$t6value['number'].'" class="btn">修改</a></td>';
            echo '<td><a href="awards_api/del_awards.php?period=6&del='.$t6value['number'].'" class="btn">刪除</a></td>';
            echo '</tr>';
            
            
        }
        ?>
        <tr><td colspan="4">&emsp;</td></tr>
        <tr>
            <form method="post" action="awards_api/add_awards.php">
            <td><input type="text" placeholder=" type1~4" name="add_type6"></td>
            <td><input type="text" placeholder=" award_number" name="add_number6" maxlength="8"></td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn">新增中獎號碼</button>
    </div>    
    <div class="text-center deltext">
        <?php
        if(isset($_SESSION['del6'])){echo $_SESSION['del6'];}
        ?>
    </div>
</form>
</div>

    <br><br>
</body>
</html>