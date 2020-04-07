<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
<form action="actionphp.php" method="post" >
<div>
    <label>Tên người dùng: </label>
    <div><input type="text" name="name" placeholder="Trần Lê Minh Công">
    </div>
    <br>
    <label>Email: </label>
   <div> <input type="email" name="email" placeholder="abcd@hub.com"></div>
    <br>
    <label>Điện thoại: </label>
    <div><input type="number" name="phone" placeholder="0987100001"></div>
    <input type="submit" value="Nhập">
</div>
</form>
</body>
</html>
<?php
