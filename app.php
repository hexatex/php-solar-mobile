<?php

include './Planet.php';

function main()
{
    $sun = new Star();
    $sun->setRadiusKm(696342);

    $mercury = new Planet();
    $mercury->setName('Mercury');
    $sun->addPlanet($mercury);

    $venus = new Planet();
    $venus->setName('Venus');
    $sun->addPlanet($venus);

    $earth = new Planet();
    $earth->setName('Earth');
    $sun->addPlanet($earth);

    $mars = new Planet();
    $mars->setName('Mars');
    $sun->addPlanet($mars);

    $ceres = new Planet();
    $ceres->setName('Ceres');
    $sun->addPlanet($ceres);

    $jupiter = new Planet();
    $jupiter->setName('Jupiter');
    $sun->addPlanet($jupiter);

    $saturn = new Planet();
    $saturn->setName('Saturn');
    $sun->addPlanet($saturn);

    $uranus = new Planet();
    $uranus->setName('Uranus');
    $sun->addPlanet($uranus);

    $neptune = new Planet();
    $neptune->setName('Neptune');
    $sun->addPlanet($neptune);

    $pluto = new Planet();
    $pluto->setName('Pluto');
    $sun->addPlanet($pluto);

    $charon = new Planet();
    $charon->setName('Charon');
    $sun->addPlanet($charon);

    $2003Ub313 = new Planet();
    $2003Ub313->setName('2003 UB313');
    $sun->addPlanet($2003Ub313);


}

main();