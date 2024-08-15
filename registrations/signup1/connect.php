<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = 'krishna';
$DATABASE = 'signupforms';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD,  $DATABASE);

if (!$con) {
    error_log("Database connection failed: " . mysqli_connect_error());
    die("Connection failed. Please try again later.");
}
