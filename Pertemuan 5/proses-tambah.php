<?php
include 'config.php';

$title = $_POST['title'];
$description = $_POST['description'];
$due_date = $_POST['due_date'];

$sql = "INSERT INTO tugas (title, description, due_date, status) VALUES ('$title', '$description', '$due_date', 'Belum Selesai')";

if ($conn->query($sql) === TRUE) {
    header("Location: list-tugas.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>