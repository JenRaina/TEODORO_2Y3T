<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Multiplication Table</h1>
    <table>
        <?php
        $size = 10;

        for($row = 0; $row <= $size; $row++){
            echo "<tr>";

            for($col = 0; $col <= $size; $col++){
                $result = $row * $col;

                $class = (($row + $col) % 2 == 0) ? 'blue' : 'green';

                echo "<td class = '$class'>$result</td>";
            }
            echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>