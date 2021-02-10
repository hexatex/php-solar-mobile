<?php

class HelioEclipticCoordinates
{
    /** @var float */
    private $au;
    /** @var float */
    private $eccentricity;
    /** @var float */
    private $orbitalInclination;
    /** @var float */
    private $orbitOrientationConstantDoesntChange;
    /** @var float */
    private $longOfAscendingNode;
    /** @var float */
    private $longitudeOfPerihelion;
    /** @var float */
    private $meanLongitude;

    /**
     * Get au
     * ORBIT SIZE (CONSTANT = DOESN'T CHANGE)
     * @return float
     */
    public function getAu()
    {
        return $this->au;
    }

    /**
     * Set au
     * ORBIT SIZE (CONSTANT = DOESN'T CHANGE)
     * @param float $au
     */
    public function setAu(float $au)
    {
        $this->au = $au;
    }

    /**
     * Get eccentricity
     * ORBIT SHAPE (CONSTANT = DOESN'T CHANGE)
     * @return float
     */
    public function getEccentricity()
    {
        return $this->eccentricity;
    }

    /**
     * Set eccentricity
     * ORBIT SHAPE (CONSTANT = DOESN'T CHANGE)
     * @param float $eccentricity
     */
    public function setEccentricity(float $eccentricity)
    {
        $this->eccentricity = $eccentricity;
    }

    /**
     * Get orbitalInclination
     * ORBIT ORIENTATION (CONSTANT = DOESN'T CHANGE)
     * @return float
     */
    public function getOrbitalInclination()
    {
        return $this->orbitalInclination;
    }

    /**
     * Set orbitalInclination
     * ORBIT ORIENTATION (CONSTANT = DOESN'T CHANGE)
     * @param float $orbitalInclination
     */
    public function setOrbitalInclination(float $orbitalInclination)
    {
        $this->orbitalInclination = $orbitalInclination;
    }

    public function getOrbitOrientationConstantDoesntChange()
    {
        return $this->orbitOrientationConstantDoesntChange;
    }

    public function setOrbitOrientationConstantDoesntChange(float $orbitOrientationConstantDoesntChange)
    {
        $this->orbitOrientationConstantDoesntChange = $orbitOrientationConstantDoesntChange;
    }

    public function getLongOfAscendingNode()
    {
        return $this->longOfAscendingNode;
    }

    public function setLongOfAscendingNode(float $longOfAscendingNode)
    {
        $this->longOfAscendingNode = $longOfAscendingNode;
    }

    /**
     * Get longitudeOfPerihelion
     * ORBIT ORIENTATION
     * @return float
     */
    public function getLongitudeOfPerihelion()
    {
        return $this->longitudeOfPerihelion;
    }

    /**
     * Set longitudeOfPerihelion
     * ORBIT ORIENTATION
     * @param float $longitudeOfPerihelion
     */
    public function setLongitudeOfPerihelion(float $longitudeOfPerihelion)
    {
        $this->longitudeOfPerihelion = $longitudeOfPerihelion;
    }

    /**
     * Get meanLongitude
     * ORBIT POSITION (DYNAMIC = CHANGES OVER TIME)
     * @param float $meanLongitude
     */

    public function setMeanLongitude(float $meanLongitude)
    {
        $this->meanLongitude = $meanLongitude;
    }

    /**
     * Set meanLongitude
     * Set ORBIT POSITION (DYNAMIC = CHANGES OVER TIME)
     * @return mixed
     */
    public function getMeanLongitude()
    {
        return $this->meanLongitude;
    }
}
