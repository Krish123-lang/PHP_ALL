<!DOCTYPE html>
<html>

<head>
    <title>Add User</title>
</head>

<body>
    <?php
    // Include the database configuration file
    include_once 'config.php';

    // Initialize variables
    $name = $email = '';
    $name_err = $email_err = '';

    // Process form data when submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty(trim($_POST["name"]))) {
            $name_err = "Please enter a name.";
        } else {
            $name = trim($_POST["name"]);
        }

        // Validate email
        if (empty(trim($_POST["email"]))) {
            $email_err = "Please enter an email.";
        } else {
            $email = trim($_POST["email"]);
        }

        // Check input errors before inserting into database
        if (empty($name_err) && empty($email_err)) {
            // Prepare an insert statement
            $sql = "INSERT INTO users (name, email) VALUES (?, ?)";

            if ($stmt = mysqli_prepare($conn, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_email);

                // Set parameters
                $param_name = $name;
                $param_email = $email;

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
        }

        // Close connection
        mysqli_close($conn);
    }
    ?>

    <h2>Add User</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span><?php echo $name_err; ?></span>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span><?php echo $email_err; ?></span>
        </div>
        <div>
            <input type="submit" value="Submit">
            <a href="index.php">Cancel</a>
        </div>
    </form>

</body>

</html>