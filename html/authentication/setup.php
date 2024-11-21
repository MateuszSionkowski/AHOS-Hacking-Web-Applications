<?php
// Setup SQLite database
$db = new SQLite3('challenge.db');

// Create a 'users' table
$db->exec("DROP TABLE IF EXISTS users");
$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");

// Insert sample user data
$password_hash = md5('password123'); // Store password as an MD5 hash
$db->exec("INSERT INTO users (username, password) VALUES ('admin', '$password_hash')");
$db->exec("INSERT INTO users (username, password) VALUES ('thomas', '$password_hash')");


echo "Database setup complete.";
?>
