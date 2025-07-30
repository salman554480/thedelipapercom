<?php
include 'parts/db.php'; // Include your DB connection

date_default_timezone_set('Asia/Karachi'); // Set timezone to Pakistan
$cutoff_time = date('Y-m-d H:i:s', strtotime('-15 minutes'));

// Check if a backup exists in last 15 minutes
$check_query = "SELECT * FROM backup WHERE created_at >= '$cutoff_time' ORDER BY created_at DESC LIMIT 1";

$result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(['status' => 'exists', 'message' => 'Backup already exists in last 15 minutes']);
    exit;
}

// Proceed to create new backup...
$backupDir = 'database_backup/';
if (!file_exists($backupDir)) {
    mkdir($backupDir, 0777, true);
}

$backup_filename = "delipaper_" . date("Y-m-d_h-i-s_A") . ".sql";
$backupFilePath = $backupDir . $backup_filename;
$file = fopen($backupFilePath, 'w');

$tables = $conn->query("SHOW TABLES");
if ($tables) {
    while ($row = $tables->fetch_row()) {
        $table = $row[0];
        $createTable = $conn->query("SHOW CREATE TABLE `$table`");
        $createTableRow = $createTable->fetch_row();
        fwrite($file, "\n\n" . $createTableRow[1] . ";\n\n");

        $data = $conn->query("SELECT * FROM `$table`");
        while ($dataRow = $data->fetch_assoc()) {
            $columns = array_keys($dataRow);
            $values = array_map(function ($val) {
                return "'" . addslashes($val) . "'";
            }, array_values($dataRow));
            $sql = "INSERT INTO `$table` (`" . implode('`, `', $columns) . "`) VALUES (" . implode(', ', $values) . ");\n";
            fwrite($file, $sql);
        }
    }

    fclose($file);

    // Insert into backup table
    $insert = "INSERT INTO backup (backup_file, backup_date) VALUES ('$backup_filename', CURDATE())";
    $conn->query($insert);

    echo json_encode(['status' => 'success', 'message' => "Backup created: $backup_filename"]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No tables found']);
}