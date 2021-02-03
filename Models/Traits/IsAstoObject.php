<?php

trait IsAstroObject
{
    /** @var Primary */
    protected $primary;

    /*
     * AstroObject
     */
    public function getIsSolar(): bool
    {
        if (!$this->primary) { // Override when true (if Star is "sun")
            return false;
        }

        return $this->primary->getIsSolar();
    }
}
