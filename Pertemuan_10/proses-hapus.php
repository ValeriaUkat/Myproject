<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tugas WHERE task_id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: list-tugas.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>