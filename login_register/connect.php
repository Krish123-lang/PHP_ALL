<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "signupforms";

$conn = new mysqli($server, $user, $password, $dbname);

if (!$conn) {
    die("OOPS!!".mysqli_connect_error());
}