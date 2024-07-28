<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    function greetuser($name) {
        echo "Welcome to PHP Functions";
    }
    greetuser(); // calling the function

    echo '<br> use argument';
    function greetUser($name,$year) {
        echo "Welcome $name. You are Born in $year <br>";
    }
    greetUser('John',1980); // calling the function with argument
    greetUser('Liwa',2003);
    greetUser('Ahmed',1999);

    echo '<br> default argument';
    function greetUserDefault($name ="Liwa",$year=2024) {
        echo "Welcome $name. You are Born in $year <br>";
    }
    greetUserDefault('John');
    greetUserDefault();
    greetUserDefault('Ahmed');

    echo '<br> function sum';
    function sum(int $a,int $b) {
        $c = $a + $b;
        return $c;
    }
    echo "5+4 = " . sum(5,4) . "<br>";
    echo "15+20 = " . sum(15,20) . "<br>";

    $total = sum(10,20);
    echo "Total = $total <br>";

    //Call by reference
    echo '<br> Call by reference';

    $x = 10;
    $y = 20;
    $total = sum($x,$y);
    echo $total;
    ?>
</body>
</html>