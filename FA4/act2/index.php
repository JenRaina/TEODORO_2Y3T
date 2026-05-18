<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="6" class="table-title">List of names</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Number of Characters</th>
                <th>Uppercase first character </th>
                <th>Replace vowels with @</th>
                <th>Check position of character 'a'</th>
                <th>Reverse name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $names = array(
                "jen raina teodoro", "hannah delos santos", "ciaris nuqui", "clark bagtas", "dylan ramirez",
                "jairus galicia", "paul go", "ashton lalu", "leann baccay", "fiona fausto",
                "renz buban", "zhou yi ran", "kristine sarzuelo", "fiona rivas", "ann esquivias",
                "romar lising", "jonash de guia", "su zaizai", "he tian", "erica tan"
            );

            foreach ($names as $name) {
                $charCount = strlen($name);
                $upperFirst = ucfirst($name);
                $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
                $replacedVowels = str_replace($vowels, "@", $name);
                $positionA = strpos($name, "a");
                $reversedName = strrev($name);
                

                echo "<tr>";
                echo "<td>" . $name . "</td>";
                echo "<td>" . $charCount . "</td>";
                echo "<td>" . $upperFirst . "</td>";
                echo "<td>" . $replacedVowels . "</td>";

                if ($positionA === false) {
                    echo "<td></td>";
                } else {
                    echo "<td> " . $positionA . "</td>";
                }
                
                echo "<td>" . $reversedName . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>