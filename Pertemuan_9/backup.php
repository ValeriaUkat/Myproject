<?php
include 'config.php';

// Proses Backup
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $backup_time = date('Y-m-d H:i:s');
    $backup_file = 'backup_' . date('YmdHis') . '.sql';

    // Buat dump database
    $dump = shell_exec("mysqldump -u {$db_user} -p{$db_pass} {$db_name} > {$backup_file}");

    if ($dump !== false) {
        $sql = "INSERT INTO back_up (backup_time, backup_file) VALUES ('$backup_time', '$backup_file')";
        if ($conn->query($sql) === TRUE) {
            $success = "Backup berhasil dilakukan.";
        } else {
            $error = "Terjadi kesalahan saat melakukan backup.";
        }
    } else {
        $error = "Terjadi kesalahan saat membuat dump database.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Backup Data</title>
</head>
<body>
    <h1>Backup Data</h1>

    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php elseif (isset($success)): ?>
        <div class="success"><?php echo $success; ?></div>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="submit" value="Backup Sekarang">
    </form>

    <h2>Riwayat Backup</h2>
    <table>
        <tr>
            <th>ID Backup</th>
            <th>Waktu Backup</th>
            <th>Nama File</th>
        </tr>
        <?php
        $sql = "SELECT * FROM back_up ORDER BY backup_time DESC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['backup_id'] . "</td>";
            echo "<td>" . $row['backup_time'] . "</td>";
            echo "<td>" . $row['backup_file'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>