<?php

class HorizontalCoordinateSystem extends Model implements CoordinateSystem
{
    use IsCoordinateSystem;

    public function getFundamentalPlane(): string
    {
        return FundamentalPlanes::horizon;
    }

    public function getPoles(): string
    {
        return Poles::zenith_nadir;
    }


    public function getLatitude(): string
    {
        return Latitudes::altitude_or_elevation;
    }

    public function getLongitude(): string
    {
        return Longitudes::azimuth;
    }
}
