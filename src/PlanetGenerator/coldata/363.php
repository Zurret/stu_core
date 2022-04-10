<?php

use Stu\PlanetGenerator\GeneratorModeEnum;
use Stu\PlanetGenerator\PlanetGenerator;

$data[PlanetGenerator::COLGEN_DETAILS] = 'Klasse I/J (gelb) mit Ring';

$data[PlanetGenerator::CONFIG_COLGEN_SIZEW] = 10;
$data[PlanetGenerator::CONFIG_COLGEN_SIZEH] = 6;

$hasground = 0;
$bonusfields = 0;

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
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6301'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [900];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6302'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6301];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6303'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6302];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6304'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6303];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6305'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6304];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6306'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6305];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6307'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6306];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6308'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6307];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6309'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6308];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6310'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6309];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6311'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6301];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6312'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6311];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6313'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6312];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6314'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6313];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6315'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6314];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6316'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6315];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6317'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6316];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6318'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6317];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6319'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6318];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6320'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6319];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6321'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6311];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6322'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6321];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6323'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6322];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6324'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6323];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6325'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6324];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6326'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6325];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6327'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6326];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6328'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6327];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6329'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6328];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6330'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6329];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6331'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6321];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6332'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6331];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6333'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6332];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6334'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6333];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6335'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6334];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6336'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6335];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6337'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6336];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6338'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6337];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6339'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6338];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6340'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6339];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6341'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6331];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6342'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6341];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6343'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6342];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6344'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6343];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6345'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6344];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6346'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6345];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6347'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6346];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6348'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6347];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6349'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6348];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6350'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6349];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6351'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6341];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6352'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6351];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6353'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6352];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavasee';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6354'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6353];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6355'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6354];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6356'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6355];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6357'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6356];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6358'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6357];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6359'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6358];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '6360'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [6359];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

// Orbit Phases
$ophase[$ophases][PlanetGenerator::COLGEN_MODE] = 'upper orbit';
$ophase[$ophases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lower Orbit';
$ophase[$ophases][PlanetGenerator::COLGEN_NUM] = 10;
$ophase[$ophases][PlanetGenerator::COLGEN_FROM] = ['0' => '900'];
$ophase[$ophases][PlanetGenerator::COLGEN_TO] = ['0' => '963'];
$ophase[$ophases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$ophase[$ophases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$ophase[$ophases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$ophase[$ophases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$ophases++;

return [
    $odata,
    $data,
    $udata,
    $ophase,
    $phase,
    [],
    $hasground,
];
