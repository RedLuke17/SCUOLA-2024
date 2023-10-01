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
        $giocateSquadra;
        if ($partiteGiocate_1 == $partiteGiocate_2) {
            $giocateSquadra = "Le due squadre hanno giocato lo stesso numero di partite<br/>";
        } else if ($partiteGiocate_1 < $partiteGiocate_2) {
            $giocateSquadra = "La squadra $nomeSquadra2 ha giocato piu partite della squadra $nomeSquadra1<br/>";
        } else if ($partiteGiocate_1 > $partiteGiocate_2) {
            $giocateSquadra = "La squadra $nomeSquadra1 ha giocato piu partite della squadra $nomeSquadra2<br/>";
        }

        //punteggio delle squadre
        $punteggioSquadra_1 = $numeroPartiteVinte_1 + $numeroPartitePareggiate_1 + $numeroPartitePerse_1;
        $punteggioSquadra_2 = $numeroPartiteVinte_2 + $numeroPartitePareggiate_2 + $numeroPartitePerse_2;
        $nomeSquadraPunteggioAlto;
        $nomeSquadraPunteggioBasso;
        $punteggioSquadraAlto;
        $punteggioSquadraBasso;
        if ($punteggioSquadra_1 == $punteggioSquadra_2) {
            $nomeSquadraPunteggioAlto = $nomeSquadra1;
            $punteggioSquadraAlto = $punteggioSquadra_1;

            $nomeSquadraPunteggioBasso = $nomeSquadra2;
            $punteggioSquadraBasso = $punteggioSquadra_2;
        } else if ($punteggioSquadra_1 < $punteggioSquadra_2) {
            $nomeSquadraPunteggioAlto = $nomeSquadra2;
            $punteggioSquadraAlto = $punteggioSquadra_2;

            $nomeSquadraPunteggioBasso = $nomeSquadra1;
            $punteggioSquadraBasso = $punteggioSquadra_1;
        } else if ($punteggioSquadra_1 > $punteggioSquadra_2) {
            $nomeSquadraPunteggioAlto = $nomeSquadra1;
            $punteggioSquadraAlto = $punteggioSquadra_1;

            $nomeSquadraPunteggioBasso = $nomeSquadra2;
            $punteggioSquadraBasso = $punteggioSquadra_2;
        }

        echo "
        <table border='1'>
            <tr align='center'>
                <td colspan='2'>Dati inseriti nel form</td>
                <td>Output prodotto dal server</td>
            </tr>
            <tr align='center'>
                <td>
                    Nome <br>
                    Vinte <br>
                    Pareggiate <br>
                    Perse
                </td>
                <td>
                    $nomeSquadra1 <br>
                    $numeroPartiteVinte_1 <br>
                    $numeroPartitePareggiate_1 <br>
                    $numeroPartitePerse_1
                </td>
                <td align='left' rowspan='2'>
                    <b>Classifica</b> <br>
                    $nomeSquadraPunteggioAlto = $punteggioSquadraAlto <br>
                    $nomeSquadraPunteggioBasso = $punteggioSquadraBasso <br>
                    $giocateSquadra
                </td>
            </tr>
            <tr align='center'>
                <td>
                    Nome <br>
                    Vinte <br>
                    Pareggiate <br>
                    Perse
                </td>
                <td>
                    $nomeSquadra2 <br>
                    $numeroPartiteVinte_2 <br>
                    $numeroPartitePareggiate_2 <br>
                    $numeroPartitePerse_2
                </td>
            </tr>
        </table>";
    } else {
        echo "Devi obbligatoriamente compilare tutti i dati :)";
    }
?>