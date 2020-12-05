<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet type="text/css" href="invoice.css">
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