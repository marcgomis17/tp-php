<?php
function permute()
{
    $a = rand(1, 10);
    $b = rand(1, 10);
    echo 'Le nombre a vaut ' . $a . ' et b vaut ' . $b . '<br/>';
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo 'Le nombre a vaut ' . $a . ' et b vaut ' . $b;
}
