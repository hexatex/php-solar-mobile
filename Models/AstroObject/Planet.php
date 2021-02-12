<?php

class Planet extends Model implements Satellite, AstroBody, Primary, CenterPoint
{
    use IsSatellite, IsPrimary, IsAstroBody;

    private $code;
    private $name;
    private $primary;

    /*
     * Satellite
     */
    public function getIsNatural(): bool
    {
        return $this->code !== AstroObjects::nibiru;
    }

    /*
     * AstroBody
     */
    public function getIsTightlyBound(): bool
    {
        return true;
    }
}
