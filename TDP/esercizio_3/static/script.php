<?php
    //prima squadra
    $nomeSquadra1 = $_POST["nomeSquadra1"];
    $numeroPartiteVinte_1 = $_POST["numeroPartiteVinte_1"];
    $numeroPartitePareggiate_1 = $_POST["numeroPartitePareggiate_1"];
    $numeroPartitePerse_1 = $_POST["numeroPartitePerse_1"];

    //seconda squadra
    $nomeSquadra2 = $_POST["nomeSquadra2"];
    $numeroPartiteVinte_2 = $_POST["numeroPartiteVinte_2"];
    $numeroPartitePareggiate_2 = $_POST["numeroPartitePareggiate_2"];
    $numeroPartitePerse_2 = $_POST["numeroPartitePerse_2"];


    if ($nomeSquadra1 && $numeroPartiteVinte_1 && $numeroPartitePareggiate_1 && $numeroPartitePerse_1 && 
        $nomeSquadra2 && $numeroPartiteVinte_2 && $numeroPartitePareggiate_2 && $numeroPartitePerse_2 
        != "") {

        //quantitativo di partite giocate dalle squadre
        $partiteGiocate_1 = $numeroPartiteVinte_1 + $numeroPartitePareggiate_1 + $numeroPartitePerse_1;
        $partiteGiocate_2 = $numeroPartiteVinte_2 + $numeroPartitePareggiate_2 + $numeroPartitePerse_2;
        if ($partiteGiocate_1 == $partiteGiocate_2) {
            echo "Le squadre hanno giocato lo stesso numero di partite<br/>";
        } else if ($partiteGiocate_1 < $partiteGiocate_2) {
            echo "La squadra $nomeSquadra2 ha giocato piu partite della squadra $nomeSquadra1<br/>";
        } else if ($partiteGiocate_1 > $partiteGiocate_2) {
            echo "La squadra $nomeSquadra1 ha giocato piu partite della squadra $nomeSquadra2<br/>";
        }

        //punteggio delle squadre
        $punteggioSquadra_1 = $numeroPartiteVinte_1 + $numeroPartitePareggiate_1 + $numeroPartitePerse_1;
        $punteggioSquadra_2 = $numeroPartiteVinte_2 + $numeroPartitePareggiate_2 + $numeroPartitePerse_2;
        if ($punteggioSquadra_1 == $punteggioSquadra_2) {
            echo "Il punteggio delle squadre è uguale<br/>";
        } else if ($punteggioSquadra_1 < $punteggioSquadra_2) {
            echo "Il punteggio della squadra $nomeSquadra2 e' il piu alto<br/>";
        } else if ($punteggioSquadra_1 > $punteggioSquadra_2) {
            echo "Il punteggio della squadra $nomeSquadra1 e' il piu alto<br/>";
        }
    } else {
        echo "Devi obbligatoriamente compilare tutti i dati :)";
    }
?>