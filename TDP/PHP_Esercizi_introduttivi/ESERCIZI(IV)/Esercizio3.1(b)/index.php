<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo</title>
</head>
<body>
    <h1>Algoritmo per il calcolo dell'm.c.m. e M.C.D.</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="">Primo numero</label>
        <input required type="number" name="primoNumero">
        <br>
        <label for="">Secondo numero</label>
        <input required type="number" name="secondoNumero">
        <br>
        <input type="submit" name="submit" value="<- ok ->">
        <input type="submit" name="submit" value="<-- CAlCOLA mcm e MCD -->">
    </form>
    <?php include('./static/script.php'); ?>
</body>
</html>