<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation System</title>
    <link rel="stylesheet" href="reservation.css">
</head>
<body>
    <h1>Reservation Form</h1>
    <form action="process_reservation.php" method="post">
        
        <label for="name">Name:</label>
        <input type="Varchar" name="name" required><br>

        <label for="email">Email:</label>
        <input type="varchar" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="int" name="phone" required><br>

        <label for="date">Date:</label>
        <input type="date" name="date" required><br>

        <label for="time">Time:</label>
        <input type="time" name="time" required><br>

        <label for="guests">Number of Guests:</label>
        <input type="number" name="guests" required><br>


        <input type="submit" value="Submit Reservation">
    </form>
</body>
</html>
