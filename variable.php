<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 123;
    var_dump(is_numeric($num));
    //convert into float 
    $num = (float)$num; // With int: (int)$num
    var_dump($num);
    //Boolean datatypes
    $is_student = true;
    var_dump($is_student);
?>
</body>
</html>