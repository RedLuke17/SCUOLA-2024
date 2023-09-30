<?php
    $marca = $_POST["marca"];
    $modello = $_POST["modello"];
    $nPorteHDMI = $_POST["nPorteHDMI"];
    $refreshrate = $_POST["refreshrate"];
    $risoluzione = $_POST["risoluzione"];

    if ($marca && $modello && $nPorteHDMI && $refreshrate && $risoluzione != "") {
        if ($nPorteHDMI < 2) {
            echo "Ti consiglio di acquistare un televisore con almeno due porte hdmi<br>";
        } 
        
        if($refreshrate < 50) {
            echo "Ti consigliamo di acquistare un televisiore con un refreshrate maggiore di 50Hz<br>";
        }

        if ($risoluzione == "HD Ready" || $risoluzione == "Full HD") {
            echo "Ti consigliamo di comprare un televisore che abbia una risoluzione piu alta del Full HD<br>";
        }

        if ($nPorteHDMI >= 2 && $refreshrate >= 50) {
            if($risoluzione == "Ultra HD" || $risoluzione == "4K") {
                echo "e' un buon televisore";
            }
        }
    } else {
        echo "Inserisci tutti i dati";
    }
?>