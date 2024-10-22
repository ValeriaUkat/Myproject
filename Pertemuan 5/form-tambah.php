<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
</head>
<body>
    <h1>Add New Task</h1>
    <form action="proses-tambah.php" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" required><br><br>
        <label for="description">Description</label>
        <textarea name="description" required></textarea><br><br>
        <label for="due_date">Deadline</label>
        <input type="date" name="due_date" required><br><br>
        <label for="priority">Priority</label>
        <input type="text" name="priority" required><br><br>
        <input type="submit" value="Add Task">
    </form>
</body>
</html>