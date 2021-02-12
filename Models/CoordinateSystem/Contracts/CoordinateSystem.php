<?php

/**
 * Interface CoordinateSystem
 *
 * https://en.wikipedia.org/wiki/Celestial_coordinate_system
 */
interface CoordinateSystem
{
    public function setCenterPoint(CenterPoint $centerPoint);
    public function getCenterPoint(): CenterPoint;
    public function getFundamentalPlane(): string;
    public function getPoles(): string;
}
