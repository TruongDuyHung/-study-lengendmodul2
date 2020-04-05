<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $product = $_POST["nonproduct"];
    $price = $_POST["price"];
    $percent = $_POST["discountPercent"];
    $discountAmount = $price*$percent/100;
}
?>
<table border="1">
    <caption> Product Discount Calculator</caption>
    <tr>
        <td>Product Description :
        <?php echo $product;?>
        </td>
    </tr>
    <tr>
        <td>List Price :
        <?php echo $price;?>
        </td>
    </tr>
    <tr>
        <td>Discount Percent :
        <?php echo $percent;?>
        </td>
    </tr>
    <tr>
        <td><?php echo "Discount Amount: ".$discountAmount;?></td>
    </tr>
    <tr>
        <td><?php echo "Discount Price: ".($price-$discountAmount);?></td>
    </tr>
</table>
