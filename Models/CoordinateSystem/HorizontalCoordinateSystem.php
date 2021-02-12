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
}
