<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

include 'header.inc';
?>

<h1>Welcome <?php echo $_SESSION['user']; ?>!</h1>

<p>You have successfully logged in.</p>

<?php include 'footer.inc'; ?>