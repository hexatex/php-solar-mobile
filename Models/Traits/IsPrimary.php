<?php

trait IsPrimary
{
    /** @var Satellite[] */
    private $satellites = [];

    public function getSatellites()
    {
        return $this->satellites;
    }

    public function setSatellites(array $satellites)
    {
        $this->satellites = $satellites;
    }

    public function addSatellite(Satellite $satellite)
    {
        $this->satellites[$satellite->getId()] = $satellite;
    }

    public function removeSatellite(Satellite $satellite)
    {
        unset($this->satellites[$satellite->getId()]);
    }
}