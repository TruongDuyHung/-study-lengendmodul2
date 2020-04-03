<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid rebeccapurple;
    }
</style>
<table border="0">
    <caption><h1>Danh sach khach hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>
</table>
</body>
</html>
<?php
$customerlist = array(
    "1" => array("ten" => "Tran Van Tu", "ngaysinh" => "20/10/1987", "diachi" => "Ha Noi",
        "anh" => "img/1.jpg"),
    "2" => array("ten" => "Le Thi B", "ngaysinh" => "24/03/1999", "diachi" => "Sai Gon",
        "anh" => "img/2.jpg")
);
?>
<?php
foreach ($customerlist as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $value["ten"] . "</td>";
    echo "<td>" . $value['ngaysinh'] . "</td>";
    echo "<td>" . $value["diachi"] . "</td>";
    echo "<td><img src='" . $value['anh'] . "' width = '60px' height = '60px' /></td>";
    echo "</tr>";
}
?>