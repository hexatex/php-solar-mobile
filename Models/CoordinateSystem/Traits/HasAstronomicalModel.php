<?php

trait HasAstronomicalModel
{
    public function getAstronomicalModel(): string
    {
        if ($this->centerPoint instanceof Planet && $this->centerPoint->getCode() === AstroObjects::earth) {
            return AstronomicalModels::geocentric;
        }

        if ($this->centerPoint instanceof Star && $this->centerPoint->getCode() === AstroObjects::sun) {
            return AstronomicalModels::heliocentric;
        }

        return AstronomicalModels::default;
    }
}
