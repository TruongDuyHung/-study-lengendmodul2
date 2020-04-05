<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNum = $_POST["firstNumber"];
    $secondNum = $_POST["secondNumber"];
    $calculation = $_POST["calculation"];

    $cal = new Calculator();

    switch ($calculation) {
        case "+" :
            $cal->sum($firstNum, $secondNum);
            break;
        case "-" :
            $cal->sub($firstNum, $secondNum);
            break;
        case "*" :
            $cal->mul($firstNum, $secondNum);
            break;
        case "/" :
            $cal->di($firstNum, $secondNum);
            break;
    }
}
class Calculator
{
    function sum($a, $b)
    {
        echo "Result is: ".($a + $b);
    }
    function sub($a, $b)
    {
        echo "Result is: ".($a - $b);
    }
    function mul($a, $b)
    {
        echo "Result is: ".($a * $b);
    }
    function di($a, $b)
    {
        echo "Result is: ".($a / $b);
    }
}
?>