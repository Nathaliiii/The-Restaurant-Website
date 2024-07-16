<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the oc restaurant"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['Name']) ? $_POST['Name'] : '';
$email = isset($_POST['Email']) ? $_POST['Email'] : '';
$number = isset($_POST['Number']) ? $_POST['Number'] : '';
$quantity = isset($_POST['Quantity']) ? $_POST['Quantity'] : '';
$order = isset($_POST['Your Order']) ? $_POST['Your Order'] : ''; 
$address = isset($_POST['Address']) ? $_POST['Address'] : '';

$sql = "INSERT INTO `order` (`Name`, `Email`, `Number`, `Quantity`, `Your Order`, `Address`)
        VALUES ('$name', '$email', '$number', '$quantity', '$order', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
