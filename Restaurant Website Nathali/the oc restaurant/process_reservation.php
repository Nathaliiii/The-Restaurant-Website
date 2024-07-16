<?php

include_once 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $reservationDate = $_POST["date"];
    $time = $_POST["time"];
    $guests= $_POST["guests"];

   
    $sql = "INSERT INTO reservation (name, email, phone, date, time, guests) VALUES ('$name', '$email', '$phone', '$reservationDate', '$time', '$guests')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
