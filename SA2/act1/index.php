<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $fruits = array(
        "Mango" => array(
            "image" => "images/mango.jpg",
            "description" => "Color Yellow",
            "fact" => "It is the national fruit of the Philippines, India, and Pakistan."
        ),
        "Apple" => array(
            "image" => "images/apple.jpg",
            "description" => "Color Red",
            "fact" => "Apples float in water because 25% of their volume is actually air."
        ),
        "Banana" => array(
            "image" => "images/banana.jpg",
            "description" => "Color Yellow",
            "fact" => "Botanically speaking, banana plants are giant herbs, and the fruit is a berry."
        ),
        "Orange" => array(
            "image" => "images/orange.jpg",
            "description" => "Color Orange",
            "fact" => "Oranges are a prominent source of Vitamin C and grew originally in Asia."
        ),
        "Grapes" => array(
            "image" => "images/grapes.jpg",
            "description" => "Color Purple",
            "fact" => "Grapes can be eaten fresh or dried to make raisins, currants, and sultanas."
        ),
        "Strawberry" => array(
            "image" => "images/strawberry.jpg",
            "description" => "Color Red",
            "fact" => "Strawberries are the only fruit that wear their seeds completely on the outside."
        ),
        "Pineapple" => array(
            "image" => "images/pineapple.jpg",
            "description" => "Color Yellow",
            "fact" => "A single pineapple plant takes almost three full years to grow and mature just one fruit."
        ),
        "Watermelon" => array(
            "image" => "images/watermelon.jpg",
            "description" => "Color Green",
            "fact" => "Watermelons are highly refreshing because they consist of roughly 92% water."
        ),
        "Papaya" => array(
            "image" => "images/papaya.jpg",
            "description" => "Color Green or Orange",
            "fact" => "Papayas contain an enzyme called papain, which naturally breaks down tough meat fibers."
        ),
        "Avocado" => array(
            "image" => "images/avocado.jpg",
            "description" => "Color Green",
            "fact" => "Unlike most fruits, avocados are uniquely high in healthy fats rather than natural sugars."
        )
    );

    ksort($fruits);
    ?>
    <table class="directory-table">
        <tr>
            <th colspan="4" class="main-header">My Fruits</th>
        </tr>
        
        <tr class="column-headers">
            <th>Image</th>
            <th>Fruit Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php foreach ($fruits as $name => $details): ?>
        <tr>
            <td class="fruit-img-col">
                <img src="<?php echo $details['image']; ?>" alt="<?php echo $name; ?>">
            </td>
            
            <td>
                <?php echo $name; ?>
            </td>
            
            <td>
                <?php echo $details['description']; ?>
            </td>

            <td>
                <?php echo $details['fact']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>