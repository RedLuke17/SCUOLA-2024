<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pietanzeSelezionate = isset($_POST["pietanze"]) ? $_POST["pietanze"] : array(); //? = booleana
    $servizioDomicilio = isset($_POST["servizioDomicilio"]);
    $costoDomicilio = 2;
    $costoTotale = 0;

    $menu = array(
        "margherita" => 5,
        "americana" => 6,
        "4formaggi" => 3,
        "panzerotto" => 3
    );

    if ($servizioDomicilio) {
        $costoTotale += $costoDomicilio;
    }

    $num_pietanze = count($pietanzeSelezionate);
    for ($i = 0; $i < $num_pietanze; $i++) {
        $pietanza = $pietanzeSelezionate[$i];
        if (isset($menu[$pietanza])) {
            $costoTotale += $menu[$pietanza];
        }
    }

    //tabella
    echo "<h2>ordine</h2>
    <table border='2'>
        <tr>
            <th>pietanza</th>
            <th>prezzo</th>
        </tr>";

    //contenuto della tabella
    for ($i = 0; $i < $num_pietanze; $i++) {
        $pietanza = $pietanzeSelezionate[$i];
        echo "<tr>
                <td>$pietanza</td>
                <td>$menu[$pietanza] euro</td>
            </tr>";
    }

    if ($servizioDomicilio) {
        echo "<tr>
                <td>servizio a domicilio</td>
                <td>$costoDomicilio euro</td>
            </tr>";
    }

    echo "<tr>
            <td><strong>totale</strong></td>
            <td><strong>$costoTotale euro</strong></td>
        </tr>
        </table>";
}