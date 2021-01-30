<?php

trait IsSatellite
{
    /*
     * Satellite
     */
    /** @var Primary */
    private $primary;

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary(Primary $primary)
    {
        $this->primary = $primary;
    }
}
