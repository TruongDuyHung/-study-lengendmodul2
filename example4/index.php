<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .effect {
            width: 500px;
            border: 1px solid seagreen;
        }
    </style>
</head>
<body>
<div>
<form action="action1.php" method="post" style="border: 5px solid seagreen; width: 500px;margin: auto;">
    <table>
        <caption>Calculator</caption>
        <tr>
            <td>First Operand :</td>
            <td><input type="text" name="firstNumber"></td>
        </tr>
        <tr>
            <td>Operator:</td>
            <td><select name="calculation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">/</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Second Operand:</td>
            <td><input type="text" name="secondNumber"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Count"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>