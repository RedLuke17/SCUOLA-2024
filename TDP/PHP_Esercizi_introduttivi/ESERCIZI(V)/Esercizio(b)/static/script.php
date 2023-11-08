<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $delta = ($b * $b) - (4 * $a * $c);
        if ($delta > 0) {
            $radice1 = (-$b + sqrt($delta)) / (2 * $a);
            $radice2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "L'equazione ha due soluzioni reali distinte:<br>";
            echo "Radice 1: $radice1<br>";
            echo "Radice 2: $radice2<br>";
        } elseif ($delta == 0) {
            $radice1 = -$b / (2 * $a);
            echo "L'equazione ha una soluzione reale (due soluzioni coincidenti):<br>";
            echo "Radice unica: $radice1<br>";
        } else {
            echo "L'equazione non ammette alcuna soluzione reale.<br>";
        }
    }
?>