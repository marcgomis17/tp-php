<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Exo7/styles/style.css">
    <title>Exo 7</title>
</head>

<body>
    <form action="../Exo7/controller.php" method="post">
        <div>
            <label for="day">Jour</label><br>
            <input type="text" name="day" value="<?php if (isset($_SESSION['post']) && isset($_SESSION['post']['day'])) echo $_SESSION['post']['day'];
                                                    else echo '';  ?>">
            <span style="color: red;"><?php if (isset($_SESSION['errors']['day']) && isset($_SESSION['post'])) echo $_SESSION['errors']['day'];
                                        else echo ''; ?></span><br>
        </div>
        <br>
        <label for="month">Mois</label><br>
        <input type="text" name="month" value="<?php if (isset($_SESSION['post']) && isset($_SESSION['post']['month'])) echo $_SESSION['post']['month'];
                                                else echo '';  ?>">
        <span style="color: red;"><?php if (isset($_SESSION['errors']['month']) && isset($_SESSION['post'])) echo $_SESSION['errors']['month'];
                                    else echo ''; ?></span><br>
        <br>
        <label for="year">Année</label><br>
        <input type="text" name="year" value="<?php if (isset($_SESSION['post']) && isset($_SESSION['post']['year'])) echo $_SESSION['post']['year'];
                                                else echo '';  ?>">
        <span style="color: red;"><?php if (isset($_SESSION['errors']['year']) && isset($_SESSION['post'])) echo $_SESSION['errors']['year'];
                                    else echo ''; ?></span><br>
        <br>
        <span style="color: red;"><?php if (isset($_SESSION['date_error']) && isset($_SESSION['post'])) echo $_SESSION['date_error'];
                                    else echo ''; ?></span>
        <input type="submit" name="submitBtn" value="Submit">
    </form>
    <br>

    <?php
    include_once('functions.php');
    ?>
    <div id="output">
        <div class="date">
            <?php
            if (isset($_SESSION['post']) && empty($_SESSION['errors']) && empty($_SESSION['date_error'])) {
                echo '<strong>Date entrée: </strong>' . $_SESSION['post']['day'] . '/' . $_SESSION['post']['month'] . '/' . $_SESSION['post']['year'];
            }
            ?>
        </div>
        <div class="date">
            <?php
            if (isset($_SESSION['post']) && empty($_SESSION['errors']) && empty($_SESSION['date_error'])) {
                $day = $_SESSION['post']['day'];
                $month = $_SESSION['post']['month'];
                $year = $_SESSION['post']['year'];
                previous_day($day, $month, $year);
                echo '<strong>Date précedente: </strong>' . $day . '/' . $month . '/' . $year;
            }
            ?>
        </div>
        <div class="date">
            <?php
            if (isset($_SESSION['post']) && empty($_SESSION['errors']) && empty($_SESSION['date_error'])) {
                next_day($_SESSION['post']['day'], $_SESSION['post']['month'], $_SESSION['post']['year']);
                echo '<strong>Date suivante: </strong>' . $_SESSION['post']['day'] . '/' . $_SESSION['post']['month'] . '/' . $_SESSION['post']['year'];
            }
            ?>
        </div>
    </div>
    <?php
    session_destroy();
    ?>
</body>

</html>