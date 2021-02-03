<?php

class Moon extends Model implements Satellite, AstroBody
{
    use IsSatellite, IsAstroBody;

    /*
     * Satellite
     */
    public function getIsNatural(): bool
    {
        return $this->primary->getCode() !== AstroObjects::earth;
    }

    /*
     * AstroBody
     */
    public function getIsTightlyBound(): bool
    {
        return true;
    }
}
