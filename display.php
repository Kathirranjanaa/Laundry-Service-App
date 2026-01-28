<?php 
// Connect to the SQLite database
$db = new SQLite3('laundry.db');

// Query to fetch all records
$query = "SELECT * FROM bookings";
$result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored Laundry Bookings</title>
</head>
<body>
    <h1>Laundry Booking Records</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>Laundry Shop</th>
            <th>Services</th>
            <th>Notes</th>
        </tr>

        <?php while ($row = $result->fetchArray()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['number']); ?></td>
                <td><?php echo htmlspecialchars($row['address']); ?></td>
                <td><?php echo htmlspecialchars($row['pincode']); ?></td>
                <td><?php echo htmlspecialchars($row['laundryShop']); ?></td> <!-- Display Laundry Shop -->
                <td><?php echo htmlspecialchars($row['services']); ?></td> <!-- Display Services -->
                <td><?php echo htmlspecialchars($row['notes']); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>