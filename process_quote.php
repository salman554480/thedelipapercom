<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Validate required fields
$required_fields = ['name', 'email', 'contact', 'standard_size', 'printing', 'paper', 'quantity'];
foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        echo json_encode(['success' => false, 'message' => "Field '$field' is required"]);
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

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Handle file upload if present
$uploaded_file_url = '';
if (!empty($_FILES['logo_file']['name'])) {
    $upload_dir = "uploads/";
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
        echo json_encode(['success' => false, 'message' => 'Invalid file type. Allowed: JPG, PNG, GIF, PDF, AI, EPS, SVG']);
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
$message .= "Uploaded Logo: " . ($uploaded_file_url ? $uploaded_file_url : 'No file uploaded') . "\n";
$message .= "Custom Info: $custom_info\n";
$message .= "\nSubmitted on: " . date('Y-m-d H:i:s') . "\n";

// Email configuration
$to = "adeeldevil444@gmail.com"; // Change this to your email
$subject = "New Quote Request from $name";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$mail_sent = mail($to, $subject, $message, $headers);

if ($mail_sent) {
    // Log the submission (optional)
    $log_entry = date('Y-m-d H:i:s') . " - Quote request from $name ($email)\n";
    file_put_contents('quote_submissions.log', $log_entry, FILE_APPEND | LOCK_EX);
    
    echo json_encode([
        'success' => true, 
        'message' => 'Thank you! Your quote request has been submitted successfully. We will contact you soon.'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Sorry, there was an error sending your request. Please try again or contact us directly.'
    ]);
}
?>
