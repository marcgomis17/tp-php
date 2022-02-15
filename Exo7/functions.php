<?php
function is_bissextile($year): bool
{
    if ($year % 400 == 0 and ($year % 4 == 0 or $year % 100 != 0)) {
        return true;
    }
    return false;
}

function days($month, $year): int
{
    if (is_bissextile($year) && $month == 2) {
        return 28;
    } else if (!is_bissextile($year) && $month == 2) {
        return 29;
    } else if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        return 30;
    } else {
        return 31;
    }
}

function is_date_correct($day, $month, $year): bool
{
    if ($day < 1 || $day > days($month, $year)) {
        return false;
    } else {
        if ($month < 1 || $month > 12) {
            return false;
        }
    }
    return true;
}

function check_form($value, $pos, array &$errors)
{
    if (isset($_POST['submitBtn'])) {
        if (empty($value)) {
            $errors[$pos] = "Ce champ est vide";
        } else {
            if (!is_numeric($value)) {
                $errors[$pos] = "Saisissez des nombres";
            }
        }
    } else {
        header('location: index.php');
    }
}

function check_date($day, $month, $year, &$date_error)
{
    if (!is_date_correct($day, $month, $year)) {
        $date_error = "Date incorrecte";
    }
}

function previous_day(&$day, &$month, &$year)
{
    // echo is_date_correct($day - 1, $month, $year);
    if (is_date_correct($day - 1, $month, $year)) {
        $day = $day - 1;
    } else {
        if ($month == 1) {
            $year = $year - 1;
            $month = 12;
            $day = days($month, $year);
        }
    }

    // $day = $day - 1;
    //echo days($month, $year);
}

function next_day(&$day, &$month, &$year)
{
    if ($day == days($month, $year) && $month == 12) {
        $day = 1;
        $month = 1;
        $year = $year + 1;
    } elseif ($day == days($month, $year)) {
        $day = 1;
        $month = $month + 1;
        $year = $year + 1;
    } else {
        $day = $day + 1;
    }
}
