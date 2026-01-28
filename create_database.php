<?php
try {
    // Explicitly check and delete the existing database file before creating a new one
    $db_file = 'laundry.db';
    if (file_exists($db_file)) {
        unlink($db_file);  // Delete the existing database file if it's corrupted
    }

    // Create a new SQLite3 database
    $db = new SQLite3($db_file);

    // Create the bookings table
    $query = "CREATE TABLE IF NOT EXISTS bookings (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        number TEXT NOT NULL,
        address TEXT NOT NULL,
        pincode TEXT NOT NULL,
        notes TEXT
    )";

    // Execute the query
    if ($db->exec($query)) {
        echo "Database and table created successfully!";
    } else {
        echo "Error creating table: " . $db->lastErrorMsg();
    }

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
