<?php
session_start();
include_once('../Exo8/functions.php');
$error = "";
$nbr = $_POST['nbr'];
check_var($nbr, $error);
$_SESSION['post'] = $_POST;
$_SESSION['error'] = $error;
header('location: index.php');
