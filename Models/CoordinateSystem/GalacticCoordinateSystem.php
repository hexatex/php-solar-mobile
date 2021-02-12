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
}
