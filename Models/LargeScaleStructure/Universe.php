<?php

class Universe extends Model implements LargeScaleStructure
{
    /** @var AstroObject[] */
    private $astroObjects = [];

    /*
     * Accessors
     */
    /**
     * @return AstroObject[]
     */
    public function getAstroObjects(): array
    {
        return $this->astroObjects;
    }

    public function addAstroObject(AstroObject $astroObject)
    {
        $this->astroObjects[$astroObject->getCode()] = $astroObject;
    }

    public function removeAstroObject(AstroObject $astroObject)
    {
        unset($this->astroObjects[$astroObject->getCode()]);
    }
}
