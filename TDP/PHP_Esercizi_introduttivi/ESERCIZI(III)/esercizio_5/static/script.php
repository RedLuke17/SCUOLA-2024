<?php
    $nome = $_POST["nome"];
    $eta = $_POST["eta"];
    $abbonamento = $_POST["abbonamento"];

    if ($eta < 18 || $eta > 64) {
        echo "Hai il diritto di pagare 35 euro al posto di 45 AL MESE <br>";
        $prezzoMensile = 35;
        $prezzoAnnuale = scontoAbbonamenti($abbonamento,$prezzoMensile);
    } else {
        $prezzoMensile = 45;
        $prezzoAnnuale = scontoAbbonamenti($abbonamento,$prezzoMensile);
    }

    echo "
    <table border='1'>
            <tr align='center'>
                <td colspan='3'>Dati inseriti nel form</td>
                <td>Output prodotto dal server</td>
            </tr>
            <tr align='center'>
                <td>Nome</td>
                <td>Eta'</td>
                <td>Pagamento</td>
                <td>Output</td>
            </tr>
            <tr align='center'>
                <td>$nome</td>
                <td>$eta</td>
                <td>$abbonamento</td>
                <td>Il prezzo per un anno e' di $prezzoAnnuale</td>
            </tr>
        </table>";

    function scontoAbbonamenti($abbomanento, $prezzoMensile) {
        if ($abbomanento == "MENSILE") {
            return $prezzoMensile*12;
        } elseif ($abbomanento == "BIMESTRALE") {
            $prezzoMensile =($prezzoMensile*2) - ((($prezzoMensile * 2) * 10)/100);
            return $prezzoMensile*6;
        } elseif ($abbomanento == "TRIMESTRALE") {
            $prezzoMensile = ($prezzoMensile*3) - ((($prezzoMensile * 3) * 15)/100);
            return $prezzoMensile*4;
        } elseif ($abbomanento == "ANNUALE") {
            $prezzoMensile = ($prezzoMensile*12) - ((($prezzoMensile * 12) * 20)/100);
            return $prezzoMensile;
        }
    }
?>