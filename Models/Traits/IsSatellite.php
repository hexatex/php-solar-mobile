<?php

trait IsSatellite
{
    /*
     * Satellite
     */
    /** @var Primary */
    private $primary;

    public function getPrimary(): ?Primary
    {
        return $this->primary;
    }

    public function setPrimary(Primary $primary)
    {
        $this->primary = $primary;
    }

    public function getIsSolar(): bool
    {
        if (!$this->primary) { // It is only solar if either directly or indirectly in orbit of the Sun
            return false;
        }

        if ($this->primary instanceof Star) {
            return $this->primary->getCode() === AstroObjects::sun;
        }

        if ($this->primary instanceof Satellite) {
            return $this->primary->getIsSolar();
        }

        return false;
    }
}
