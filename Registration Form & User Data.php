// Create Registration Form and Display User Data.

<!-- registration_form.php -->
<form action="process_registration.php" method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Register">
</form>

\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

<!-- process_registration.php -->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
echo "Registration successful. Name: $name, Email: $email";
?>
