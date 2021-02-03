<?php

trait IsPrimary
{
    /** @var Satellite[] */
    private $satellites = [];

    /**
     * @return Satellite[]
     */
    public function getSatellites(): array
    {
        return $this->satellites;
    }

    public function setSatellites(array $satellites)
    {
        $this->satellites = $satellites;
    }

    public function addSatellite(Satellite $satellite)
    {
        $this->satellites[$satellite->getCode()] = $satellite;
    }

    public function removeSatellite(Satellite $satellite)
    {
        unset($this->satellites[$satellite->getCode()]);
    }
}
