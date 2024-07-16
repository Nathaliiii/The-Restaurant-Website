<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the oc restaurant";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = $_POST["username"];
    $password_input = $_POST["password"];

    
    login($username_input, $password_input, $conn);
}

function login($username, $password, $conn) {
    $stmt = $conn->prepare("SELECT * FROM `user login` WHERE Username=? AND Password=?");
    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful! Welcome, $username";
    } else {
        echo "Incorrect username or password. Please try again.";
    }

    $stmt->close();
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="login.css">
</head>
</head>
<body>

    <h2>Login Form</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="Username">Username:</label>
        <input type="varchar" name="username" required=""><br>

        <label for="Password">Password:</label>
        <input type="password" name="password" required=""><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>
