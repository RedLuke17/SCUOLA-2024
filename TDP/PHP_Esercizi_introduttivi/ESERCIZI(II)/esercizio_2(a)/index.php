<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione2(a)</title>
</head>
<body>
    <h1>
        TRASFORMATORE VARIABILI
    </h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Scrivi qui:</label>
        <input type="text" name="numero">
        <br>
        <input type="submit" value="<- OK ->">
    </form>
    <?php include("./static/script.php"); ?>
</body>
</html>