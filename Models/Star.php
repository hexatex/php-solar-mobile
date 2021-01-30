<?php

class Star extends Model implements Primary
{
    use IsPrimary;

    /** @var int */
    private $radiusKm;

    /** @var Planet[] */
    private $planets = [];

    /*
     * Accessors & Mutators
     */
    public function getRadiusKm()
    {
        return $this->radiusKm;
    }

    public function setRadiusKm(int $radiusKm)
    {
        $this->radiusKm = $radiusKm;
    }

    public function getPlanets()
    {
        return $this->planets;
    }

    public function setPlanets(array $planets)
    {
        $this->planets = $planets;
    }

    public function addPlanet(Planet $planet)
    {
        $this->planets[$planet->getId()] = $planet;
    }
}
