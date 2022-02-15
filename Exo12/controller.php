<?php
session_start();
include_once('../Exo12/functions.php');

$language = $_POST['language'];
$error = "";
check_form($language, $error);
$_SESSION['error'] = $error;
$_SESSION['post'] = $_POST;
header('location: index.php');
