<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    *{
        font-weight:none;
    }
    .date{
        width:100%;
        height:65vh;
        position:absolute;
        top:0;
        left:0;
        /* background-color:#000; */
        /* mix-blend-mode:multiply; */
        font-size:200px;
        font-weight:700;
        color:#000;
        
    }
    .textbg{
        width:100%;
        height:65vh;
        position:absolute;
        top:0;
        left:0;
    }
    .leftfooter{
        font-size:25px;
    }
    .rightfooter{
        font-size:14px;
        position:absolute;
        bottom:10%;
        right:10%;
        border:1px #000 solid;
    }
    a{
        /* color:#c; */
    }
    </style>
</head>
<body>


<div class="container">
    <div class="row" style="height:65vh;">
        <div class="col-7">
            <!-- <img src="text-bg.jpeg" class="textbg"> -->
            <div>
                <p class="date d-flex justify-content-center align-items-center"><?= date('d');?></p>
            </div>
        </div>
        <div class="col-5">裝飾圖片</div>
    </div>

    <div class="row" style="height:10vh;">
        <div class="col-9"></div>
        <!-- <div class="col-9 leftfooter d-flex align-items-center"><span>本月已累積花費<?= 123;?>金額 共<?= 456;?>張發票</span></div> -->
        <div class="col-3"><a href="?go=login" class="text-decoration-none p-1 rightfooter">管理者登入</a></div>
    </div>
</div>

</body>
</html>