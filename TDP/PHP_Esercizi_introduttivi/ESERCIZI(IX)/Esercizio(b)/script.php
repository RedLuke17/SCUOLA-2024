<?php
    $K = $_POST["k"];
    
    for($i=0; $i<$K; $i++){
        $array1[$i] = rand(0,$K);
    }

    for ($i = 0; $i < $K; $i++){
        $array2[] = $array1[$i];
    }

    //print array1
    echo "array1: ";
    for ($i = 0; $i < $K; $i++){
        echo " $array1[$i] ";
    }

    //print array2
    echo "<br>array2: ";
    for ($i = 0; $i < $K; $i++){
        echo " $array2[$i] ";
    }