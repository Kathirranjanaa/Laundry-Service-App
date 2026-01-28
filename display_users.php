<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Connect to the SQLite database
    $db = new SQLite3('laundry.db');


    // Fetch all users
    $result = $db->query("SELECT id, name, email, phone FROM users");

    if (!$result) {
        // If $result is false, the query failed
        throw new Exception("Error executing query: " . $db->lastErrorMsg());
    }

    // Check if there are users in the database
    if ($result->fetchArray()) {
        echo "<h1>Registered Users</h1>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>";

        // Reset the result pointer and fetch the data again
        $result = $db->query("SELECT id, name, email, phone FROM users");

        // Loop through each user and display their details
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['id']) . "</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['phone']) . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
