<?php
    $numeroInserito = $_POST["numeroInserito"];

    if (is_numeric($numeroInserito)) {
        $numeroTroncato = floor($numeroInserito);
        echo "Numero troncato: $numeroTroncato";
    } else {
        echo "Inserisci un numero valido";
    }
?>