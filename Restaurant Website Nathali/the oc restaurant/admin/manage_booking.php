<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the oc restaurant"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `customer name`, `booking time`, `booking date` FROM bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="manage_booking.css">
</head>
<body>
    
        <div class="dashboard-container">
            <h2>Manage Bookings</h2>

            <?php if ($result->num_rows > 0) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Booking Time</th>
                            <th>Booking Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row["customer name"]; ?></td>
                                <td><?php echo $row["booking time"]; ?></td>
                                <td><?php echo $row["booking date"]; ?></td>
                                <td>
                                    <a href="view_reservation.php" target="_blank">View Details</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>No bookings found.</p>
            <?php endif; ?>
        </div>
    </form>
</body>
</html>

<?php
$conn->close();
?>
