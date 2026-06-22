<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog View</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbdog"; 

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbldog";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Database Query Failed: " . mysqli_error($conn));
    }
?>
<body>
    <div class="container wide">
        
        <?php
        if (mysqli_num_rows($result) > 0) {
            $counter = 1; 
            
            while ($row = mysqli_fetch_assoc($result)) {
                $display_name    = isset($row['dogname']) ? $row['dogname'] : 'N/A';
                $display_breed   = isset($row['breed']) ? $row['breed'] : 'N/A';
                $display_age     = isset($row['age']) ? $row['age'] : 'N/A';
                $display_address = isset($row['address']) ? $row['address'] : 'N/A';
                $display_color   = isset($row['color']) ? $row['color'] : 'N/A';
                $display_height  = isset($row['height']) ? $row['height'] : 'N/A';
                $display_weight  = isset($row['weight']) ? $row['weight'] : 'N/A';

                echo "<div class='dog-box'>";
                echo "<div>Dog " . $counter . "</div>";
                echo "<div>Name: " . $display_name . "</div>";
                echo "<div>Breed: " . $display_breed . "</div>";
                echo "<div>Age: " . $display_age . "</div>";
                echo "<div>Address: " . $display_address . "</div>";
                echo "<div>Color: " . $display_color . "</div>";
                echo "<div>Height: " . $display_height . "</div>";
                echo "<div>Weight: " . $display_weight . "</div>";
                echo "</div>";
                echo "<hr class='dog-divider'>";
                $counter++;
            }
        } else {
            echo "<p class='no-records'>No dog entries found in the database.</p>";
        }
        ?>
    </div>
</body>
</html>
<?php
mysqli_close($conn);
?>
