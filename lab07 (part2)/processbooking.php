<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php
if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    echo "<p>Welcome " . $_POST['firstname'] . " " . $_POST['lastname'] . " !</p>";
}

$trip = "";

if (isset($_POST['accom'])) {
    $trip .= "Accommodation ";
}
if (isset($_POST['4day'])) {
    $trip .= "and Four-day tour ";
}
if (isset($_POST['10day'])) {
    $trip .= "and Ten-day tour ";
}

if ($trip != "") {
    echo "<p>You are now booked on the $trip</p>";
}

if (isset($_POST['species'])) {
    echo "<p>Species: " . $_POST['species'] . "</p>";
}

if (isset($_POST['age'])) {
    echo "<p>Age: " . $_POST['age'] . "</p>";
}

if (isset($_POST['food'])) {
    echo "<p>Meal Preference: " . $_POST['food'] . "</p>";
}

if (isset($_POST['partysize'])) {
    echo "<p>Number of travellers: " . $_POST['partysize'] . "</p>";
}
?>

</body>
</html>