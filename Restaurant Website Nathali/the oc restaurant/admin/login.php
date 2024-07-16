<?php

$validUsername = "admin";
$validPassword = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $validUsername && $password == $validPassword) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Dashboard</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="manage_booking.php" method="post"> 
        <?php if (isset($error)) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="manage_booking.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
