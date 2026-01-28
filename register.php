<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Connect to the SQLite database
    $db = new SQLite3('laundry.db');

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        // Check if the email already exists
        $checkQuery = $db->prepare("SELECT * FROM users WHERE email = :email");
        $checkQuery->bindValue(':email', $email, SQLITE3_TEXT);
        $result = $checkQuery->execute();

        if ($result->fetchArray()) {
            // Email already exists
            echo json_encode(['status' => 'error', 'message' => 'Error: Email already exists!']);
            exit();
        }

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the SQL query to insert the data into the users table
        $query = $db->prepare("INSERT INTO users (name, email, password, phone) VALUES (:name, :email, :password, :phone)");
        $query->bindValue(':name', $name, SQLITE3_TEXT);
        $query->bindValue(':email', $email, SQLITE3_TEXT);
        $query->bindValue(':password', $hashed_password, SQLITE3_TEXT);
        $query->bindValue(':phone', $phone, SQLITE3_TEXT);

        // Execute the query
        if ($query->execute()) {
            // Return success message
            echo json_encode(['status' => 'success', 'message' => 'Registration successful!']);
        } else {
            // Return error message
            echo json_encode(['status' => 'error', 'message' => 'Error: ' . $db->lastErrorMsg()]);
        }
    }
} catch (Exception $e) {
    // Return exception message
    echo json_encode(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()]);
}
?>
