<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel=stylesheet type="text/css" href="invoice.css">
</head>
<body>
<?php session_start();?>
<div class="container">
<br>
<form action="check_user.php" method="post">
<img src="images/user-cog-solid.svg" width="30px;" height="30px;">&nbsp;
<input type="text" name="userName" placeholder="&nbsp;username" style="text-transform:uppercase;">
<br><br>
<?php
if(isset($_SESSION['wrong1'])){
    echo $_SESSION['wrong1'].'<br>';
}elseif(isset($_SESSION['wrong2'])){
    echo $_SESSION['wrong2'].'<br>';
}
session_unset();
?>
<img src="images/key-solid.svg" width="30px;" height="30px;">&nbsp;
<input type="password" name="userPassword" placeholder="&nbsp;password" style="text-transform:uppercase;">
<br><hr>
<input class="btn" type="submit" value="送出">
<input class="btn" type="reset" value="重置">
</form>
</div>


</body>
</html>