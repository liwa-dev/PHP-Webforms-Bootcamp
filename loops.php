<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    //Control Flow Statements
    //while loop
    echo "<br> while loop";
    $a = 1;
    while ($a <= 10) {
        echo "The number is: $a <br>";
        $a++;
    }
    echo "<br> do while loop";
    // do while loop
    $b = 1;
    do {
        echo "The number is: $b <br>";
        $b++;
    } while ($b <= 10);
    echo "<br> for loop";
    // for loop
    $table = 5; 
    $length = 10;
    echo "The multiplication table: $table <br>";

    for ($c = 1; $c <= $length; $c++) {
        echo "$a X $table = " . $a * $table . "<br>";
    }

    echo '<br> for each loop';
    // for each loop
    $colors = array('red', 'green', 'blue');
    foreach ($colors as $key => $value) {
        echo $key . '=>' . $value . '<br>';
    }

    echo '<br> break';
    // break
    $items = 10;
    echo "break the loop when the number is 5 <br> and items are $items <br>";
    for ($c = 1; $c <= $items; $c++) {
        if ($c == 5) {
            break;
        }
        echo "The number is: $c <br>";
    }
    ?>
</body>
</html>