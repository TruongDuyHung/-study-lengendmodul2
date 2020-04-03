<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice4</title>
    <style>
        input[type=text] {
            background-color: coral;
            width: 300px;
            font-size: 10px;
            border: 12px solid brown;
            border-radius: 0px;
            padding: 112px 10px 12px 10px;
        }

        #submit {
            background-color: green;
            border-radius: 8px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Tu dien Anh-Viet</h2>
<form action="" method="post">
    <input type="text" name="search" placeholder="Word input">
    <input type="submit" id="submit" value="Find">
</form>
</body>
</html>
<?php
$dictionary = array("hello" => "xin chao",
    'bye' => 'tam biet',
    'say' => 'noi',
    'call' => 'goi',
    'run' => 'chay',
    'computer' => 'may tinh');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $decription) {
        if ($word == $searchword) {
            echo "Tu " . $word . ".<br/> Nghia cua tu: " . $decription;
            echo "<br?";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Khong tim that tu can tra";
    }
}
?>