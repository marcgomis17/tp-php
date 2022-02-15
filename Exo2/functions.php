<?php
function perimeter($w, $h)
{
    return 2 * ($w + $h);
}

function surface($w, $h)
{
    return pow($w, $h);
}

function diagonale($w, $h)
{
    return sqrt(pow($w, 2) + pow($h, 2));
}
