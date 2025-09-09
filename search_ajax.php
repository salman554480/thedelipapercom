<?php
// search_ajax.php
header('Content-Type: application/json');

require_once "parts/db.php"; // your db connection

if (!isset($_GET['q'])) {
    echo json_encode([]);
    exit;
}

$search_term = mysqli_real_escape_string($conn, $_GET['q']);

$query = "
    SELECT post_title, post_url, post_date
    FROM post
    WHERE post_status = 'publish' 
      AND post_title LIKE '%$search_term%'
    ORDER BY post_date DESC
    LIMIT 10
";

$result = mysqli_query($conn, $query);

$results = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $results[] = [
            'post_title' => htmlspecialchars($row['post_title']),
            'post_url' => htmlspecialchars($row['post_url']),
            'post_date' => date("F j, Y", strtotime($row['post_date']))
        ];
    }
}

echo json_encode($results);
