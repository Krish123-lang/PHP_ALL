<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from `registrations` where username='$username' and password='$password'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            echo '
            <div class="container mt-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Login Successful !</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
                ';

            session_start();
            $_SESSION['username'] = $username;
            header('location:home.php');
        } else {
            echo '
            <div class="container mt-2">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Invalid Credentials !</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
                ';
        }
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Login Form</h1>
    <div class="container mt-2">
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

            <p class="text-center">Don't have an account? <a class="text-decoration-none" href="sign.php">Create One</a></p>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>