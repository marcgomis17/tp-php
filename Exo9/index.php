<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 9</title>
</head>

<body>
    <form action="../Exo9/controller.php" method="post">
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
    include_once('../Exo9/functions.php');
    if (isset($_SESSION['post']['nbr']) && empty($_SESSION['error'])) {
        multipli($_SESSION['post']['nbr']);
    }
    ?>
</body>

</html>