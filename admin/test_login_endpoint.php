<?php
// Simple test to verify login_ajax.php is accessible
echo "Login AJAX endpoint is accessible!<br>";
echo "Current time: " . date('Y-m-d H:i:s') . "<br>";
echo "POST method available: " . ($_SERVER['REQUEST_METHOD'] === 'POST' ? 'Yes' : 'No') . "<br>";
echo "Session started: " . (session_status() === PHP_SESSION_ACTIVE ? 'Yes' : 'No') . "<br>";

// Test database connection
require_once('parts/db.php');
if ($conn) {
    echo "Database connection: Success<br>";
} else {
    echo "Database connection: Failed<br>";
}
?>
