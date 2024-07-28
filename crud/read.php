<?php
include "conn.php";

$qry = "SELECT * FROM registration";
$result = mysqli_query($conn, $qry);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Edit</th><th>Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['password']."</td><td><a href='edit_user.php?id=".$row['id']."'>Edit</a></td><td><a href='delete.php?id=".$row['id']."'>Delete</a></td></tr>";
}
echo "</table>";
echo '<br>';
echo '<button onclick="window.location.href=\'insert.php\'">Insert</button>';
//refresh
echo '<input type="button" name="refresh" value="Refresh" onclick="window.location.href=\'read.php\'">';
?>