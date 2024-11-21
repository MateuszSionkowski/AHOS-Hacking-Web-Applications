<?php



// Database initialization
$db = new SQLite3('lab.db');

// Create users table if not exists
$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    password TEXT NOT NULL,
    email TEXT NOT NULL
)");

// Populate table with dummy data if empty
$count = $db->querySingle("SELECT COUNT(*) FROM users");
if ($count == 0) {
    $db->exec("INSERT INTO users (username, password, email) VALUES 
        ('alice', 'password123', 'alice@example.com'),
        ('bob', 'securepassword', 'bob@example.com'),
        ('charlie', 'mypassword', 'charlie@example.com')");
}

?>