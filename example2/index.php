<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css1.css">
<body>
<div id="content">
    <form action="" method="POST">
        <div>
            <label>Amount Money</label>
            <input type="text" name="amountmoney" value="0"> <br>
            <label>Rate</label>
            <input type="text" name="rate" value="0"><br>
            <label> Number Year</label>
            <input type="text" name="year" value="0"><br>
        </div>
        <div>
            <input type="submit" value="Calculate">
        </div>
    </form>
</div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amountmoney'];
    $rate = $_POST['rate'] / 100;
    $year = $_POST['year'];
    $valueFuture = 0;
    for ($num = 0; $num <= $year; $num++) {
        $valueFuture = $amount + ($amount * $rate);
        $amount= $valueFuture;
    }
    echo "Money in Future is: " . $valueFuture;
}
?>
