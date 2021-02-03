<?php

class Moon extends Model implements Satellite, AstroBody
{
    use IsSatellite, IsAstroBody;

    /*
     * Satellite
     */
    public function getIsNatural()
    {
        return $this->primary->getCode() !== 'earth';
    }

    /*
     * AstroBody
     */
    public function getIsTightlyBound(): bool
    {
        return true;
    }
}
