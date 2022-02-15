<?php
include_once('/opt/lampp/htdocs/exo_php/Exo6/functions.php');
session_start();
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$_SESSION['post'] = $_POST;
$errors = array();
check_var($a, 'a', $errors);
check_var($b, 'b', $errors);
check_var($c, 'c', $errors);
$_SESSION['errors'] = $errors;
// print_r($_SESSION);
if (count($errors) != 0) {
    header('location: index.php');
    exit();
}
