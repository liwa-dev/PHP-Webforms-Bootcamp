<?php
include "conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1(md5($_POST['password']));

    $insert = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password')";
    $ins = mysqli_query($conn, $insert);
    if ($ins) {
        echo "<script>alert('User registered successfully'); window.location.href='read.php';</script>";
    } else {
        echo "<script>alert('User registration failed')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <form action="insert.php" method="post">
        Name: <input type="text" name="name" placeholder="Name"><br>
        Email: <input type="text" name="email" placeholder="Email"><br>
        Password: <input type="text" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
        <input type="button" name="back" value="Back" onclick="window.location.href='read.php'">
    </form>
</body>
</html>