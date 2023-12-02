<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C</title>
</head>
<body>
    <h1>Algoritmo</h1>
        <?php
        for($i=0; $i<20; $i++){
            $numbers[$i] = rand(10,100);
            echo $numbers[$i], " ";
        }

        $temp_array = array_unique($numbers);
        $duplicates = sizeof($temp_array) != sizeof($numbers);

        if ($duplicates) {
            $repeated_numbers = array_count_values($numbers);
            $Nrepeated_numbers = max($repeated_numbers);
        
            echo "<br> ci sono numeri ripetuti. <br>
                il numero con il maggior numero di ripetizioni è: ", array_search($Nrepeated_numbers, $repeated_numbers)," ", "(ripetuto ", $Nrepeated_numbers, " volte) <br>";
        } else {
            echo "non ci sono numeri ripetuti";
        }
        ?>
    </form>
</body>
</html>