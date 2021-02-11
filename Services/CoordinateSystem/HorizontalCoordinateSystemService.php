<?php

class HorizontalCoordinateSystemService
{
    public function get(Observer $observer)
    {
        $horizontalCoordinateSystem = new HorizontalCoordinateSystem;
        $horizontalCoordinateSystem->setCenterPoint($observer);

        return $horizontalCoordinateSystem;
    }
}
