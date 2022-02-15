<?php
function perimeter($side)
{
    return $side * 4;
}

function surface($side)
{
    return pow($side, $side);
}

function diagonale($side)
{
    return sqrt(2 * pow($side, 2));
}
