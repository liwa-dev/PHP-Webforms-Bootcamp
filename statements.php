<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statements</title>
</head>
<body>
    <?php
    // if statement
    $date = date('Y-m-d');
    if ($date == '2024-02-29') {
        echo 'Today is 29th February';
    } else {
        echo 'Today is not 29th February';
    }
    // with only Month
    $month = date('m');
    if ($month < '02') {
        echo 'Winter';
    } else {
        echo 'Not Winter';
    }
    ?>
</body>
</html>