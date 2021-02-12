<?php

class Star extends Model implements Primary, CenterPoint
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

    /*
     * Accessors & Mutators
     */
    public function getRadiusKm(): int
    {
        return $this->radiusKm;
    }

    public function setRadiusKm(int $radiusKm)
    {
        $this->radiusKm = $radiusKm;
    }

    /**
     * @return Planet[]
     */
    public function getPlanets(): array
    {
        return $this->planets;
    }

    /**
     * @param Planet[] $planets
     */
    public function setPlanets(array $planets)
    {
        $this->planets = $planets;
    }

    public function addPlanet(Planet $planet)
    {
        $this->planets[$planet->getCode()] = $planet;
    }
}
