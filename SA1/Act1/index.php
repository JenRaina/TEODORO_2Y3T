<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="profile-container">
        <?php
            // personal 
            $firstName = "Jen Raina";
            $middleName = "Reyes";
            $surname = "Teodoro";
            $gender = "Female";
            $citizenship = "Filipino";
            $address = "123 Sampaloc, Manila";
            $studentID = "202410132";
            $email = "jrteodoro@fit.edu.ph";
            $birthdate = "September 23, 2006";
            $course = "Bachelor of Science in Information Technology";  
            $specialization = "Web and Mobile Application";

            //educational background
            $college = "Far Eastern University - Institute of Technology";
            $shs = "FEU High School (STEM - ICT Strand)";
            $jhs = "National University of Nazareth School";
        ?>

        <header>
            <h1>Student Registration Form</h1>
        </header>

        <div class="personal-deets">Personal Information & Contact</div>
        <table class="info-table">
            <tr>
                <td class="name-info">First Name</td>
                <td class="data-info"><?php echo $firstName; ?></td>
            </tr>
            <tr>
                <td class="name-info">Middle Name</td>
                <td class="data-info"><?php echo $middleName; ?></td>
            </tr>
            <tr>
                <td class="name-info">Surname</td>
                <td class="data-info"><?php echo $surname; ?></td>
            </tr>
            <tr>
                <td class="name-info">Gender</td>
                <td class="data-info"><?php echo "$gender"; ?></td>
            </tr>
            <tr>
                <td class="name-info">Citizenship</td>
                <td class="data-info"><?php echo "$citizenship"; ?></td>
            </tr>
            <tr>
                <td class="name-info">Address</td>
                <td class="data-info"><?php echo $address; ?></td>
            </tr>
            <tr>
                <td class="name-info">Birthdate</td>
                <td class="data-info"><?php echo $birthdate; ?></td>
            </tr>
            <tr>
                <td class="name-info">Student ID</td>
                <td class="data-info"><?php echo $studentID; ?></td>
            </tr>
            <tr>
                <td class="name-info">Email Address</td>
                <td class="data-info"><?php echo $email; ?></td>
            </tr>
            <tr>
                <td class="name-info">Course</td>
                <td class="data-info"><?php echo $course; ?></td>
            </tr>
            <tr>
                <td class="name-info">Specialization</td>
                <td class="data-info"><?php echo $specialization; ?></td>
            </tr>
        </table>

        <div class="personal-deets">Educational Background</div>
        <table class="info-table">
            <tr>
                <td class="name-info">College</td>
                <td class="data-info"><?php echo $college; ?></td>
            </tr>
            <tr>
                <td class="name-info">Senior High</td>
                <td class="data-info"><?php echo $shs; ?></td>
            </tr>
            <tr>
                <td class="name-info">Junior High</td>
                <td class="data-info"><?php echo $jhs; ?></td>
            </tr>
        </table>
    </div>

</body>
</html>