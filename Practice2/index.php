<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .login {
        height: 200px;
        width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px cadetblue solid;
    }
    .login input {
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h3>Login</h3>
        <input type="text" name="name" size="30" placeholder="ten tk"> <br>
        <input type="password" name="pass" size="30" placeholder="password"> <br>
        <input type="submit" value="Sign in">
    </div>

</form>
</body>
</html>
<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $usename = $_POST["name"];
    $password = $_POST["pass"];
    if ($usename=="admin" and $password=="admin") {
        echo "<h2>Welcome <span style=\"color: green\">".$usename."</span> </h2>";
    } else {
        echo "<h3 style='color: brown'> Nhap lai e oi</h3>";
    }
} ?>