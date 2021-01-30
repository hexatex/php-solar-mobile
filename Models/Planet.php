<?php

class Planet extends Model implements Satellite, AstroBody, Primary
{
    use IsSatellite, IsPrimary;

    private $code;
    private $name;
    private $primary;
}
