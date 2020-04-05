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
<div id="content">
<h1> Product Discount Calculator</h1>
<body>
<div id="data">
<form action="display_discount.php" method="POST">
    <div>
        <label>Prodict Description</label>
        <input type="text" name="nonproduct" placeholder="product is v.v..v">
        <br>
        <label>List Price</label>
        <input type="text" name="price" placeholder="USD"> <br>
        <label>Discount Percent</label>
        <input type="text" name="discountPercent"> (%)
    </div>
    <div>
        <label>&nbsp;</label>
        <label>&nbsp;</label>

        <input type="submit" value="Calculate Discount">
    </div>
</form>
</div>
</div>
</body>
</html>

