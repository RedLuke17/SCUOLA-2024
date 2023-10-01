<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio_2(a)</title>
</head>
<body>
    <h1>Trasformatore di variabili</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="">Variabile da trasformare</label>
        <input type="text" name="variabile">
        <br/>
        <input type="submit" name="submit" value="<- ok ->">
    </form>
    <?php include('./static/script.php'); ?>
</body>
</html>