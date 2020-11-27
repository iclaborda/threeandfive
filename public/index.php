<?php
// created by Ikaro C. Laborda at 20201126 19:32.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

require_once __DIR__ . '/../vendor/autoload.php';

use Src\Display;
use Src\Regras\Three;
use Src\Regras\Five;
use Src\Regras\ThreeAndFive;

$substituiveis = [

    new ThreeAndFive,
    new Three,
    new Five
];

$display = new Display($substituiveis);
echo json_encode($display->mostrarNumeros(100,1, "<br/>"));