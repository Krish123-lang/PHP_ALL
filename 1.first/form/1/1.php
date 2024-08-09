<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $nameErr = $emailErr = $websiteErr = $genderErr = "";
    $name = $email = $website = $comment = $gender = "";
    $valid = true; // To check if all inputs are valid

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Name validation
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
            $valid = false;
        } else {
            $name = testFunction($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                $valid = false;
            }
        }

        // Email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $valid = false;
        } else {
            $email = testFunction($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $valid = false;
            }
        }

        // Website validation
        if (empty($_POST["website"])) {
            $websiteErr = "Website is required";
            $valid = false;
        } else {
            $website = testFunction($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
                $valid = false;
            }
        }

        // Comment validation
        if (isset($_POST["comment"])) {
            $comment = testFunction($_POST["comment"]);
        }

        // Gender validation
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $valid = false;
        } else {
            $gender = testFunction($_POST["gender"]);
        }
    }

    function testFunction($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name:
        <input type="text" placeholder="Name" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <span class="error">*<?php echo $nameErr; ?></span><br><br>

        Email:
        <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <span class="error">*<?php echo $emailErr; ?></span><br><br>

        Website:
        <input type="text" placeholder="Website" name="website" value="<?php echo htmlspecialchars($website); ?>">
        <span class="error">*<?php echo $websiteErr; ?></span><br><br>

        Comment:
        <textarea name="comment" placeholder="Comment..."><?php echo htmlspecialchars($comment); ?></textarea><br><br>

        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <span class="error">*<?php echo $genderErr; ?></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php if ($valid && $_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h1>Your Information</h1>
        <?php
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Website: " . htmlspecialchars($website) . "<br>";
        echo "Comment: " . htmlspecialchars($comment) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        ?>
    <?php endif; ?>

</body>

</html>