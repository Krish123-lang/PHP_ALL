<!DOCTYPE html>
<html>

<head>
    <title>CRUD App</title>
</head>

<body>
    <?php
    // Include the database configuration file
    include_once 'config.php';

    // Fetch all records from the database
    $result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
    ?>

    <h2>CRUD App</h2>

    <h3>Users</h3>
    <a href="add.php">Add New User</a><br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>";
            echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a>";
            echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirmDelete()'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>

</body>

</html>