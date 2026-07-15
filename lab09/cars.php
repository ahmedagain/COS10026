<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php
require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM cars";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<table>";
    echo "<tr>";
    echo "<th>Car ID</th>";
    echo "<th>Make</th>";
    echo "<th>Model</th>";
    echo "<th>Price</th>";
    echo "<th>Year</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "There are no cars to display.";
}

mysqli_close($conn);
?>

</body>
</html>