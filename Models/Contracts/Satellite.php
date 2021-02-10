<?php

interface Satellite extends AstroObject
{
    public function getIsNatural();
    public function getIsSolar(): bool;
    public function setPrimary(Primary $primary);
}
