<?php
include 'config.php';

$id = $_GET['id'];

// Delete operation
$query = "DELETE FROM crudtable WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bindParam(1, $id);

if ($stmt->execute()) {
    header('Location: index.php');
    exit();
} else {
    echo "Error deleting task.";
}
?>
