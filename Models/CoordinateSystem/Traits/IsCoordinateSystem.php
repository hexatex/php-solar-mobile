<?php

trait IsCoordinateSystem
{
    /** @var ?CenterPoint */
    protected $centerPoint;

    public function setCenterPoint(CenterPoint $centerPoint)
    {
        $this->centerPoint = $centerPoint;
    }

    public function getCenterPoint(): CenterPoint
    {
        return $this->centerPoint;
    }
}
