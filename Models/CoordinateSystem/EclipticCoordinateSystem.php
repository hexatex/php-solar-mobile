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

    public function getLatitude(): string
    {
        return Latitudes::ecliptic_latitude;
    }

    public function getLongitude(): string
    {
        return Longitudes::ecliptic_longitude;
    }
}
