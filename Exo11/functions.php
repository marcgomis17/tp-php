<?php
function check_var($var, string &$error)
{
    if (isset($_POST['submitBtn'])) {
        if (empty($var)) {
            $error = "Champ vide";
        } else {
            if (!is_numeric($var)) {
                $error = "Entrez un chiffre";
            } else {
                if ($var < 0) {
                    $error = "Le nombre doit être positif";
                }
            }
        }
    }
}

function average($nbr): float
{
    $sum = 0;
    for ($i = 0; $i < $nbr; $i++) {
        $sum = $sum + $i;
    }
    return $sum / $nbr;
}

function prime($nbr): bool
{
    $div = 2;
    while ($div <= $nbr / 2) {
        if ($nbr % $div == 0) {
            return false;
        }
        $div++;
    }
    return true;
}

function classify($nbr, array &$primeNumbers, array &$lAverage, array &$gAverage)
{
    for ($i = 1; $i <= $nbr; $i++) {
        if (prime($i)) {
            $primeNumbers[] = $i;
        }
        if ($i <= average($nbr)) {
            $lAverage[] = $i;
        } else {
            $gAverage[] = $i;
        }
    }
}
