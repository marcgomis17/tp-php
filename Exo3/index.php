<?php
include_once('functions.php');
$a = rand(1, 10);
$b = rand(1, 10);
echo 'Somme: ' . sum($a, $b) . '<br>';
echo 'difference: ' . diff($a, $b) . '<br>';
echo 'Produit: ' . prod($a, $b) . '<br>';
echo 'Division: ' . div($a, $b) . '<br>';
echo 'Carre: ' . carre($a, $b) . '<br>';
echo 'exponentiel: ' . expo($a, $b) . '<br>';
