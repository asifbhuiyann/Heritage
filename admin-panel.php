<?php
include 'dbconnect.php';

$query = "SELECT username, property_name, bid_amount FROM property_bid";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$countQuery = "SELECT COUNT(*) AS total_users FROM users";
$countResult = $conn->query($countQuery);

if ($countResult && $countRow = $countResult->fetch_assoc()) {
    $totalUsers = $countRow['total_users'];
} else {
    $totalUsers = 0;
}

$query = "SELECT * FROM property_bid";
$result = $conn->query($query);

if ($result) {
    $totalBidders = $result->num_rows;
} else {
    $totalBidders = 0;
    echo "No results for the current user";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff !important;
            padding: 10px;
            text-align: center;
        }

        header a {
            text-decoration: none;
            color: white;
        }

        nav {
            background-color: #555;
            color: #fff;
            padding: 10px;
            text-align: center;
            width: 200px;
            position: fixed;
            height: 100%;
        }

        nav a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 0 5px;
        }

        nav a:hover {
            transform: translateY(-5px);
            font-size: 20px;
            color: tomato;
        }

        section {
            margin-left: 220px;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .dashboard p {
            color: black;
            text-align: center;
            font-size: 30px;
            text-decoration: none;
            font-weight: bold;
        }

        p {
            color: black;
            text-align: center;
            font-size: 30px;
            text-decoration: none;
        }

        .total-products p {
            text-decoration: none;
        }

        .red-container {
            background-color: red;
            padding: 20px;
            margin-top: 20px;
            margin-left: 270px;
            width: 400px;
            border-radius: 20px;
        }

        .red-container p {
            text-decoration: none;
            color: white;
        }

        .green-container {
            background-color: green;
            padding: 20px;
            margin-top: 20px;
            margin-left: 270px;
            width: 400px;
            border-radius: 20px;
        }

        .green-container p {
            text-decoration: none;
            color: white;
        }

        .yellow-container {
            background-color: violet;
            padding: 20px;
            margin-top: 20px;
            margin-left: 270px;
            width: 400px;
            border-radius: 20px;
        }

        .yellow-container p {
            text-decoration: none;
            color: white;
        }

        @media (min-width: 600px) {
            body {
                padding: 30px;
                font-size: 18px;
            }
        }

        @media (min-width: 900px) {
            body {
                padding: 40px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

    <header>
        <a href="admin-panel.php">
            <h1>Admin Panel</h1>
        </a>
    </header>

    <nav>
        <a href="users.php">Users</a>
        <a href="showing-bid.php">Bidding Details</a>
    </nav>
    <div class="dashboard">
        <p style="text-align: center;">DASHBOARD</p>
    </div>

    <div class="green-container">
        <p>Total Number of Users: <?php echo $totalUsers; ?></p>
    </div>

    <div class="yellow-container">
        <p>Total Number of Bidders: <?php echo $totalBidders; ?></p>
    </div>
</body>

</html>