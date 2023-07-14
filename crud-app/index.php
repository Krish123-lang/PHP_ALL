<?php
include 'config.php';

// Read operation
$query = "SELECT * FROM crudtable ORDER BY created_at DESC";
$stmt = $db->prepare($query);
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
</head>
<body>
    <h1>Task Manager</h1>
    <a href="create.php">Add New Task</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task) { ?>
                <tr>
                    <td><?php echo $task['title']; ?></td>
                    <td><?php echo $task['description']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $task['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $task['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
