<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <title>發票入口網站</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap');
    /* @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap'); */
    /* font-family: 'Mukta', sans-serif; */
    body{
        background-color:#fff1e6;
        text-decoration:none;
    }
    *{
        margin:0px;
        padding:0px;
        font-family: 'Libre Baskerville', serif;
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
        /* font-weight:bold; */
        font-size:3.5rem;
    }
    .navigation{
        position:fixed;
        left:0px;
        top:30%;
        font-size:25px;
    }
    .內容區啦{
        width:65vw;
        margin:auto;
    }

    </style>
</head>
<body>
<div class="navigation w-100 col-3">
    <ul class="d-flex flex-column">
        <il>
        <img src="images/plus-square-solid.svg" width="30px" height="30px;"><br>
        <a href="?go=add_invoice" class="btn mb-3">新增發票</a>
        </il>
        <il>
        <img src="images/clipboard-list-solid.svg" width="30px" height="30px;"><br>
        <a href="?go=invoice_list" class="btn mb-3">各期發票儲存</a>
        </il>
        <il>
        <img src="images/search-dollar-solid.svg" width="30px" height="30px;"><br>
        <a href="?go=checkTheWinning" class="btn mb-3">本期中獎號碼</a>
        </il>
    </ul>
</div>

<div class="container">
        <div class="row" style="height:15vh;"><h1 class="m-auto "><a href="?go=main" class="header">check invoices</a></h1></div>

        <br><br>
        <main>
            <div class="內容區啦 border">
                <?php 
                if(isset($_GET['go']))
                {$URL=$_GET['go'].'.php';
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