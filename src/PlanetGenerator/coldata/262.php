<?php

use Stu\PlanetGenerator\GeneratorModeEnum;
use Stu\PlanetGenerator\PlanetGenerator;

$data[PlanetGenerator::COLGEN_DETAILS] = 'Klasse I-2';

$data[PlanetGenerator::CONFIG_COLGEN_SIZEW] = 10;
$data[PlanetGenerator::CONFIG_COLGEN_SIZEH] = 6;

$hasground = 1;

$data[PlanetGenerator::COLGEN_BASEFIELD] = 1000;
$odata[PlanetGenerator::COLGEN_BASEFIELD] = 900;
$udata[PlanetGenerator::COLGEN_BASEFIELD] = 802;

$phases = 0;
$ophases = 0;
$uphases = 0;

// Surface Phases

$phase[$phases][PlanetGenerator::COLGEN_MODE] = GeneratorModeEnum::TOP_LEFT;
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6201'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [900];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6202'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6201];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6203'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6202];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6204'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6203];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6205'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6204];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6206'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6205];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6207'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6206];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6208'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6207];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6209'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6208];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6210'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6209];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6211'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6201];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6212'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6211];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6213'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6212];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6214'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6213];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6215'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6214];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6216'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6215];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6217'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6216];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6218'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6217];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6219'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6218];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6220'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6219];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6221'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6211];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6222'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6221];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6223'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6222];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6224'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6223];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6225'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6224];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6226'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6225];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6227'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6226];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6228'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6227];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6229'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6228];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6230'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6229];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6231'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6221];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6232'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6231];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6233'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6232];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6234'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6233];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6235'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6234];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6236'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6235];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6237'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6236];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6238'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6237];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6239'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6238];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6240'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6239];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6241'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6231];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6242'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6241];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6243'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6242];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6244'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6243];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6245'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6244];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6246'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6245];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6247'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6246];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6248'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6247];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6249'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6248];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6250'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6249];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6251'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6241];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6252'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6251];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6253'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6252];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavasee';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6254'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6253];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6255'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6254];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6256'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6255];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6257'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6256];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6258'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6257];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6259'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6258];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6260'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6259];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

return [
    $odata,
    $data,
    $udata,
    [],
    $phase,
    [],
    $hasground,
];
