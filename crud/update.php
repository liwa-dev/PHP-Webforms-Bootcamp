<?php
include "conn.php";

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update = "UPDATE registration SET name = ?, email = ?, password = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $password, $id);
    
    if(mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Record Updated Successfully'); window.location.href='read.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_stmt_close($stmt);
} else {
    echo "Update form was not submitted.";
}

mysqli_close($conn);
?>