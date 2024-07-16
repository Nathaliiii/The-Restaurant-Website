<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_reservation.css">
    <style>
        body {
    background-color: cornsilk; 
    margin: 0; 
    padding: 0; 
}

.container {
    max-width: 800px; 
    margin: 0 auto; 
    padding: 20px; 
}

form {
    margin-bottom: 10px; 
}

    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the oc restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$customers = [
    ["Hansini Godapala", "fdzhh@gmail.com", "6786786", "2023-12-28 12:47:00", 4],
    ["Kamala Perera", "Kamala@gmail.com", "771234569", "2023-12-30 16:00:00", 7],
    ["Gajan Fernando", "Gajan123@gmail.com", "712384576", "2024-01-02 18:55:00", 10],
    ["Wageeshaa Dissanayaka", "wagee@gmail.com", "779748265", "2024-01-06 15:00:00", 5]
];

foreach ($customers as $customer) {
    $name = $customer[0];
    $email = $customer[1];
    $phone = $customer[2];
    $date = $customer[3];
    $quantity = $customer[4];

    $sql = "INSERT INTO customers (name, email, phone, date, quantity) VALUES ('$name', '$email', '$phone', '$date', $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully for $name, $email, $phone, $date, $quantity ";
        echo "<form action='edit.php' method='post'>";
        echo "<input type='hidden' name='name' value='$name'>";
        echo "<input type='hidden' name='email' value='$email'>";
        echo "<input type='hidden' name='phone' value='$phone'>";
        echo "<input type='hidden' name='date' value='$date'>";
        echo "<input type='hidden' name='quantity' value='$quantity'>";
        echo "<input type='submit' value='Edit'>";
        echo "</form>";
        
        echo "<form action='delete.php' method='post'>";
        echo "<input type='hidden' name='name' value='$name'>";
        echo "<input type='submit' value='Delete'>";
        echo "</form>";
        
        echo "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>


