<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comma Delimited Format</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Comma delimited format :</h2>

<div class="comma-delimited">
<?php
    for ($i = 0; $i <= 99; $i++) {
        if ($i < 10) {
            echo "0" . $i;
        } else {
        echo $i;
        }

        if ($i < 100) {
            echo ", ";
        }
    }
?>
</div>
</body>
</html>
