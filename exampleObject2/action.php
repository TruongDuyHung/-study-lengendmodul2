<?php
include "StopWatch.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $starttime1= $_REQUEST["starttime"];
    $endtime1= $_REQUEST["endtime"];
    $starttime = strtotime($starttime1);
        $endtime= strtotime($endtime1);
    $stopWatch = new StopWatch($starttime,$endtime);
    $stopWatch->getElapsedTime();
    echo $stopWatch;
}