<?php

trait IsAstroBody
{
    use IsAstroObject;

    public function getIsTightlyBound(): bool
    {
        return true;
    }

    /**
     * Update position in space given current time
     * Override this in the models to be more efficient
     */
    public function updatePosition()
    {
        if ($this instanceof Satellite) {
            $this->updateOrbit();
        }
    }
}
