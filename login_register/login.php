<?php
$login = 0;
$invalid = 0;

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "connect.php";

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from registration where username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                // echo "Login Successfull !";
                $login = 1;
                session_start();
                $_SESSION['username'] = $username;
                header('location:home.php');
            } else {
                // echo "Invalid Data !";
                $invalid = 1;
            }
        }
    }
}
//catch exception
catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    if ($login) {
        echo "<p class='alert' role='alert' >You have been logged in !! <button type='button' data-dismiss='alert'>&times;</button></p>";
    }
    ?>

    <?php
    if ($invalid) {
        echo "<p class='alert' role='alert' >Invalid Data !! <button type='button' data-dismiss='alert'>&times;</button></p>";
    }
    ?>


    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Login" name="submit"> <br><br>

        <p>Don't have an account? <a href="sign.php">Signup Now</a> </p>
    </form>
</body>

</html>