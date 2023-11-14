<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALENDARIO</title>
</head>
<body>
    <h1>CALENDARIO</h1>
        <?php
        $data = getdate();
        $mese = $data["month"];

        echo "
        <table border='2'>
            <tr>
                <th colspan='7'>
                    $mese
                </th>
            </tr>
            <tr>
                <td>Lun</td>
                <td>Mar</td>
                <td>Mer</td>
                <td>Gio</td>
                <td>Ven</td>
                <td>Sab</td>
                <td>Dom</td>
            </tr>
        </table>"
        ?>
    </form>
</body>
</html>