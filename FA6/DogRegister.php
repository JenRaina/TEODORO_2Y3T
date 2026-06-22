<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Register</title>
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

    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dog_name = $_POST['dog_name'];
        $breed    = $_POST['breed'];
        $age      = $_POST['age'];
        $address  = $_POST['address'];
        $color    = $_POST['color'];
        $height   = $_POST['height'];
        $weight   = $_POST['weight'];

        $sql = "INSERT INTO tbldog (dogname, breed, age, address, color, height, weight) 
                VALUES ('$dog_name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

        if (mysqli_query($conn, $sql)) {
            $message = "<p class='success-msg'>Dog registered successfully!</p>";
        } else {
            $message = "<p class='error-msg'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
?>
<body>
    <div class="container">
        <h2>Dog Information</h2>
        <?php echo $message; ?>
    
        <form action="dogregister.php" method="POST">
            <div class="form-group">
                <label for="dog_name">Name:</label>
                <input type="text" id="dog_name" name="dog_name" required>
            </div>
            
            <div class="form-group">
                <label for="breed">Breed:</label>
                <input type="text" id="breed" name="breed" required>
            </div>
            
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" required>
            </div>
            
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" id="color" name="color" required>
            </div>
            
            <div class="form-group">
                <label for="height">Height:</label>
                <input type="text" id="height" name="height" required>
            </div>
            
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="text" id="weight" name="weight" required>
            </div>
            
            <button type="submit" class="btn">save</button>
        </form>
    </div>
</body>
</html>
<?php
mysqli_close($conn);
?>

