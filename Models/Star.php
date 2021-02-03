<?php

class Star extends Model implements Primary
{
    use IsPrimary, IsAstroObject;

    /** @var int */
    private $radiusKm;

    /** @var string identifier for programmatic use */
    private $code;

    /** @var Planet[] */
    private $planets = [];

    /*
     * AstroObject
     */
    public function getIsTightlyBound(): bool
    {
        return true;
    }

    public function getIsSolar(): bool
    {
        return $this->code === 'sun';
    }

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
