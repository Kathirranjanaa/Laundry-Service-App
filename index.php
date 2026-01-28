<?php
session_start(); // Start the session

// Connect to the SQLite database and handle errors
try {
    $db = new SQLite3('laundry.db');

    // Add the busy timeout to prevent locking issues
    $db->busyTimeout(5000); // Timeout of 5000 ms (5 seconds)

    // Create the 'bookings' table with the required columns if it doesn't exist
    $db->exec("CREATE TABLE IF NOT EXISTS bookings (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT,
        email TEXT,
        number TEXT,
        address TEXT,
        pincode TEXT,
        laundryShop TEXT,
        services TEXT,
        notes TEXT
    )");
} catch (Exception $e) {
    // Handle database errors
    echo "Database error: " . $e->getMessage();
    exit(); // Stop further execution if there's a database error
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $address = htmlspecialchars($_POST['address']);
    $pincode = htmlspecialchars($_POST['pincode']);
    $laundryShop = htmlspecialchars($_POST['laundryShop']);
    $notes = htmlspecialchars($_POST['notes']); // Collect notes from the form

    // Handle multiple selections for services
    if (isset($_POST['services']) && is_array($_POST['services'])) {
        $servicesArray = array_map('htmlspecialchars', $_POST['services']);
        $services = implode(", ", $servicesArray);
    } else {
        $services = '';
    }

    // Server-side validation for phone number
    if (!preg_match('/^[0-9]{10}$/', $number)) {
        $_SESSION['error'] = "Invalid phone number. It must be exactly 10 digits.";
        header("Location: index.php");
        exit();
    }

    // Server-side validation for email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email address.";
        header("Location: index.php");
        exit();
    }

    // Server-side validation for pincode
    if (!preg_match('/^[0-9]{6}$/', $pincode)) {
        $_SESSION['error'] = "Invalid pincode. It must be exactly 6 digits.";
        header("Location: index.php");
        exit();
    }

    // Server-side validation for laundry shop selection
    if (empty($laundryShop)) {
        $_SESSION['error'] = "Please select a laundry shop.";
        header("Location: index.php");
        exit();
    }

    // Server-side validation for services selection
    if (empty($services)) {
        $_SESSION['error'] = "Please select at least one service.";
        header("Location: index.php");
        exit();
    }

    // Insert data into the database if all validations pass
    $query = "INSERT INTO bookings (name, email, number, address, pincode, laundryShop, services, notes) 
              VALUES (:name, :email, :number, :address, :pincode, :laundryShop, :services, :notes)";
    $stmt = $db->prepare($query);

    // Bind parameters
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':number', $number, SQLITE3_TEXT);
    $stmt->bindValue(':address', $address, SQLITE3_TEXT);
    $stmt->bindValue(':pincode', $pincode, SQLITE3_TEXT);
    $stmt->bindValue(':laundryShop', $laundryShop, SQLITE3_TEXT);
    $stmt->bindValue(':services', $services, SQLITE3_TEXT);
    $stmt->bindValue(':notes', $notes, SQLITE3_TEXT); // Bind notes

    // Execute the query
    $result = $stmt->execute();
    
    // Check if data was inserted successfully
    if ($result) {
        echo "Data inserted successfully!";
        header("Location: display.php");
        exit();
    } else {
        echo "Error inserting data: " . $db->lastErrorMsg(); // Print error message for debugging
        exit();
    }
}
?>
