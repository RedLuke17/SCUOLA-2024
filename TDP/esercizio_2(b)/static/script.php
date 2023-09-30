<?php
    $testoInserito = $_POST["testoInserito"];
    $tipoConversione = $_POST["tipoConversione"];

    if ($tipoConversione === "ascii") {
        if (strlen($testoInserito) === 1) {
            $codiceASCII = ord($testoInserito);
            echo "Il codice ASCII per il carattere <b>$testoInserito</b> e': $codiceASCII";
        } else {
            echo "Inserisci un singolo carattere";
        }
    } elseif ($tipoConversione === "carattere") {
        if (is_numeric($testoInserito)) {
            $carattere = chr($testoInserito);
            echo "Il carattere ASCII per il codice <b>$testoInserito</b> e': $carattere";
        } else {
            echo "Inserisci un numero valido come codice ASCII";
        }
    }
?>