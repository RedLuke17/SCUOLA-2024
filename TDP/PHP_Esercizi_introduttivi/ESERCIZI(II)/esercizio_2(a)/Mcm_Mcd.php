<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCM & MCD</title>
</head>
<body>
    <form method="post" action="Mcm_Mcd.php">
        <h1>ALGORITMO PER IL CALCOLO DELL'M.C.M E M.C.D.</h1>

        <label>Primo numero</label>
        <input type="numer" name="primo" required> 

        <br><br>

        <label>Secondo numero</label>
        <input type="numer" name="secondo" required>

        <br><br>

        <input type="submit" value="Calcola il MCD e MCM">
    </form>

    <?php

    function mcd($a, $b)
    {

        while($b != 0)
        {
            $i = $b;
            $b = $a % $b;
            $a = $i;
        }
        return $a;
    }

    function mcm($a, $b)
    {
       $mcd = mcd($a,$b);
       return ($a * $b) / $mcd;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST["primo"];
        $num2 = $_POST["secondo"];

        $mcd = mcd($num1, $num2);
        $mcm = mcm($num1, $num2);

        echo "Il MCD è: $mcd <br>";
        echo "Il MCM è: $mcm <br>";

    }
    ?>
</body>
</html>