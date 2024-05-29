<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Reservation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 50%;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        input[type="time"],
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="process1.php" method="post">
        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" required pattern="[a-zA-Z\s]+"><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required pattern="[0-9]{10}"><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="destination">Destination:</label><br>
        <select id="destination" name="destination" required>
            <option value="">Select a destination</option>
            <option value="Langkawi">Langkawi</option>
            <option value="Kuala Lumpur">Kuala Lumpur</option>
            <option value="Johor Bahru">Johor Bahru</option>
            <option value="Kuala Terengganu">Kuala Terengganu</option>
            <option value="Kota Kinabalu">Kota Kinabalu</option>
            <option value="Kuching">Kuching</option>
        </select><br>

        <label for="departure_date">Departure Date:</label><br>
        <input type="date" id="departure_date" name="departure_date" required><br>

        <label for="departure_time">Departure Time:</label><br>
        <input type="time" id="departure_time" name="departure_time" required><br>

        <label for="num_person">Number of Person:</label><br>
        <input type="number" id="num_person" name="num_person" required><br>

        <label for="services">Which service would you like to avail?</label><br>
        <input type="checkbox" id="services_1" name="services[]" value="Boarding" required>
        <label for="services_1">Boarding</label><br>
        <input type="checkbox" id="services_2" name="services[]" value="Fooding">
        <label for="services_2">Fooding</label><br>
        <input type="checkbox" id="services_3" name="services[]" value="Sight seeing">
        <label for="services_3">Sight seeing</label><br>

        <label for="coupon">Discount Coupon Code:</label><br>
        <input type="text" id="coupon" name="coupon"><br>

        <label for="terms">I accept the Terms and Conditions:</label><br>
        <input type="checkbox" id="terms" name="terms" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>