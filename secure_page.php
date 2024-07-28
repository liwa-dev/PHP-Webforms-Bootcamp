<?php
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['userID'])) {
    echo 'Session ID: ' . session_id();
    echo "<br>Name: $_SESSION[name]";
    echo "<br>User ID: $_SESSION[userID]";
    echo '<br>If you do refresh session will be destroyed!!';
    session_destroy();
} else {
    echo 'Session is destroyed. You are getting undefined array key errors. Now go to <a href="sessions.php">Add Session</a>';
}
?>