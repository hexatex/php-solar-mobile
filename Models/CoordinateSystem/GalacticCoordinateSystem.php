<?php

class GalacticCoordinateSystem extends Model implements CoordinateSystem
{
    use IsCoordinateSystem;

    public function getFundamentalPlane(): string
    {
        return FundamentalPlanes::galactic;
    }

    public function getPoles(): string
    {
        return Poles::galactic_poles;
    }

    public function getLatitude(): string
    {
        return Latitudes::galactic_latitude;
    }

    public function getLongitude(): string
    {
        return Longitudes::galactic_longitude;
    }
}
