<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "Ahmed" && $password == "106522034") {

    $_SESSION['user'] = $username;

    header("Location: welcome.php");
    exit();

} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>