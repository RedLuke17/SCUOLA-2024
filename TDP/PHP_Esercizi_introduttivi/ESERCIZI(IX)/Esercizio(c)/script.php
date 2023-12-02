<?php
    $X = $_POST["x"];
    $somma = 0;
    $k = 20;

    for($i=0; $i<$k; $i++){
        $array[$i] = rand(0,10);
    }

    for ($i = 0; $i < $k; $i += 2){
        $somma += $array[$i];
    }

    for($i=0; $i<$k; $i++){
        echo "$array[$i] " ;
    }

    if ($somma <= $X) {
        echo "Condizione Verificata";
    } else {
        echo "Condizione NON Verificata";
    }