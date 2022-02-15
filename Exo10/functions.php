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
