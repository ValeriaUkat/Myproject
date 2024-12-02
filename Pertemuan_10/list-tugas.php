<?php
include 'config.php';
$sql = "SELECT * FROM tugas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>To Do List</h1>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Image</th> <!-- Added Image Header -->
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['due_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['priority']; ?></td>
            <td>
                <?php if (!empty($row['image'])): ?> <!-- Check if image is not empty -->
                    <img src="<?php echo $row['image']; ?>" alt="Task Image" style="width: 100px; height: auto;">
                <?php else: ?>
                    No Image <!-- Fallback if no image is available -->
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="form-tambah.php">Add New Task</a>
</body>
</html>