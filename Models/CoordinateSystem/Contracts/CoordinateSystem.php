<?php

interface CoordinateSystem
{
    public function setCenterPoint(CenterPoint $centerPoint);
    public function getCenterPoint(): CenterPoint;
}
