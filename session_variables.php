//  PHP script to demonstrate session’s variables

<?php
session_start();
$_SESSION['username'] = 'John';
echo "Welcome, " . $_SESSION['username'];
?>
