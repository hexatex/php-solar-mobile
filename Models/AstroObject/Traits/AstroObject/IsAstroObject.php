<?php

trait IsAstroObject
{
    /** @var DateTime */
    protected $currentDateTime;

    public function getTime(): Time
    {
        return $this->time;
    }

    public function setTime(Time $time)
    {
        $this->time = $time;
    }

    public function setCurrentDateTime(DateTime $currentDateTime)
    {
        $this->currentDateTime = $currentDateTime;
    }

    public function updatePosition()
    {
        // Todo: implement a default method
    }
}
