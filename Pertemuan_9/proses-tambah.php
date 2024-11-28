<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $priority = $_POST['priority'];

    $sql = "INSERT INTO tugas (title, description, due_date, priority, status) VALUES ('$title', '$description', '$due_date', '$priority', 'Belum Selesai')";

    if ($conn->query($sql) === TRUE) {
        header("Location: list-tugas.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>