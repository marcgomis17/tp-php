<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 10</title>
</head>

<body>
    <form action="../Exo10/controller.php" method="post">
        <div>
            <label for="nbr">Nombre</label><br>
            <input type="text" name="nbr" id="">
            <span style="color: red;"><?php if (isset($_SESSION['error']) && isset($_SESSION['post'])) echo $_SESSION['error'];
                                        else echo ''; ?></span>
        </div>
        <br>
        <button type="submit" name="submitBtn">Submit</button>
    </form>

    <ul>
        <?php
        if (isset($_SESSION['post']['nbr']) && empty($_SESSION['error'])) {
            $nbr = 1;
            do {
                echo '<input type="text" name="nbr" id="">' . '<br/><br/>';
                $nbr++;
            } while ($nbr <= $_SESSION['post']['nbr']);
        }
        ?>
    </ul>
</body>

</html>