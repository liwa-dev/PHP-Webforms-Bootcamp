<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <?php
    // Create a multiplication table using for loop statement Like output would be given format up to 10 times
    $table = 7;
    echo "The multiplication table: $table <br>";
    for ($c = 1; $c <= 10; $c++) {
        echo "$table X $c = " . $table * $c . "<br>";
    }
    ?>
</body>
</html>