<?php

function sum($a,$b){
    $s = $a + $b;
    return "Arti says, that $a + $b = $s";
}

$a = 10;
$b = 5;

echo sum($a,$b);