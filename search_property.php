<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $propertyType = $_POST['pt'];
    $budget = $_POST['budget'];
    $location = $_POST['location'];

    $query = "SELECT * FROM property_details WHERE property_type = ? AND price <= ? AND locationn = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sis", $propertyType, $budget, $location);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>Property Name: " . htmlspecialchars($row['property_name']) . "</div>";
            echo "<div>Price: $" . htmlspecialchars($row['price']) . "</div>";
            echo "<div>Location: " . htmlspecialchars($row['locationn']) . "</div>";
            echo "<div><a href='" . htmlspecialchars($row['source_link']) . "'>View Property</a></div>";
        }
    } else {
        echo "<script>alert('No properties found matching your criteria.');</script>";
    }

    $stmt->close();
}
$conn->close();

?>