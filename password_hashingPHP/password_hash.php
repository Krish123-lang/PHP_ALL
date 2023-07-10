<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    username: <br>
    <input type="text" name="username"><br>
    password: <br>
    <input type="password" name="password"><br>
    confirm password: <br>
    <input type="password" name="confirm_password"><br>
    <input type="submit" value="submit" name="submit"><br><br>
</form>
<!-- ------------------------------------------------------ -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST['confirm_password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedConfirmPassword = password_hash($confirmPassword, PASSWORD_DEFAULT);

    if (password_verify($password, $hashedConfirmPassword)) {
        echo "Passwords match!";
    } else {
        echo "Passwords do not match!";
    }
}
?>
