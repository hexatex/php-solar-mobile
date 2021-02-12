<?php

class SupergalacticCoordinateSystem extends Model implements CoordinateSystem
{
    use IsCoordinateSystem;

    public function getFundamentalPlane(): string
    {
        return FundamentalPlanes::supergalactic;
    }

    public function getPoles(): string
    {
        return Poles::supergalactic_poles;
    }

    public function getLatitude(): string
    {
        return Latitudes::supergalactic_latitude;
    }

    public function getLongitude(): string
    {
        return Longitudes::supergalactic_longitude;
    }
}
