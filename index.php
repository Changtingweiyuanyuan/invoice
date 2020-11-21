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
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap');
    *{
        margin:0px;
        padding:0px;
        font-family: 'Noto Sans TC', sans-serif;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row border" style="height:15vh;"><h1 class="m-auto">發票入口</h1></div>
        
        <navigation>
            <ul class="row d-flex justify-content-around my-0"  style="height:10vh;">
                <il class="m-auto"><a href="#" class="btn btn-warning text-dark text-decoration-none">新增發票</a></il>
                <il class="m-auto"><a href="#" class="btn btn-warning text-dark text-decoration-none">各期發票儲存</a></il>
                <il class="m-auto"><a href="#" class="btn btn-warning text-dark text-decoration-none">對獎頁面</a></il>
            </ul>
        </navigation>

        <main>
            <div class="row border" style="height:75vh;">
                <?php include_once "main.php";?>
            </div>
        </main>
    </div>
</body>
</html>

<?php





?>