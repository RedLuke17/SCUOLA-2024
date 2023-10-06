<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TavolaPitagorica</title>
</head>
<body>
    <table border="2">

        <?php
        $numero = 1;
        for($i = 1; $i <= 10 ;$i++){
            $numero = $i;
            echo "<tr></tr>";
            for($j = 1; $j <= 10 ;$j++){
                $numero = $j*$i;
                echo "<td>$numero</td>";
            }
        }
        ?>
    </table>
</body>
</html>