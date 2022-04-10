<?php

use Stu\PlanetGenerator\PlanetGenerator;

$data[PlanetGenerator::COLGEN_DETAILS] = 'Klasse M - Basisklasse Erdähnlich';

$bonusdata = [
    PlanetGenerator::BONUS_AENERGY,
    PlanetGenerator::BONUS_ANYFOOD,
    PlanetGenerator::BONUS_ANYFOOD,
    PlanetGenerator::BONUS_HABITAT,
];

$data[PlanetGenerator::CONFIG_COLGEN_SIZEW] = 7;
$data[PlanetGenerator::CONFIG_COLGEN_SIZEH] = 5;

$hasground = 0;

$data[PlanetGenerator::COLGEN_BASEFIELD] = 201;
$odata[PlanetGenerator::COLGEN_BASEFIELD] = 900;
$udata[PlanetGenerator::COLGEN_BASEFIELD] = 801;

$phases = 0;
$ophases = 0;
$uphases = 0;

// config

$eisn = rand(1, 2);
$eiss = ($eisn == 2 ? 1 : rand(1, 2));

$land = rand(23, 24);
$berge = rand(3, 6);
$desert = 2;
$trees = rand(6, 8);

$ufels = rand(4, 7);
$uwasser = 5;

// Surface Phases

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'polar seeding north';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Polkappe N';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $eisn;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '201'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '501'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'polar seeding south';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Polkappe S';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $eiss;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '201'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '501'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'normal';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Landmassen';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $land;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '201'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '101'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 8;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'equatorial';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Wüsten';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $desert;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '101'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '401'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = [];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'normal';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Berge';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $berge;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '101'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '701'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = ['0' => '201'];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 10;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'normal';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Bäume';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $trees;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '101'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '111'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = ['0' => '401'];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 12;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'strict polar';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Nadelwald 1';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 40;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '111'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '112'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = ['0' => '401'];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 20;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'forced adjacency';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Nadelwald 2';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 60;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '111'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '112'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = ['0' => '501'];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = ['0' => '401'];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 20;
$phases++;

// Orbit Phases
/*
$ophase[$ophases][ColonyGenerator::COLGEN_MODE] = "lower orbit";
$ophase[$ophases][ColonyGenerator::COLGEN_DESCRIPTION] = "Lower Orbit";
$ophase[$ophases][ColonyGenerator::COLGEN_NUM] = 10;
$ophase[$ophases][ColonyGenerator::COLGEN_FROM] = array("0" => "100");
$ophase[$ophases][ColonyGenerator::COLGEN_TO]   = array("0" => "120");
$ophase[$ophases][ColonyGenerator::COLGEN_ADJACENT] = 0;
$ophase[$ophases][ColonyGenerator::COLGEN_NOADJACENT] = 0;
$ophase[$ophases][ColonyGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$ophase[$ophases][ColonyGenerator::COLGEN_FRAGMENTATION] = 2;
$ophases++;
*/

// Underground Phases

$uphase[$uphases][PlanetGenerator::COLGEN_MODE] = 'normal';
$uphase[$uphases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Untergrundwasser';
$uphase[$uphases][PlanetGenerator::COLGEN_NUM] = $uwasser;
$uphase[$uphases][PlanetGenerator::COLGEN_FROM] = ['0' => '801'];
$uphase[$uphases][PlanetGenerator::COLGEN_TO] = ['0' => '851'];
$uphase[$uphases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$uphases++;

$uphase[$uphases][PlanetGenerator::COLGEN_MODE] = 'normal';
$uphase[$uphases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Untergrundfels';
$uphase[$uphases][PlanetGenerator::COLGEN_NUM] = $ufels;
$uphase[$uphases][PlanetGenerator::COLGEN_FROM] = ['0' => '801'];
$uphase[$uphases][PlanetGenerator::COLGEN_TO] = ['0' => '802'];
$uphase[$uphases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_FRAGMENTATION] = 10;
$uphases++;

return [
    $odata,
    $data,
    $udata,
    [],
    $phase,
    $uphase,
    $hasground,
];