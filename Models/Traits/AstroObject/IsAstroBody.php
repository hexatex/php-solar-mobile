<?php

trait IsAstroBody
{
    use IsAstroObject;

    public function getIsTightlyBound(): bool
    {
        return true;
    }
}
