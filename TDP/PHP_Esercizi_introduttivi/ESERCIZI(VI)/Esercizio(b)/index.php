<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolo giorni</title>
</head>
<body>
    <p>Inserisci la tua data di nascita</p>
    
    <form action="./static/script.php" method="post">
        <label for="giorno">Giorno</label>
        <select name="giorno">
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <br>
        <label for="mese">Mese</label>
        <select name="mese">
            <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <br>
        <label for="anno">Anno</label>
        <input type="text" name="anno" required pattern="\d{4}">
        <br>
        <input type="submit" value="clicca qui per il risultato"></input>
        <button type="reset">RESET</button>
    </form>
</body>
</html>