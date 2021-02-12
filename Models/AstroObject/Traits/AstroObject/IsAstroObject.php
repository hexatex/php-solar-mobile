<?php

trait IsAstroObject
{
    /** @var string */
    protected $code;

    /** @var DateTime */
    protected $currentDateTime;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }

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
