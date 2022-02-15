<?php
function check_var(string $var, $value,  array &$errors): void
{
    if (isset($_POST['submitBtn'])) {
        if (empty($var)) {
            $errors[$value] = "Ce champ est vide";
        } else {
            if (!is_numeric($var)) {
                $errors[$value] = "La valeur entrée doit être un nombre";
            }
        }
    } else {
        header('location: index:php');
    }
}
