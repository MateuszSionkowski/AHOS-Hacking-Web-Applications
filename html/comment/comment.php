<?php
// Connect to the SQLite database
$db = new SQLite3('comment.db');

// Create the table if it doesn't exist
$db->exec("CREATE TABLE IF NOT EXISTS comment (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    message TEXT,
    date TEXT
)");

// Insert the new comment entry
#if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $date = date('Y-m-d H:i:s');

    // Insert without sanitization, allowing potential XSS
    $stmt = $db->prepare("INSERT INTO comment (name, message, date) VALUES (:name, :message, :date)");
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':message', $message, SQLITE3_TEXT);
    $stmt->bindValue(':date', $date, SQLITE3_TEXT);
    $stmt->execute();

    // Redirect back to the comment page
    header('Location: index.php');
    exit();
#}
?>