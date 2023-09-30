<?php
    $localita = $_POST["localita"];
    $data = $_POST["data"];
    $ora = $_POST["ora"];
    $rilevazione = $_POST["rilevazione"];
    $umidita = $_POST["umidita"];
    $climaAttuale = $_POST["climaAttuale"];
    $altitudine = $_POST["altitudine"];

    if($localita && $data && $ora && $altitudine !== "") {
        echo "La localita' inserita e': $localita
        <br />
        La data inserita e': $data
        <br />
        L'ora inserita e': $ora
        <br />
        La rilevazione inserita e': $rilevazione
        <br />
        L'umidita' selezionata e': $umidita
        <br />
        Il clima attuale selezionato e': $climaAttuale
        <br />
        L'altitudine inserita e': $altitudine";
    } else {
        echo "Inserisci i dati mancanti";
    }

?>