<?php
    // Include the database configuration file
    include_once 'config.php';

    // Check if the id parameter exists
    if (isset($_GET['id'])) {
        // Prepare a delete statement
        $sql = "DELETE FROM users WHERE id = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = $_GET['id'];

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to index page
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        // Close connection
        mysqli_close($conn);
    } else {
        // Redirect to index page if the id parameter is missing
        header("location: index.php");
        exit();
    }
