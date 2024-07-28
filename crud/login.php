<?php
session_start();
include "conn.php";

$loginAttempted = false;
$loginSuccess = false;

if (isset($_POST['submit'])) {
    $loginAttempted = true;
    $email = $_POST['email'];
    $password = sha1(md5($_POST['password']));
    
    $sql = "SELECT * FROM registration WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $loginSuccess = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_email'] = $row['email'];
        header("Location: dashboard.php");
        exit();
    }
    
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php
    if ($loginAttempted && !$loginSuccess) {
        echo "<p style='color: red;'>Login Failed</p>";
    }
    ?>
    <form action="" method="post">
        Email: <input type="text" name="email" placeholder="Email" required><br>
        Password: <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>