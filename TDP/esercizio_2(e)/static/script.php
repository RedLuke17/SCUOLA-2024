<?php
    $parolaInserita = $_POST["parolaInserita"];

    //memorizza quante maiuscole ha la parola/frase inserita
    $maiuscola = 0;
    for ($i = 0; $i < strlen($parolaInserita); $i++) {
        //prendiamo ogni lettera della parola e la mettiamo in una variabile
        $singolaLettera = $parolaInserita[$i];

        //la variabile che contiene le singole lettere viene verificata se è una maiuscola o no
        if (ctype_upper($singolaLettera)) {
            $maiuscola++;
        }
    }

    if ($maiuscola > 0) {
        echo "La parola/frase Inserita ha $maiuscola maiuscole";
    } else {
        echo "la parola/frase inserita non ha maiuscole";
    }
?>