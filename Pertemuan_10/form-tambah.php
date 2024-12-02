<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>Add New Task</h1>
    <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
        <label for="title">Title</label>
        <input type="text" name="title" required><br>
        <label for="description">Description</label>
        <textarea name="description" required></textarea><br>
        <label for="due_date">Deadline</label>
        <input type="date" name="due_date" required><br>
        <label for="priority">Priority</label>
        <input type="text" name="priority" required>
        <br>
        <h2>Upload File</h2>
        <input type="file" name="userfile" required>
        <br><br>
        <input type="submit" value="Upload">
        <br><br>
        <input type="submit" value="Add Task">  
    </form>
</body>
</html>