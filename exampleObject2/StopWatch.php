<?php


class StopWatch
{
    private $starttime, $endtime;

    function __construct($starttime, $endtime)
    {
        $this->starttime = $starttime;
        $this->endtime = $endtime;
    }

    function startTime()
    {
        return time();
    }

    function start()
    {
        return $this->starttime = $this->startTime();
    }

    function stop()
    {
        return $this->endtime = $this->startTime();
    }
    function getElapsedTime() {
        return strtotime($this->starttime)-strtotime($this->endtime);
    }
}
