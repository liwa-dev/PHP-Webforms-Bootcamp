<?php
include "conn.php";
$id = $_GET['id'];
$qry = "DELETE FROM registration WHERE id = $id";
$result = mysqli_query($conn, $qry);
echo '<script>alert("Record Deleted Successfully"); window.location.href="read.php";</script>';
?>