<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1); // Display errors

try {
    // Connect to the SQLite database
    $db = new SQLite3('laundry.db');

    // Create the users table if it does not exist
    $query = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        phone TEXT NOT NULL
    )";

    // Execute the query
    if ($db->exec($query)) {
        echo "Users table created successfully!<br>";
    } else {
        echo "Error creating table: " . $db->lastErrorMsg() . "<br>";
    }

    // Check if the table was created successfully
    $result = $db->query("SELECT name FROM sqlite_master WHERE type='table' AND name='users';");
    if ($row = $result->fetchArray()) {
        echo "Table 'users' exists.<br>";
    } else {
        echo "Table 'users' does not exist.<br>";
    }

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>