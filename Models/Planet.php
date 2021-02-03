<?php

class Planet extends Model implements Satellite, AstroBody, Primary
{
    use IsSatellite, IsPrimary, IsAstroBody;

    private $code;
    private $name;
    private $primary;

    /*
     * Satellite
     */
    public function getIsNatural()
    {
        return $this->code !== 'nibiru';
    }

    /*
     * AstroBody
     */
    public function getIsTightlyBound(): bool
    {
        // TODO: Implement getIsTightlyBound() method.
    }
}
