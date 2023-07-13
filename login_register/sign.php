<?php

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "connect.php";

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from registration where username='$username'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                echo "Username '$username' already exists!";
                // $user = 1;
            } else {
                $sql = "insert into registration(username, password) values('$username', '$password')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    // echo "Signup success";
                    // $success = 1;
                    header('location:login.php');
                } else {
                    die(mysqli_error($conn));
                }
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
    <title>signup</title>
</head>

<body>

    <!-- <?php
            // if ($user) {
            //     echo "User Already Exists";
            // }
            ?>

    <?php
    // if ($success) {
    //     echo "Signup Succes";
    // }
    ?> -->

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Signup" name="submit"> <br><br>
        <p>Already have an account? <a href="login.php">Login Now</a> </p>
    </form>
</body>

</html>