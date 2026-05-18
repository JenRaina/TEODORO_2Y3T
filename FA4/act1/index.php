<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biography</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tbody>
            <tr>
                <td>
                    <img src="images/Ciaris.jpg" alt="Story 1 Image" class="story-img">
                    <div class="story-info">
                        <?php include('story1.php'); ?>
                    </div>
                </td>
                <td>
                    <img src="images/Hannah.jpg" alt="Story 2 Image" class="story-img">
                    <div class="story-info">
                        <?php include('story2.php'); ?>
                    </div>
                </td>
                <td>
                    <img src="images/Jairus.jpg" alt="Story 3 Image" class="story-img">
                    <div class="story-info">
                        <?php require('story3.php'); ?>
                    </div>
                </td>
                <td>
                    <img src="images/Renz.jpg" alt="Story 4 Image" class="story-img">
                    <div class="story-info">
                        <?php require('story4.php'); ?>
                    </div>
                </td>
                <td>
                    <img src="images/Pipoy.jpg" alt="Story 5 Image" class="story-img">
                    <div class="story-info">
                        <?php include('story5.php'); ?>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>