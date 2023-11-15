<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $giorno = $_POST["giorno"];
        $mese = $_POST["mese"];
        $anno = $_POST["anno"];

        $giorno_corrente = getdate()['mday'];
        $mese_corrente = getdate()['mon'];
        $anno_corrente = getdate()['year'];

        if (checkdate($mese, $giorno, $anno)) {
            $data_nascita = new DateTime("$anno-$mese-$giorno");
            $differenza = $data_nascita->diff(new DateTime());
            /*l'oggetto differenza contiene l'intervallo del tempo passato 
            quindi accediamo alla proprietà giorni e la memorizziamo in una variabile*/
            $giorni_trascorsi = $differenza->days;

            echo "<p>Tra la data di nascita $giorno/$mese/$anno
            <br>
            e la data odierna $giorno_corrente/$mese_corrente/$anno_corrente
            <br>
            sono trascorsi $giorni_trascorsi giorni!!</p>";
        } else {
            echo "<p>La data inserita non è valida</p>";
        }
    }
?>