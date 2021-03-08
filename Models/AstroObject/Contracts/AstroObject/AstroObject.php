<?php

interface AstroObject extends Contracts\HasCode
{
    // Todo: get all other attributes used to categorize objects into the various AstroObject interfaces
    public function getIsTightlyBound(): bool;
    public function getTime(): Time;
    public function setTime(Time $time);
    public function setCurrentDateTime(DateTime $currentDateTime);
    public function updatePosition();
}
