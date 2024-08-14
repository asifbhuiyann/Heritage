<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['img_src']) && $_FILES['img_src']['error'] == 0) {
        $img_src = $_FILES['img_src']['name'];
        $item_name = $_POST['item_name'];
        $price = $_POST['price'];
        $source = $_POST['source'];
        $p_type = $_POST['p_type'];
        $location = $_POST['location'];

        $stmt = $conn->prepare("INSERT INTO property_details (img, property_name, price, source_link, property_type, locationn) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdsss", $img_src, $item_name, $price, $source, $p_type, $location);

        if ($stmt->execute()) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('File upload error');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Posting</title>
    <link rel="stylesheet" href="post-property.css">
</head>
<body>
    <div class="form-container">
        <h2>Post a Property</h2>
        <form action="post-property.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img_src" placeholder="Image URL" required>
            <input type="text" name="item_name" placeholder="Item Name" required>
            <input type="number" name="price" placeholder="Price" required>
            <input type="text" name="source" placeholder="Link" required>
            <input type="text" name="p_type" placeholder="Property Type" required>
            <input type="text" name="location" placeholder="Location" required>
            <input type="submit" value="Post">
        </form>
    </div>
</body>
</html>
