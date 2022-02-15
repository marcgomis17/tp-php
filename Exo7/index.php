<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>

<body>
    <form action="../Exo7/controller.php" method="post">
        <div>
            <label for="day">Jour</label>
            <input type="text" name="day" id="">
            <span style="color: red;"><?php if (isset($_SESSION['errors']['day']) && isset($_SESSION['post'])) echo $_SESSION['errors']['day'];
                                        else echo ''; ?></span>
        </div>

        <br>
        <label for="month">Mois</label>
        <input type="text" name="month" id="">
        <span style="color: red;"><?php if (isset($_SESSION['errors']['month']) && isset($_SESSION['post'])) echo $_SESSION['errors']['month'];
                                    else echo ''; ?></span>
        <br>
        <label for="year">Année</label>
        <input type="text" name="year" id="">
        <span style="color: red;"><?php if (isset($_SESSION['errors']['year']) && isset($_SESSION['post'])) echo $_SESSION['errors']['year'];
                                    else echo ''; ?></span>
        <br>
        <span style="color: red;"><?php if (isset($_SESSION['date_error']) && isset($_SESSION['post'])) echo $_SESSION['date_error'];
                                    else echo ''; ?></span>
        <input type="submit" name="submitBtn" value="Submit">
    </form>

    <?php
    include_once('functions.php');
    if (isset($_SESSION['post']) && empty($_SESSION['errors']) && empty($_SESSION['date_error'])) {
        echo 'Date entrée ' . $_SESSION['post']['day'] . '/' . $_SESSION['post']['month'] . '/' . $_SESSION['post']['year'] . '<br/>';
        next_day($_SESSION['post']['day'], $_SESSION['post']['month'], $_SESSION['post']['year']);
        echo 'Date suivante ' . $_SESSION['post']['day'] . '/' . $_SESSION['post']['month'] . '/' . $_SESSION['post']['year'];
    }
    ?>
</body>

</html>