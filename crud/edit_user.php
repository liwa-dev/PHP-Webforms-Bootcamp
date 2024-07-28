<?php
include "conn.php";
$id = $_GET['id'];
$qry = "SELECT * FROM registration WHERE id = $id";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" value="<?php echo $row['name']; ?>" name="name" placeholder="Name"><br>
        Email: <input type="text" value="<?php echo $row['email']; ?>" name="email" placeholder="Email"><br>
        Password: <input type="text" value="<?php echo $row['password']; ?>" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>