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

function multipli($nbr)
{
    for ($i = 0; $i <= 12; $i++) {
        echo $nbr . ' x ' . $i . ' = ' . $i * $nbr . '<br/>';
    }
}
