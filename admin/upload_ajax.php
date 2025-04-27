<?php
include 'parts/db.php'; // your database connection file

if (isset($_FILES['image'])) {
    $uploadDir = 'assets/img/';
    $originalName = $_FILES['image']['name'];
    $originalName = strtolower(str_replace(' ', '_', $originalName)); // Replace spaces with underscores & convert to lowercase
    $fileSizeBytes = $_FILES['image']['size'];
    $tmpFile = $_FILES['image']['tmp_name'];

    $fileSizeKB = round($fileSizeBytes / 1024, 2);
    $fileExtension = pathinfo($originalName, PATHINFO_EXTENSION);
    $uniqueID = time() . '_' . rand(1000, 9999);
    $newFileName = $uniqueID . '_' . basename($originalName);
    $destination = $uploadDir . $newFileName;

    if (move_uploaded_file($tmpFile, $destination)) {
        $sql = "INSERT INTO image (image_name, image_size) VALUES ('$newFileName', '$fileSizeKB')";
        $run_add_image = mysqli_query($conn, $sql);
        if ($run_add_image === true) {
            echo "Uploaded";
        } else {
            echo "Database error";
        }
    } else {
        echo "Move failed";
    }
} else {
    echo "No file received";
}