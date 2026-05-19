<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <table class="resume-table">
        <tr>
            <td class="avatar-box">
                <img src="Jen.jpg" alt="Profile Picture">
            </td>
            <td>
                <?php require('personal_info.php'); ?>
            </td>
        </tr>

        <tr class="section-row">
            <td colspan="2">
                 Career Objective
                <?php include('career_objective.php'); ?>
            </td>
        </tr>

        <tr class="section-row">
            <td colspan="2">
                Educational Attainment page
                <?php include('educational_attainment.php'); ?>
            </td>
        </tr>

        <tr class="section-row">
            <td colspan="2">
                Skills page
                <?php include('skills.php'); ?>
            </td>
        </tr>

        <tr class="section-row">
            <td colspan="2">
                Affiliation page
                <?php include('affiliation.php'); ?>
            </td>
        </tr>

        <tr class="section-row">
            <td colspan="2">
                Work Experience Page
                <?php include('work_experience.php'); ?>
            </td>
        </tr>
    </table>

</body>
</html>