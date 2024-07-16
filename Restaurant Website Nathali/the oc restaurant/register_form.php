<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    
    <form method="post" action="register.php">
        <label for="username">Username:</label>
        <input type="varchar" name="username" required><br>


        <label for="password">Password:</label>
        <input type="varchar" name="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
