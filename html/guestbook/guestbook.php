<?php
// Connect to the SQLite database
$db = new SQLite3('guestbook.db');

// Create the table if it doesn't exist
$db->exec("CREATE TABLE IF NOT EXISTS guestbook (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    message TEXT,
    date TEXT
)");

// Insert the new guestbook entry
#if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $date = date('Y-m-d H:i:s');

    // Insert without sanitization, allowing potential XSS
    $stmt = $db->prepare("INSERT INTO guestbook (name, message, date) VALUES (:name, :message, :date)");
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':message', $message, SQLITE3_TEXT);
    $stmt->bindValue(':date', $date, SQLITE3_TEXT);
    $stmt->execute();

    // Redirect back to the guestbook page
    header('Location: index.php');
    exit();
#}
?>