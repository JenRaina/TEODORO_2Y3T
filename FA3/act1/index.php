<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$names = array (
    "Jen Raina Teodoro", "Hannah Elisha Delos Santos", "Joy Anne Ciaris Nuqui", "Roy Xie","Guo Zhe",
    "Jiang Zhi Nan", "Bian Tian Yang", "Renz Jacob Buban", "Zhang Miao Yi", "Zhou Yi Ran"
);

sort($names);
$image = array (
    "Jen Raina Teodoro" => "images/Jen.jpg",
    "Hannah Elisha Delos Santos" => "images/Hannah.png",
    "Joy Anne Ciaris Nuqui" => "images/Ciaris.jpg",
    "Roy Xie" => "images/RoyXie.jpg",
    "Guo Zhe" => "images/GuoZhe.jpg",
    "Jiang Zhi Nan" => "images/ZhiNan.jpg",
    "Bian Tian Yang" => "images/TianYang.jpeg",
    "Renz Jacob Buban" => "images/Renz.jpg",
    "Zhang Miao Yi" => "images/MiaoYi.jpg",
    "Zhou Yi Ran" => "images/YiRan.jpg"
);

$age = array (
    "Jen Raina Teodoro" => 19,
    "Hannah Elisha Delos Santos" => 20,
    "Joy Anne Ciaris Nuqui" => 19,
    "Roy Xie" => 25,
    "Guo Zhe" => 30,
    "Jiang Zhi Nan" => 26,
    "Bian Tian Yang" => 21,
    "Renz Jacob Buban" => 25,
    "Zhang Miao Yi" => 25,
    "Zhou Yi Ran" => 25
);

$birthday = array (
    "Jen Raina Teodoro" => "September 23, 2006",
    "Hannah Elisha Delos Santos" => "April 27, 2006",
    "Joy Anne Ciaris Nuqui" => "June 28, 2006",
    "Roy Xie" => "July 22, 1999",
    "Guo Zhe" => "June 18, 1994",
    "Jiang Zhi Nan" => "December 3, 1999",
    "Bian Tian Yang" => "February 19, 2003",
    "Renz Jacob Buban" => "September 1, 2000",
    "Zhang Miao Yi" => "September 13, 1998",
    "Zhou Yi Ran" => "November 22, 2000"
);

$contact_num = array (
    "Jen Raina Teodoro" => "0919-123-4567",
    "Hannah Elisha Delos Santos" => "0919-123-4568",
    "Joy Anne Ciaris Nuqui" => "0919-123-4569",
    "Roy Xie" => "0919-123-4570",
    "Guo Zhe" => "0919-123-4571",
    "Jiang Zhi Nan" => "0919-123-4572",
    "Bian Tian Yang" => "0919-123-4573",
    "Renz Jacob Buban" => "0919-123-4574",
    "Zhang Miao Yi" => "0919-123-4575",
    "Zhou Yi Ran" => "0919-123-4576"
);

echo "<table>";

// HEADER
echo "<tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
      </tr>";

$no = 1;

// ROWS
foreach($names as $name){
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$name</td>";
    echo "<td><img src='" . $image[$name] . "' alt='$name'></td>";

    echo "<td>{$age[$name]}</td>";
    echo "<td>{$birthday[$name]}</td>";
    echo "<td>{$contact_num[$name]}</td>";
    echo "</tr>";

    $no++;
}

echo "</table>";
?>

</body>
</html>