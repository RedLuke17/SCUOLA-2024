<?php
    $marca = $_POST["marca"];
    $modello = $_POST["modello"];
    $nPorteHDMI = $_POST["nPorteHDMI"];
    $refreshrate = $_POST["refreshrate"];
    $risoluzione = $_POST["risoluzione"];
    $consiglioHDMI;
    $consiglioREFRESHRATE;
    $consiglioRISOLUZIONE;

    if ($marca && $modello && $nPorteHDMI && $refreshrate && $risoluzione != "") {
        if ($nPorteHDMI < 2) {
            $consiglioHDMI = "Ti consiglio di acquistare un televisore con almeno due porte hdmi";
        } else {
            $consiglioHDMI = "Porte HDMI: ok.";
        }
        
        if($refreshrate < 50) {
            $consiglioREFRESHRATE = "Ti consigliamo di acquistare un televisiore con un refreshrate maggiore di 50Hz";
        } else {
            $consiglioREFRESHRATE = "Refresh rate: ok.";
        }

        if ($risoluzione == "HD Ready" || $risoluzione == "Full HD") {
            $consiglioRISOLUZIONE = "Ti consigliamo di comprare un televisore che abbia una risoluzione piu alta del Full HD";
        } else {
            $consiglioRISOLUZIONE = "Risoluzione: ok.";
        }

        if ($nPorteHDMI >= 2 && $refreshrate >= 50) {
            if($risoluzione == "Ultra HD" || $risoluzione == "4K") {
                echo "e' un buon televisore";
            }
        }

        echo "
        <table border='1'>
            <tr align='center'>
                <td colspan='2'>Dati inseriti nel form</td>
                <td>Output prodotto dal server</td>
            </tr>
            <tr align='center'>
                <td>
                    Marca <br>
                    Modello <br>
                    Porte hdmi <br>
                    Refresh rate <br>
                    Risoluzione
                </td>
                <td>
                    $marca <br>
                    $modello <br>
                    $nPorteHDMI <br>
                    $refreshrate <br>
                    $risoluzione
                </td>
                <td align='left'>
                    <b>Consigli di acquisto</b> <br>
                    $consiglioHDMI <br>
                    $consiglioREFRESHRATE <br>
                    $consiglioRISOLUZIONE
                </td>
            </tr>
        </table>";
    } else {
        echo "Inserisci tutti i dati";
    }
?>