<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
</head>
<body>
    <h1>Algoritmo di ribaltamento di un vettore</h1>
        <?php
        for($i=0; $i<10; $i++){
            $numbers[$i] = rand(10,100);
        }

        for($i=0; $i<10; $i++){
            echo " $numbers[$i] ";
        }
        echo "<br>";
        $numbers = array_reverse($numbers);

        for($i=0; $i<10; $i++){
            echo " $numbers[$i] ";
        }
        ?>
    </form>
</body>
</html>