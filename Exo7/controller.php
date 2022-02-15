<?php
include_once('../Exo7/functions.php');
session_start();
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$date_error = "";
$errors = array();

check_form($day, 'day', $errors);
check_form($month, 'month', $errors);
check_form($year, 'year', $errors);
if (count($errors) != 0) {
    header('location: index.php');
} else {
    check_date($day, $month, $year, $date_error);
    if (!empty($date_error)) {
        header('location: index.php');
    }
}
$_SESSION['post'] = $_POST;
$_SESSION['errors'] = $errors;
$_SESSION['date_error'] = $date_error;
// print_r($_SESSION);
header('location: index.php');
