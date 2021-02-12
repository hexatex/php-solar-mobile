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
}
