<?php
include 'dbconnect.php';

$query = "SELECT username, property_name, bid_amount FROM property_bid";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bidding Details</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <style>
        .container {
            padding-bottom: 10px;
        }
        td {
            text-align: center;
        }
        td img {
            height: 8rem;
            border-radius: 1.5rem;
            width: 50%;
        }
        table h4 {
            color: black !important;
        }
        @media (min-width: 600px) {
    .container {
        padding: 30px;
        font-size: 18px;
    }
}

@media (min-width: 900px) {
    .container {
        padding: 40px;
        font-size: 20px;
    }
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="3">
                                    <h2 class="text-center text-info m-0" style="color: black !important;">Bidding Details</h2>
                                </td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <th>Property Name</th>
                                <th>Bidding Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) {?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                                    <td><?php echo htmlspecialchars($row['property_name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['bid_amount']); ?></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
