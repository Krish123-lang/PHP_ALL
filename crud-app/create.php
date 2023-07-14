<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    // Create operation
    $query = "INSERT INTO crudtable (title, description, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
    $stmt = $db->prepare($query);
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $description);
    
    if ($stmt->execute()) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error creating task.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Create Task</h1>
    <form method="post">
        <label>Title:</label>
        <input type="text" name="title" required><br><br>
        <label>Description:</label>
        <textarea name="description" required></textarea><br><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>
