<?php
    $numero = $_POST["numero"];

    $int = (int)$numero;
    
    $float = (float)$numero;
    
    $boolean = filter_var($numero);
    
    $string = (string)$numero;
    

    echo "Trasformata in integer vale -->$int
        <br/>
        Trasformata in float vale -->$float
        <br/>
        Trasformata in boolean vale -->",$boolean ? "true" : "False","
        <br/>
        Trasformata in string vale -->$string";
?>