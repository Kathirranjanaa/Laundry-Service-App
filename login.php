<?php
session_start(); // Start the session
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Connect to the SQLite database
    $db = new SQLite3('laundry.db');

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize input
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Prepare and execute the query to find the user
        $query = $db->prepare("SELECT * FROM users WHERE email = :email");
        $query->bindValue(':email', $email, SQLITE3_TEXT);
        $result = $query->execute();
        $user = $result->fetchArray(SQLITE3_ASSOC);

        // Verify if the user exists
        if (!$user) {
            // User not found
            echo "Error: This email is not registered. Please register first.";
            exit();
        }

        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
            ];
            header("Location: index.php"); // Redirect to booking page
            exit();
        } else {
            echo "Error: Invalid password.";
        }
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
