<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 10);

$sum = 0;
$product = 1;
$difference = $numbers[0];
$quotient = $numbers[0];

foreach($numbers as $num){
    $sum += $num;
    $product *= $num;
}

// difference & division
for($i = 1; $i < count($numbers); $i++){
    $difference -= $numbers[$i];
    $quotient /= $numbers[$i];
}

//  OUTPUT TABLE
echo "<table>";

// Array list row
echo "<tr>";
echo "<td colspan='2'>Array list: ";
foreach($numbers as $num){
    echo $num . ", ";
}
echo "</td>";
echo "</tr>";

// Add
echo "<tr>";
echo "<td>Addition</td>";
echo "<td>$sum</td>";
echo "</tr>";

// Sub
echo "<tr>";
echo "<td>Subtraction</td>";
echo "<td>$difference</td>";
echo "</tr>";

// Multi
echo "<tr>";
echo "<td>Multiplication</td>";
echo "<td>$product</td>";
echo "</tr>";

// Division
echo "<tr>";
echo "<td>Division</td>";
echo "<td>$quotient</td>";
echo "</tr>";

echo "</table>";
?>

</body>
</html>