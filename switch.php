<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <?php
    $sports = 'Basketball';
    switch ($sports) {
        case 'Basketball':
            echo 'I love Basketball';
            break;
        case 'Football':
            echo 'I love Football';
            break;
        case 'Tennis':
            echo 'I love Tennis';
            break;
        default:
            echo 'I don\'t like any sports';
    }
    ?>
</body>
</html>