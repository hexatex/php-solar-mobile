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

    public function getIsSolar(): bool
    {
        if (!$this->primary) { // Override when true (if Star is "sun")
            return false;
        }

        if ($this->primary instanceof Star) {
            return $this->primary->getCode() === 'sun';
        }

        if ($this->primary instanceof Satellite) {
            return $this->primary->getIsSolar();
        }

        return false;
    }
}
