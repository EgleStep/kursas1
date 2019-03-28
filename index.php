<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[ ] = 'Tokijas';

    print_r($cities);

    $cities2 = [
    'tokijas' => 13.6,
    'vasingtonas' => 0.6,
    'maskva' => 11.5,
    ];

    $cities2[ ] = [
    'londonas' => 8.6,
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis 1 | PHP 2</title>
</head>

<body>
    <ul>
        <?php
            echo "<li>$cities[1]</li>";
            echo "<li>Gyventojų skaičius: $cities2[tokijas] mln.</li>";
        ?>
    </ul>
</body>
</html>
