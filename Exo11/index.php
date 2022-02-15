<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Exo11/styles/style.css">
    <title>Exo 11</title>
</head>

<body>
    <form action="../Exo11/controller.php" method="post">
        <div>
            <label for="nbr">Nombre</label><br>
            <input type="text" name="nbr" id="">
            <span style="color: red;"><?php if (isset($_SESSION['error']) && isset($_SESSION['post'])) echo $_SESSION['error'];
                                        else echo ''; ?></span>
        </div>
        <br>
        <button type="submit" name="submitBtn">Submit</button>
    </form>
    <br>
    <?php

    include_once('../Exo11/functions.php');
    if (isset($_SESSION['post']['nbr']) && empty($_SESSION['error'])) {
        $nbr = $_SESSION['post']['nbr'];
        $primeNumbers = [];
        $lAverage = [];
        $gAverage = [];

        classify($nbr, $primeNumbers, $lAverage, $gAverage);
        $classified = array(
            'prime' => $primeNumbers,
            'lAverage' => $lAverage,
            'gAverage' => $gAverage
        );
    } ?>
    <center><?php echo '<strong>Average: </strong>' . average($nbr) . '<br />'; ?></center><br>
    <div id="display">
        <div class="numbers">
            <?php echo '<strong>Prime numbers</strong><br/>';
            for ($i = 0; $i < count($classified['prime']); $i++) {
                echo $classified['prime'][$i] . '<br/>';
            }
            ?>
        </div>
        <div class="numbers">
            <?php
            echo '<strong>Less than average</strong><br/>';
            for ($i = 0; $i < count($classified['lAverage']); $i++) {
                echo $classified['lAverage'][$i] . '<br/>';
            }
            ?>
        </div>
        <div class="numbers">
            <?php
            echo '<strong>Greater the average</strong><br/>';
            for ($i = 0; $i < count($classified['gAverage']); $i++) {
                echo $classified['gAverage'][$i] . '<br/>';
            }
            ?>
        </div>
    </div>
</body>

</html>