<?php

class EquatorialCoordinateSystem extends Model implements CoordinateSystem
{
    use IsCoordinateSystem, HasAstronomicalModel;

    public function getFundamentalPlane(): string
    {
        return FundamentalPlanes::celestial_equator;
    }

    public function getPoles(): string
    {
        return Poles::celestial_poles;
    }
}
