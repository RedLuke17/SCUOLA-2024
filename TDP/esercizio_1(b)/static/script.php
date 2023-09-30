<?php
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $ragioneSociale = $_POST["ragioneSociale"];
    $indirizzo = $_POST["indirizzo"];
    $partitaIva = $_POST["partitaIva"];
    $tel = $_POST["tel"];

    $descrizione = $_POST["descrizione"];
    $codice = $_POST["codice"];
    $giacenza = $_POST["giacenza"];
    $prezzoUnitario = $_POST["prezzoUnitario"];
    $percIva = $_POST["percIva"];
    $quantita = $_POST["quantita"];
    $costo = $_POST["costo"];
    $sconto = $_POST["sconto"];

    echo "<h1>DATI UTENTE</h1>
    Nome: $nome<br/>
    Cognome: $cognome<br/>
    Ragione Sociale: $ragioneSociale<br/>
    Indirizzo: $indirizzo<br/>
    Partita Iva: $partitaIva<br/>
    Telefono: $tel<br/>
    <br/>

    <h2>DATI PRODOTTO</h2>
    Descrizione: $descrizione<br/>
    Codice: $codice<br/>
    Giacenza: $giacenza<br/>
    Prezzo Unitario: $prezzoUnitario<br/>
    Percentuale Iva: $percIva<br/>
    Quantita': $quantita<br/>
    Costo: $costo<br/>
    Percentuale Sconto: $sconto<br/>
    <br/>";

    $prezzoTotale = $prezzoUnitario*$quantita;
    $prezzoPercentualeIva = ($prezzoTotale*$percIva)/100;
    $prezzoEsclusaIva = $prezzoTotale-$prezzoPercentualeIva;
    echo "<h3>DETTAGLI ORDINE</h3>
    Prezzo totale(inclusa iva): $prezzoUnitario*$quantita=$prezzoTotale<br/>
    Prezzo totale(esclusa iva): $prezzoEsclusaIva<br/>
    Di cui Iva: $prezzoPercentualeIva<br/>";

    //stampa sconto
    $percentualeSconto = ($prezzoTotale*$sconto)/100;
    $prezzoScontato = $prezzoTotale-$percentualeSconto;
    if ($sconto != "") {
        echo "<h4>SCONTO</h4>Prezzo dello sconto: $percentualeSconto<br/>
        Prezzo totale con sconti applicati: $prezzoScontato";
    } else {
        echo "Nessuno sconto è stato applicato";
    }

?>