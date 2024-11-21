<?php
// Create SQLite database and connect
$db = new SQLite3('users.db');

// Create the users table
$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    password TEXT NOT NULL
)");

// Insert sample users if the table is empty
$count = $db->querySingle("SELECT COUNT(*) FROM users");
if ($count == 0) {
    $db->exec("INSERT INTO users (username, password) VALUES 
        ('admin', 'buttcheeks'),
        ('john_doe', 'password123'),
        ('jane_doe', '12345'),
        ('user1', 'letmein'),
        ('user2', 'qwerty'),
        ('user3', '12345678'),
        ('user4', 'iloveyou'),
        ('user5', 'password'),
        ('user6', 'welcome'),
        ('user7', 'abc123'),
        ('user8', 'sunshine'),
        ('user9', 'princess'),
        ('user10', 'baseball')");
    echo "Database setup completed with sample users.";
} else {
    echo "Database already contains $count users.";
}
?>

