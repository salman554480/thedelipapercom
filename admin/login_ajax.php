<?php
session_start();
require_once('parts/db.php');

// Set content type to JSON
header('Content-Type: application/json');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log function for debugging
function debugLog($message) {
    error_log("LOGIN DEBUG: " . $message);
}

debugLog("Login AJAX endpoint accessed");

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    debugLog("Invalid request method: " . $_SERVER['REQUEST_METHOD']);
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

debugLog("POST data received: " . print_r($_POST, true));

// Check if email and password fields exist
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    debugLog("Missing email or password field in POST data");
    echo json_encode(['success' => false, 'message' => 'Email and password fields are required']);
    exit;
}

// Get and sanitize input
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$password = trim($_POST['password']);

debugLog("Email: " . $email);
debugLog("Password length: " . strlen($password));

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    debugLog("Invalid email format");
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit;
}

// Check if email and password are not empty
if (empty($email) || empty($password)) {
    debugLog("Empty email or password");
    echo json_encode(['success' => false, 'message' => 'Email and password are required']);
    exit;
}

// Database query
$select = "SELECT * FROM admin WHERE admin_email='$email'";
debugLog("SQL Query: " . $select);

$run = mysqli_query($conn, $select);

if (!$run) {
    debugLog("Database query failed: " . mysqli_error($conn));
    echo json_encode(['success' => false, 'message' => 'Database error occurred']);
    exit;
}

debugLog("Query executed successfully. Rows found: " . mysqli_num_rows($run));

if (mysqli_num_rows($run) > 0) {
    $row = mysqli_fetch_array($run);
    
    $user_email = $row['admin_email'];
    $user_password = $row['admin_password'];
    $admin_role = $row['admin_role'];
    
    debugLog("User found - Email: $user_email, Role: $admin_role");
    
    if ($email == $user_email && $password == $user_password) {
        debugLog("Credentials match - proceeding with login");
        
        $current_date = date('Y-m-d');
        $select_last_backup = "SELECT * FROM backup where backup_date='$current_date'";
        $result_last_transaction = mysqli_query($conn, $select_last_backup);
        
        debugLog("Backup check query executed. Rows found: " . mysqli_num_rows($result_last_transaction));
        
        if (mysqli_num_rows($result_last_transaction) > 0) {
            debugLog("Backup already exists for today");
            
            if ($admin_role == "admin") {
                $_SESSION['admin_email'] = $user_email;
                debugLog("Admin login successful - redirecting to index.php");
                echo json_encode(['success' => true, 'message' => 'Login successful', 'redirect' => 'index.php']);
            } else {
                $_SESSION['admin_email'] = $user_email;
                debugLog("User login successful - redirecting to post_view.php");
                echo json_encode(['success' => true, 'message' => 'Login successful', 'redirect' => 'post_view.php']);
            }
        } else {
            debugLog("No backup found for today - creating backup");
            
            // Directory to store the backups
            $backupDir = 'database_backup/';
            
            // Ensure the backup directory exists, if not, create it
            if (!file_exists($backupDir)) {
                mkdir($backupDir, 0777, true);
                debugLog("Backup directory created: $backupDir");
            }
            
            $backup = "delipaper" . "_" . date("Y-m-d_H-i-s") . ".sql";
            $backupFile = $backupDir . $backup;
            
            debugLog("Creating backup file: $backupFile");
            
            // Open the backup file for writing
            $file = fopen($backupFile, 'w');
            
            if (!$file) {
                debugLog("Failed to create backup file");
                echo json_encode(['success' => false, 'message' => 'Failed to create backup file']);
                exit;
            }
            
            // Get all tables from the database
            $tables = $conn->query("SHOW TABLES");
            
            if ($tables) {
                debugLog("Starting database backup process");
                
                // Loop through all tables and dump each table
                while ($row = $tables->fetch_row()) {
                    $table = $row[0];
                    debugLog("Backing up table: $table");
                    
                    // Write the table structure to the backup file
                    $createTable = $conn->query("SHOW CREATE TABLE `$table`");
                    $createTableRow = $createTable->fetch_row();
                    fwrite($file, "\n\n" . $createTableRow[1] . ";\n\n");
                    
                    // Dump the table data
                    $result = $conn->query("SELECT * FROM `$table`");
                    while ($dataRow = $result->fetch_assoc()) {
                        $columns = array_keys($dataRow);
                        $values = array_map(function ($value) {
                            return "'" . addslashes($value) . "'";
                        }, array_values($dataRow));
                        
                        $sql = "INSERT INTO `$table` (`" . implode('`, `', $columns) . "`) VALUES (" . implode(', ', $values) . ");\n";
                        fwrite($file, $sql);
                    }
                }
                
                // Close the file
                fclose($file);
                
                $insert_backup = "INSERT into backup(backup_file) VALUES('$backup')";
                $backup_result = $conn->query($insert_backup);
                
                if ($backup_result) {
                    debugLog("Backup record inserted successfully");
                } else {
                    debugLog("Failed to insert backup record: " . mysqli_error($conn));
                }
                
                if ($admin_role == "admin") {
                    $_SESSION['admin_email'] = $user_email;
                    debugLog("Admin login successful after backup - redirecting to index.php");
                    echo json_encode(['success' => true, 'message' => 'Login successful', 'redirect' => 'index.php']);
                } else {
                    $_SESSION['admin_email'] = $user_email;
                    debugLog("User login successful after backup - redirecting to post_view.php");
                    echo json_encode(['success' => true, 'message' => 'Login successful', 'redirect' => 'post_view.php']);
                }
                
            } else {
                debugLog("Error fetching tables: " . $conn->error);
                echo json_encode(['success' => false, 'message' => 'Error fetching database tables']);
            }
        }
    } else {
        debugLog("Invalid credentials - password mismatch");
        echo json_encode(['success' => false, 'message' => 'Invalid Login Credentials']);
    }
} else {
    debugLog("Email not found in database");
    echo json_encode(['success' => false, 'message' => 'Email Not Found']);
}

debugLog("Login process completed");
?>
