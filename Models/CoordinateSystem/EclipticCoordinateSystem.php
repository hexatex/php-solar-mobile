<?php

class EclipticCoordinateSystem extends Model implements CoordinateSystem
{
    use IsCoordinateSystem, HasAstronomicalModel;

    public function getFundamentalPlane(): string
    {
        return FundamentalPlanes::ecliptic;
    }

    public function getPoles(): string
    {
        return Poles::ecliptic_poles;
    }
}
