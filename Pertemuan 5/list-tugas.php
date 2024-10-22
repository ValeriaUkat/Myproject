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
</head>
<body>
    <h1>To Do List</h1>
    <table border = 1>
        <tr>
            <th>Title </th>
            <th>Description </th>
            <th>Deadline </th>
            <th>State </th>
            <th>Priority</th>
            <th>Action </th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['due_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['priority']; ?></td>
            <td>
                <a href="form-edit.php?id=<?php echo $row['task_id']; ?>">Edit</a>
                <a href="proses-hapus.php?id=<?php echo $row['task_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="form-tambah.php">Add New Task</a>
</body>
</html>