<?php
session_start();
require_once('parts/db.php');

// Set JSON header for AJAX response
header('Content-Type: application/json');

// Check if request is AJAX
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || 
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

// Check if user is logged in
if (!isset($_SESSION['admin_email'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized access']);
    exit;
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Validate input
if (!isset($input['post_id']) || !isset($input['post_status'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
    exit;
}

$post_id = intval($input['post_id']);
$post_status = trim($input['post_status']);

// Validate post_status
if (!in_array($post_status, ['publish', 'draft'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid status value']);
    exit;
}

// Validate post_id
if ($post_id <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid post ID']);
    exit;
}

try {
    // Check if post exists
    $check_query = "SELECT post_id, post_title FROM post WHERE post_id = '$post_id'";
    $check_result = mysqli_query($conn, $check_query);
    
    if (!$check_result || mysqli_num_rows($check_result) == 0) {
        echo json_encode(['success' => false, 'message' => 'Post not found']);
        exit;
    }
    
    $post_data = mysqli_fetch_assoc($check_result);
    
    // Update post status
    $update_query = "UPDATE post SET post_status = '$post_status' WHERE post_id = '$post_id'";
    $update_result = mysqli_query($conn, $update_query);
    
    if ($update_result) {
        // Log the action (if admin_id is available)
        $log_msg = "Updated post status to '$post_status' for post ID: $post_id (Title: " . $post_data['post_title'] . ")";
        
        // Get admin_id from session email
        $admin_id = 1; // Default value
        if (isset($_SESSION['admin_email'])) {
            $admin_email = $_SESSION['admin_email'];
            $admin_query = "SELECT admin_id FROM admin WHERE admin_email = '$admin_email'";
            $admin_result = mysqli_query($conn, $admin_query);
            if ($admin_result && mysqli_num_rows($admin_result) > 0) {
                $admin_row = mysqli_fetch_assoc($admin_result);
                $admin_id = $admin_row['admin_id'];
            }
        }
        
        $insert_log = "INSERT INTO log (log_msg, admin_id) VALUES ('$log_msg', '$admin_id')";
        mysqli_query($conn, $insert_log);
        
        $status_text = ucfirst($post_status);
        echo json_encode([
            'success' => true, 
            'message' => "Post status updated to '$status_text' successfully",
            'post_id' => $post_id,
            'new_status' => $post_status
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update post status']);
    }
    
} catch (Exception $e) {
    error_log("Post status update error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'An error occurred while updating the post status']);
}

mysqli_close($conn);
?>
