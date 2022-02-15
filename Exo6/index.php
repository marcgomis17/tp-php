<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>

<body>
    <form action="../Exo6/controller.php" method="post">
        <label for="a">Nombre a</label>
        <input type="text" name="a" id="">
        <span style="color: red;"><?php if (isset($_SESSION['errors']['a']) && isset($_SESSION['post'])) echo $_SESSION['errors']['a'];
                                    else '' ?></span>
        <br>
        <label for="b">Nombre b</label>
        <input type="text" name="b" id="">
        <span style="color: red;"><?php if (isset($_SESSION['errors']['b']) && isset($_SESSION['post'])) echo $_SESSION['errors']['b'];
                                    else ''; ?></span>
        <br>
        <label for="c">Nombre c</label>
        <input type="text" name="c" id="">
        <span style="color: red;"><?php if (isset($_SESSION['errors']['c']) && isset($_SESSION['post'])) echo $_SESSION['errors']['c'];
                                    else ''; ?></span>
        <br>
        <input type="submit" name="submitBtn" value="Submit">
    </form>
    <?php
    if (isset($_SESSION['error'])) {
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>