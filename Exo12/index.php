<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 12</title>
</head>

<body>
    <form action="../Exo12/controller.php" method="post">
        <input type="radio" name="language" value="French" id="fr">
        <label for="fr">French</label><br>
        <input type="radio" name="language" value="English" id="en">
        <label for="en">English</label><br>
        <button type="submit" name="submitBtn">Submit</button>
        <span style="color: red;"><?php if (isset($_SESSION['error']) && isset($_SESSION['post'])) echo $_SESSION['error'];
                                    else echo ''; ?></span>
    </form>
    <br>
    <?php
    $months = array(
        'Janvier' => 'January',
        'Fevrier' => 'February',
        'Mars' => 'March',
        'Avril' => 'April',
        'Mai' => 'May',
        'Juin' => 'June',
        'Juillet' => 'July',
        'Août' => 'August',
        'Septembre' => 'September',
        'Octobre' => 'October',
        'Novembre' => 'November',
        'Decembre' => 'December'
    );
    if (isset($_SESSION['post']) && empty($_SESSION['error'])) {
        $language = $_SESSION['post']['language'];
        echo '<table style="border: 1px solid black">';
        for ($i = 0; $i < 3; $i++) {
            echo '<tr>';
            $value = $i;
            $columns = 0;
            while ($columns < 4) {
                echo '<td style="border: 1px solid black; border: collapse;">';
                if ($language == "French") {
                    echo array_keys($months)[$value] . '</td>';
                } else {
                    echo array_values($months)[$value] . '</td>';
                }
                $value += 3;
                $columns++;
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>

</html>