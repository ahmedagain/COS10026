<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>

<?php

require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['model'])) {

    $model = mysqli_real_escape_string($conn, $_GET['model']);

    $sql = "SELECT * FROM cars WHERE model LIKE '%$model%'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<table border='1' cellpadding='5'>";

        echo "<tr>";
        echo "<th>ID</th>";
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

        echo "No matching cars found.";
    }

} else {

    echo "Please enter a model to search.";
}

mysqli_close($conn);

?>

</body>
</html>