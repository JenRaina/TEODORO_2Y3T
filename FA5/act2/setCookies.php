<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    $fname = $mname = $lname = $dob = $address = "";
    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
    }
    
    setcookie("fname", $fname, time() + 10);
    setcookie("mname", $mname, time() + 20);
    setcookie("lname", $lname, time() + 30);

?>
<body>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col col-md-4">
                <form action=""<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter first name">
                    </div>
                    <div class="mb-3">
                        <label for="mname" class="form-label">Middle Name: </label>
                        <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter middle name">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name: </label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter last name">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth: </label>
                        <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter date of birth">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address: </label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php if(isset($_POST['submit'])): ?>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col col-md-4">
                <p>First Name: <?= $_COOKIE ['fname']??"Waiting"; ?></p>
                <p>Middle Name: <?= $_COOKIE ['mname']??"Waiting"; ?></p>
                <p>Last Name: <?= $_COOKIE ['lname']??"Waiting"; ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>


</body>
</html>