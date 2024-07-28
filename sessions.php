<?php
//session in php
session_start();
$_SESSION['name'] = 'John';
$_SESSION['userID'] = '1234567890';
echo 'Session added! successfully Now go on <a href="secure_page.php">Test Session secure</a>';
?>