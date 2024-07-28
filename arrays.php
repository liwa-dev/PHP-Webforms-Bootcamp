<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    //Arrays 
    $fruits = array("apple", "banana", "orange");
    var_dump($fruits);
    //arrays 
    $fruits = array("apple", "banana", "orange");
    echo 'I like ' . $fruits[0] . ', ' . $fruits[1] . ' and ' . $fruits[2] . 's.';

    //how much elements in the array
    echo count($fruits);
    //multi dimensional arrays
    $fruits = array(
        array("apple", 21, 10),
        array("banana", 22, 11),
        array("orange", 23, 12)
    );
    for ($i = 0; $i < count($fruits); $i++) {
        echo '<p><b>Row number ' . $i . '</b></p>';
        echo '<ul>';
        for ($j = 0; $j < count($fruits[$i]); $j++) {
            echo '<li>' . $fruits[$i][$j] . '</li>';
        }
        echo '</ul>';
    }


    //Sorting arrays
    $fruits = array("apple", "banana", "orange");
    sort($fruits);
    echo '<br>Sort: ';
    print_r($fruits);
    //Sorting with numbers
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    echo '<br>Sort Numbers: ';
    print_r($numbers);
    //Rsort fruits 
    rsort($fruits);
    echo '<br>Rsort Fruits: ';
    print_r($fruits);
    echo "<br>Rsort Numbers: ";
    rsort($numbers);
    print_r($numbers);
    
    ?>
</body>
</html>