<?php
session_start();
include_once('../Exo9/functions.php');
$error = "";
$nbr = $_POST['nbr'];
check_var($nbr, $error);
$_SESSION['post'] = $_POST;
$_SESSION['error'] = $error;
$_SESSION['nbr'] = $_SESSION['post']['nbr'];
header('location: index.php');
