<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>發票入口網站</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap');
    /* font-family: 'Mukta', sans-serif; */
    body{
        background-color:#fff1e6;
        text-decoration:none;
    }
    *{
        margin:0px;
        padding:0px;
        font-family: 'Mukta', sans-serif;
    }
    a{
        color:#000;
    }
    a:hover{
        text-decoration:none;
        color:#000;
    }
    .btn{
        text-shadow: 0 8px 10px #c4b59d, 0px -2px 1px #fff1e6;
    }
    .header{
        font-weight:bold;
        font-size:3.5rem;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" style="height:15vh;"><h1 class="m-auto "><a href="?go=main" class="header">Let's check your invoices</a></h1></div>
        
        <navigation>
            <ul class="row d-flex justify-content-around my-0"  style="height:10vh;">
                <il class="m-auto">
                <img src="images/plus-square-solid.svg" width="30px;" height="30px;">
                <a href="?go=add_invoice" class="btn">新增發票</a>
                </il>
                <il class="m-auto">
                <img src="images/clipboard-list-solid.svg" width="30px;" height="30px;">
                <a href="?go=invoice_list" class="btn">各期發票儲存</a>
                </il>
                <il class="m-auto">
                <img src="images/search-dollar-solid.svg" width="30px;" height="30px;">
                <a href="?go=checkTheWinning" class="btn">對獎頁面</a>
                </il>
            </ul>
        </navigation>

        <main>
            <div class="row border" style="height:75vh;">
                <?php 
                if(isset($_GET['go']))
                {
                    $URL=$_GET['go'].".php";
                    include $URL;
                }else{
                include_once "main.php";
                }
                ?>
            </div>
        </main>
    </div>
</body>
</html>

<?php





?>