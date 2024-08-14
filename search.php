<?php
include 'dbconnect.php';

$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "SELECT img, property_name, price, source_link, property_type, location FROM property_details WHERE property_name LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $query);
    $output = '<ul class="list-unstyled">';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $img_src = $row["img"];
            $item_name = $row["property_name"];
            $price = $row["price"];
            $source = $row["source_link"];
            $p_type = $row["property_type"];
            $location = $row["location"];
            $output .= '<li>
                            <img src="' . $img_src . '" alt="' . $item_name . '" style="width:100px;height:100px;">
                            <a href="' . $source . '">' . $item_name . '</a>
                            <p>Price: ' . $price . '</p>
                            <p>Type: ' . $p_type . '</p>
                            <p>Location: ' . $location . '</p>
                        </li>';
        }
    } else {
        $output .= '<li>Property Not Found</li>';
    }
    $output .= '</ul>';
    echo $output;
}
?>