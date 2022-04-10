<?php

use Stu\PlanetGenerator\GeneratorModeEnum;
use Stu\PlanetGenerator\PlanetGenerator;

$data[PlanetGenerator::COLGEN_DETAILS] = 'Klasse I-1';

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
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6101'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6102'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6101];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6103'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6102];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6104'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6103];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6105'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6104];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6106'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6105];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6107'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6106];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6108'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6107];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6109'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6108];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6110'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6109];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6111'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6101];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6112'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6111];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6113'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6112];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6114'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6113];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6115'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6114];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6116'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6115];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6117'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6116];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6118'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6117];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6119'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6118];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6120'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6119];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6121'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6111];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6122'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6121];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6123'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6122];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6124'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6123];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6125'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6124];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6126'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6125];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6127'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6126];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6128'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6127];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6129'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6128];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6130'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6129];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6131'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6121];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6132'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6131];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6133'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6132];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6134'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6133];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6135'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6134];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6136'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6135];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6137'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6136];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6138'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6137];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6139'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6138];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6140'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6139];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6141'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6131];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6142'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6141];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6143'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6142];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6144'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6143];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6145'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6144];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6146'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6145];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6147'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6146];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6148'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6147];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6149'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6148];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6150'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6149];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6151'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6141];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6152'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6151];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6153'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6152];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavasee';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6154'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6153];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6155'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6154];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6156'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6155];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6157'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6156];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6158'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6157];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6159'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6158];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6160'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6159];
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
