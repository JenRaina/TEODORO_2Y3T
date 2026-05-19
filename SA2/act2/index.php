<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume of Shapes Assessment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // vol of cube
    function calculateCubeVolume($side) {
        return $side * $side * $side;
    }

    // vol of rec prism
    function calculateRectangularPrismVolume($length, $width, $height) {
        return $length * $width * $height;
    }

    // vol of cylinder
    function calculateCylinderVolume($radius, $height) {
        $pi = 3.14159; 
        return $pi * ($radius * $radius) * $height;
    }

    // vol of cone
    function calculateConeVolume($radius, $height) {
        $pi = 3.14159;
        return (1 / 3) * $pi * ($radius * $radius) * $height;
    }

    // vol of sphere
    function calculateSphereVolume($radius) {
        $pi = 3.14159;
        return (4 / 3) * $pi * ($radius * $radius * $radius);
    }

    $cubeSide = 5;

    $rectLength = 6;
    $rectWidth = 4;
    $rectHeight = 5;

    $cylinderRadius = 3;
    $cylinderHeight = 7;

    $coneRadius = 3;
    $coneHeight = 9;

    $sphereRadius = 4;
    ?>
    <table>
        <tr>
            <th colspan="3" class="table-title">Volume of Shapes</th>
        </tr>
        <tr>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>
        <tr>
            <td>s = <?php echo $cubeSide; ?></td>
            <td>v = s³</td>
            <td><?php echo calculateCubeVolume($cubeSide); ?></td>
        </tr>
        <tr>
            <td>l = <?php echo $rectLength; ?>, w = <?php echo $rectWidth; ?>, h = <?php echo $rectHeight; ?></td>
            <td>v = l * w * h</td>
            <td><?php echo calculateRectangularPrismVolume($rectLength, $rectWidth, $rectHeight); ?></td>
        </tr>
        <tr>
            <td>r = <?php echo $cylinderRadius; ?>, h = <?php echo $cylinderHeight; ?></td>
            <td>v = π * r² * h</td>
            <td><?php echo calculateCylinderVolume($cylinderRadius, $cylinderHeight); ?></td>
        </tr>
        <tr>
            <td>r = <?php echo $coneRadius; ?>, h = <?php echo $coneHeight; ?></td>
            <td>v = (1/3) * π * r² * h</td>
            <td><?php echo calculateConeVolume($coneRadius, $coneHeight); ?></td>
        </tr>
        <tr>
            <td>r = <?php echo $sphereRadius; ?></td>
            <td>v = (4/3) * π * r³</td>
            <td><?php echo calculateSphereVolume($sphereRadius); ?></td>
        </tr>
    </table>

</body>
</html>