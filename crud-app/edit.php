<?php
include 'config.php';

$id = $_GET['id'];

// Read operation
$query = "SELECT * FROM crudtable WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bindParam(1, $id);
$stmt->execute();
$task = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    // Update operation
    $query = "UPDATE crudtable SET title = ?, description = ?, updated_at = NOW() WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $description);
    $stmt->bindParam(3, $id);
    
    if ($stmt->execute()) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error updating task.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form method="post">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required><br><br>
        <label>Description:</label>
        <textarea name="description" required><?php echo $task['description']; ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
