<?php

use Stu\PlanetGenerator\PlanetGenerator;

$data[PlanetGenerator::COLGEN_DETAILS] = 'Klasse X';

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

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'polar seeding north';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1001'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1002'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1001];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1003'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1002];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1004'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1003];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1005'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1004];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1006'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1005];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1007'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1006];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1008'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1007];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1009'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1008];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1010'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1009];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1011'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1001];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1012'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1011];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1013'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1012];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1014'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1013];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1015'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1014];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1016'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1015];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1017'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1016];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1018'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1017];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1019'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1018];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1020'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1019];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1021'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1011];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1022'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1021];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1023'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1022];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1024'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1023];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1025'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1024];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1026'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1025];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1027'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1026];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1028'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1027];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1029'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1028];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1030'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1029];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1031'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1021];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1032'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1031];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1033'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1032];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1034'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1033];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1035'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1034];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1036'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1035];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1037'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1036];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1038'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1037];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1039'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1038];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1040'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1039];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1041'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1031];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1042'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1041];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1043'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1042];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1044'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1043];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1045'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1044];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1046'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1045];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1047'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1046];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1048'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1047];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1049'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1048];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1050'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1049];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'below';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1051'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1041];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Vulkan (Lava)';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1052'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1051];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavastrom';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1053'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1052];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Lavasee';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1054'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1053];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1055'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1054];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1056'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1055];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1057'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1056];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Gestein';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1058'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1057];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1059'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1058];
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 1;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = 'right';
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = 'Krater';
$phase[$phases][PlanetGenerator::COLGEN_NUM] = 1;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = ['0' => '1000'];
$phase[$phases][PlanetGenerator::COLGEN_TO] = ['0' => '1060'];
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = [1059];
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
