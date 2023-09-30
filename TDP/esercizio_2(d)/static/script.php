<?php
    $tuttiNumeriCorretti = true;

    for ($i = 1; $i <= 10; $i++) {
        $numeriInseriti = $_POST["numero$i"];
        if (!is_numeric($numeriInseriti)) {
            $tuttiNumeriCorretti = false;
            echo "Ocio non hai inserito un numero alla casella numero $i<br/>";
        }
    }

    if ($tuttiNumeriCorretti == true) {
        echo "Bravo! hai inserito tutti i 10 numeri ;)<br/>";
    }
?>