<?php

interface AstroObject
{
    // Todo: get all other attributes used to categorize objects into the various AstroObject interfaces
    public function getIsTightlyBound(): bool;

    public function getIsSolar(): bool;
}
