<?php

/**
 * Trait IsSatellite
 * http://www.planetaryorbits.com/tutorial-javascript-orbit-simulation.html
 * https://github.com/robbykraft/Kepler/blob/master/Kepler.pde (better code)
 *
 * # notes
 * - rate is aka century variation in some documentation
 *
 * @property float $a0SemiMajorAxis
 * @property float $a0Rate
 * @property float $e0Eccentricity
 * @property float $e0Rate
 * @property float $i0InclinationDeg
 * @property float $i0Rate
 * @property float $l0MeanLongitudeDeg
 * @property float $l0Rate
 * @property float $w0LongitudeOfPerihelionDeg
 * @property float $w0Rate
 * @property float $o0LongOfAscendingNodeDeg
 * @property float $o0Rate
 *
 * @property-read float $semi_major_axis_au;
 * @property-read float $eccentricity;
 * @property-read float $inclination;
 * @property-read float $meanLongitude;
 * @property-read float $longOfAscendingNode;
 * @property-read float $longitudeOfPerihelion;
 *
 * Todo: (To be precise, the Keplerian orbit is a conic section, which can be either an ellipse, which includes circles,
 * a parabola, a hyperbola, or a straight line! But here, we are only interested in elliptical orbits. The other kinds
 * of orbits are not used for satellites, at least not on purpose, and tracking programs typically aren’t programmed to
 * handle them.) https://www.amsat.org/keplerian-elements-tutorial/
 *
 * ^ Sounds fun maybe
 *
 */
trait IsSatellite
{
    /*
     * Satellite
     */
    /** @var Primary */
    private $primary;

    public function setPrimary(Primary $primary)
    {
        $this->primary = $primary;
    }

    public function getIsSolar(): bool
    {
        if (!$this->primary) { // It is only solar if either directly or indirectly in orbit of the Sun
            return false;
        }

        if ($this->primary instanceof Star) {
            return $this->primary->getCode() === AstroObjects::sun;
        }

        if ($this->primary instanceof Satellite) { // Maybe we are indirectly in orbit of the Sun
            return $this->primary->getIsSolar();
        }

        return false; // Extrasolar
    }

    abstract function getTime(): Time;

    public function updateOrbit()
    {
        $julianDay = $this->getTime()->getJulianDay();
        $this->semi_major_axis_au = $this->a0SemiMajorAxis + ($this->a0Rate * $julianDay);
        $this->eccentricity = $this->e0Eccentricity + ($this->e0Rate * $julianDay);
        $this->inclination = $this->i0InclinationDeg + ($this->i0Rate * $julianDay);
        $this->meanLongitude = $this->l0MeanLongitudeDeg + ($this->l0Rate * $julianDay);
        $this->longitudeOfPerihelion = $this->w0LongitudeOfPerihelionDeg + ($this->w0Rate * $julianDay);
        $this->longOfAscendingNode = $this->o0LongOfAscendingNodeDeg + ($this->o0Rate * $julianDay);
    }
}
