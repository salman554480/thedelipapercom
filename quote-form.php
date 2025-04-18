<?php
require_once('admin/parts/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $admin_email = "admin@example.com";

    // Collect form data
    $size = $_POST['size'] ?? '';
    $type = $_POST['type'] ?? '';
    $color = $_POST['color'] ?? '';
    $customer_name = $_POST['customer_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $comments = $_POST['comments'] ?? '';

    $subject = "New Quote Request from $customer_name";

    // Handle file upload
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_tmp_path = $_FILES['file']['tmp_name'];
        $file_name = $_FILES['file']['name'];
        $file_attachment = chunk_split(base64_encode(file_get_contents($file_tmp_path)));
        $file_type = $_FILES['file']['type'];
        $boundary = md5("sanwebe");

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From: $email\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode(
            "Quote Request:\n\n" .
                "Size: $size\n" .
                "Type: $type\n" .
                "Color: $color\n" .
                "Customer Name: $customer_name\n" .
                "Email: $email\n" .
                "Contact: $contact\n" .
                "Comments: $comments\n"
        ));

        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= $file_attachment . "\r\n";
        $body .= "--$boundary--";
    } else {
        // No file uploaded
        $body = "Quote Request:\n\n";
        $body .= "Size: $size\n";
        $body .= "Type: $type\n";
        $body .= "Color: $color\n";
        $body .= "Customer Name: $customer_name\n";
        $body .= "Email: $email\n";
        $body .= "Contact: $contact\n";
        $body .= "Comments: $comments\n";

        $headers = "From: $email\r\n";
    }

    // Send the email
    if (mail($admin_email, $subject, $body, $headers)) {
        echo "Quote request sent successfully!";
    } else {
        echo "Failed to send the quote request.";
    }
}