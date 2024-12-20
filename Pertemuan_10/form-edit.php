<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tugas WHERE task_id = $id";
$result = $conn->query($sql);
$task = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>Edit Task</h1>
    <form action="proses-edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $task['task_id']; ?>">
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required><br>
        <label for="description">Description</label>
        <textarea name="description" required><?php echo $task['description']; ?></textarea><br>
        <label for="due_date">Deadline</label>
        <input type="date" name="due_date" value="<?php echo $task['due_date']; ?>" required><br>
        <label for="priority">Priority</label>
        <input type="text" name="priority" value="<?php echo $task['priority']; ?>" required><br>
        <input type="submit" value="Update Task">
    </form>
</body>
</html>