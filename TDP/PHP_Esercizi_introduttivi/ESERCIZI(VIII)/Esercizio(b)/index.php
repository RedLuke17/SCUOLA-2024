<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
</head>
<body>
    <h1>Algoritmo</h1>
        <?php
        for($i=0; $i<20; $i++){
            $numbers[$i] = rand(10,100);
            if ($numbers[$i]%2 == 0){
                $pari[]=$numbers[$i];
            } else {
                $dispari[]=$numbers[$i];
            }
        }

        for($i=0; $i<20; $i++){
            echo $numbers[$i], " ";
        
        }

        echo "<br> dispari: ";

        for($i=0; $i<count($dispari); $i++){
            echo $dispari[$i], " ";
        }

        echo "<br> pari: ";

        for($i=0; $i<count($pari); $i++){
            echo $pari[$i], " ";
        }

        echo "<br>";

        echo "Numeri dispari: ", count($dispari)," <br>
                Numeri pari: ", count($pari)," <br>";

        
        ?>
    </form>
</body>
</html>