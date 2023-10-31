// demonstrate Cookies variables.

<?php
setcookie("user", "John", time() + 3600, "/");
echo "Cookie 'user' is set to " . $_COOKIE['user'];
?>
