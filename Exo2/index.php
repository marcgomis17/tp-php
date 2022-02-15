<?php
include_once('functions.php');
$width = rand(1, 10);
$height = rand(1, 10);
echo  perimeter($width, $height) . "<br>";
echo surface($height, $width) . "<br>";
echo diagonale($height, $width) . "<br>";
