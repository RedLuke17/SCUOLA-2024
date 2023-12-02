<?php
    $conteggio = 0;

    for($i=0; $i<20; $i++){
        $k = rand(0,10);
        $array[$i] = $k;
    }

    $X = $_POST["x"];

    for($i=0; $i<20; $i++){
        if ($X == $array[$i]) {
            $conteggio++;
        }
    }

    echo "il numero $X e' presente nell'array $conteggio";