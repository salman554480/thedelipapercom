<?php
// Only set JSON headers for AJAX requests
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');
}

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        http_response_code(405);
        echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    } else {
        echo "Method not allowed";
    }
    exit;
}

// Get input data - handle both JSON and form data
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // AJAX request - check if it's FormData or JSON
    $content_type = $_SERVER['CONTENT_TYPE'] ?? '';
    if (strpos($content_type, 'multipart/form-data') !== false) {
        // FormData submission (with file uploads)
        $input = $_POST;
        error_log("AJAX FormData received: " . print_r($input, true));
        error_log("Files received: " . print_r($_FILES, true));
    } else {
        // JSON submission
        $raw_input = file_get_contents('php://input');
        $input = json_decode($raw_input, true);
        error_log("AJAX JSON received: " . $raw_input);
        error_log("Decoded input: " . print_r($input, true));
    }
} else {
    // Regular form submission
    $input = $_POST;
}

// Debug: Log input data
error_log("Input data: " . print_r($input, true));
error_log("Form submitted from URL: " . ($input['current_url'] ?? 'Not provided'));

// Validate required fields
$required_fields = ['name', 'email', 'contact', 'standard_size', 'printing', 'paper', 'quantity'];
foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        error_log("Missing field: $field");
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode(['success' => false, 'message' => "Field '$field' is required"]);
        } else {
            echo "Field '$field' is required";
        }
        exit;
    }
}

// Sanitize input data
$name = htmlspecialchars(trim($input['name']));
$email = filter_var(trim($input['email']), FILTER_SANITIZE_EMAIL);
$contact = htmlspecialchars(trim($input['contact']));
$standard_size = htmlspecialchars(trim($input['standard_size']));
$printing = htmlspecialchars(trim($input['printing']));
$paper = htmlspecialchars(trim($input['paper']));
$quantity = htmlspecialchars(trim($input['quantity']));
$custom_info = htmlspecialchars(trim($input['custom_info'] ?? ''));
$current_url = htmlspecialchars(trim($input['current_url'] ?? ''));

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    } else {
        echo "Invalid email address";
    }
    exit;
}

// Handle file upload if present
$uploaded_file_url = '';
if (!empty($_FILES['logo_file']['name'])) {
    $upload_dir = "assets/images/uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    $file_extension = strtolower(pathinfo($_FILES['logo_file']['name'], PATHINFO_EXTENSION));
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'ai', 'eps', 'svg'];
    
    if (in_array($file_extension, $allowed_extensions)) {
        $file_name = time() . "_" . basename($_FILES['logo_file']['name']);
        $file_path = $upload_dir . $file_name;
        
        if (move_uploaded_file($_FILES['logo_file']['tmp_name'], $file_path)) {
            $uploaded_file_url = $file_path;
        }
    } else {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode(['success' => false, 'message' => 'Invalid file type. Allowed: JPG, PNG, GIF, PDF, AI, EPS, SVG']);
        } else {
            echo "Invalid file type. Allowed: JPG, PNG, GIF, PDF, AI, EPS, SVG";
        }
        exit;
    }
}

// Prepare email content
$message = "=== NEW QUOTE REQUEST ===\n\n";
$message .= "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Contact No.: $contact\n";
$message .= "Standard Size: $standard_size\n";
$message .= "Printing: $printing\n";
$message .= "Paper: $paper\n";
$message .= "Quantity: $quantity\n";
$message .= "Custom Info: $custom_info\n";
$message .= "Uploaded Logo: " . ($uploaded_file_url ? 'File attached to this email' : 'No file uploaded') . "\n";
$message .= "\nForm submitted from: $current_url\n";
$message .= "\nSubmitted on: " . date('Y-m-d H:i:s') . "\n";

// Email configuration
$to = "sales@thedelipaper.com";
$subject = "New Quote Request from $name";
$boundary = md5(time());

// Email headers with multipart support
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// Email body
$email_body = "--$boundary\r\n";
$email_body .= "Content-Type: text/plain; charset=UTF-8\r\n";
$email_body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$email_body .= $message . "\r\n";

// Attach file if uploaded
if ($uploaded_file_url && file_exists($uploaded_file_url)) {
    $file_content = file_get_contents($uploaded_file_url);
    $file_name = basename($uploaded_file_url);
    $file_type = mime_content_type($uploaded_file_url);
    
    $email_body .= "--$boundary\r\n";
    $email_body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
    $email_body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
    $email_body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $email_body .= chunk_split(base64_encode($file_content)) . "\r\n";
}

$email_body .= "--$boundary--\r\n";

// Send email
$mail_sent = mail($to, $subject, $email_body, $headers);

if ($mail_sent) {
    // Log the submission (optional)
    $log_entry = date('Y-m-d H:i:s') . " - Quote request from $name ($email)\n";
    file_put_contents('quote_submissions.log', $log_entry, FILE_APPEND | LOCK_EX);
    
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        echo json_encode([
            'success' => true, 
            'message' => 'Thank you! Your quote request has been submitted successfully. We will contact you soon.'
        ]);
    } else {
        echo "Thank you! Your quote request has been submitted successfully. We will contact you soon.";
    }
} else {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        echo json_encode([
            'success' => false, 
            'message' => 'Sorry, there was an error sending your request. Please try again or contact us directly.'
        ]);
    } else {
        echo "Sorry, there was an error sending your request. Please try again or contact us directly.";
    }
}
?>
