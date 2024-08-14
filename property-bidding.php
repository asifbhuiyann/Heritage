<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $property_name = $_POST['property_name'];
    $bid_amount = $_POST['bid_amount'];

    $sql = "INSERT INTO property_bid (username, property_name, bid_amount) VALUES ('$username', '$property_name', '$bid_amount')";

    if ($conn->query($sql) === true) {
        echo "<script>alert('Bid submitted successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Bid</title>
    <link rel="stylesheet" href="property-bidding.css">
</head>
<body>
    <div class="container">
        <h1>Bid on Property</h1>
        <form id="bidForm" action="property-bidding.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="property_name">Property Name:</label>
            <input type="text" id="property_name" name="property_name" required>

            <label for="bid_amount">Bid Amount:</label>
            <input type="number" id="bid_amount" name="bid_amount" step="0.01" required>

            <button type="submit">Submit Bid</button>
        </form>
    </div>
</body>
</html>
