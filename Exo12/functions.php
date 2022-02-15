<?php
function check_form($language, &$error)
{
    if (isset($_POST['submitBtn'])) {
        if (empty($language)) {
            $error = "Choisissez une langue";
        }
    } else {
        header('location: index.php');
    }
}
