<?php
include "QuadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $a= $_REQUEST["a"];
    $b= $_REQUEST['b'];
    $c= $_REQUEST['c'];
    $result = new QuadraticEquation($a,$b,$c);
    echo $result->display();
}