<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            width: 200px;
            font-size: 20px;
            border-radius: 8px;
            padding: 20px 110px 20px 110px;
            background-color: chartreuse;
            border: double;
        }

        #submit {
            padding: 20px 10px;
            background-color: coral;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <input type="text" placeholder="Nhap so can doc" name="inputNumber">
    <input type="submit" value="Doc" id="submit">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["inputNumber"];
}
function readNumber($number)
{
    switch ($number) {
        case 0 :
            return "không ";
            break;
        case 1:
            return "một ";
            break;
        case 2:
            return "hai ";
            break;
        case 3:
            return "ba ";
            break;
        case 4:
            return "bốn ";
            break;
        case 5:
            return "năm ";
            break;
        case 6:
            return "sáu ";
            break;
        case 7:
            return "bảy ";
            break;
        case 8:
            return "tám ";
            break;
        case 9:
            return "chín ";
            break;
    }
}

if ($number < 10) {
    echo readNumber($number);
} elseif ($number < 20 and $number>=10) {
    if (substr($number, -1) == 0) {
        echo "mười ";
    } else {
        echo "mười " . readNumber(substr($number, -1));
    }
} elseif ($number <= 99 and $number>=20) {
    if (substr($number, -1) == 0) {
        echo readNumber(substr($number, 0, 1)) . "mươi ";
    } else {
        echo readNumber(substr($number, 0, 1)) . "mươi " . readNumber(substr($number, -1));
    }
} elseif ($number < 1000) {
    if (substr($number, 0, 2) == 0) {
        echo readNumber(substr($number, -2)) . "trăm ";
    } else {
        if (substr($number, 1, -1) == 0) {
            echo readNumber(substr($number, -2)) . "trăm linh " . readNumber(substr($number, -1));
        } else readNumber(substr($number, 0, 1)) . "tram " . readNumber(substr($number, 1, 1)) . "mươi" .
        readNumber(substr($number, -1));
    }

}
if ($number < 0 || $number >= 1000||$number = string)
    echo "Fail Nhap lại";
?>