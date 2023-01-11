<?php
/*
The Hitchhiker's Guide to PHP Math Functions

Each step of the project provides a math operation that can be completed using built-in PHP functions. Use the documentation to find them and apply them correctly to get the answer to life, the universe, and everything.
*/

$initial = '555';
$a = octdec($initial);
// echo octdec($initial);
$b = deg2rad($a);
// echo $b;
$c = cos($b);
// echo $c;
$d = round($c, 3);
// echo $d;
$e = log($d);
// echo $e;
$f = abs($e);
// echo $f;
$g = acos($f);
// echo $g;
$h = rad2deg($g);
// echo $h;
$i = floor($h);
// echo $i;
$j = $i - 47;
echo $j;
