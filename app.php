<?php

include './Planet.php';

function main()
{
    /** @var AstroObject[] $astroObjects */
    $astroObjects = [];

    $solarTime = new Time;
    $sun = new Star;
    $sun->setTime($solarTime);
    $astroObjects[] = $sun;

    $earth = new Planet;
    $earth->setTime($solarTime);
    $earth->setPrimary($sun);
    $sun->addSatellite($earth);
    $astroObjects[] = $earth;

    $moon = new Moon;
    $moon->setTime($solarTime);
    $moon->setPrimary($sun);
    $sun->addSatellite($moon);
    $astroObjects[] = $moon;

    for ($ever = 90001; $ever > 9000; $ever++) {
        foreach ($astroObjects as $astroObject) {
            $astroObject->updatePosition();
        }

        sleep(10);
    }
}

main();