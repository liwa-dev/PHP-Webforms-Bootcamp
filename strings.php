<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    //String
    $name = "Hello i'm php developer";
    echo $name;

    echo '<br>';
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo 'Total ' . $c;
    echo '<br>';
    // String Formating
    $name = "Liwa";
    $course = "PHP";
    $year = "2024";
    echo "This is to certify that $name has completed the $course course in $year";

    //String methods
    echo '<br>';
    $name = "Hello i'm php developer";
    echo strrev($name);
    echo '<br>';
    echo strtoupper($name);
    echo '<br>';
    echo trim($name);
    echo '<br>';
    echo str_replace("php", "javascript", $name);
    ?>
</body>
</html>