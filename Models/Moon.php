<?php

class Moon extends Model implements Satellite, AstroBody
{
    use IsSatellite;

    public function getIsSolar(): bool
    {
        return $this->primary->getIsSolar();
    }
}
