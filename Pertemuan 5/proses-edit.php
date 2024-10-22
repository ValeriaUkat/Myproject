<?php
include 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$due_date = $_POST['due_date'];
$priority = $_POST['priority'];

$sql = "UPDATE tugas SET title='$title', description='$description', due_date='$due_date', priority='$priority' WHERE task_id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: list-tugas.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>