<?php
session_start();

if (isset($_GET['logout'])) {
    $_SESSION['logged_in'] = false;
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<h1>Welcome to Dashboard</h1>
<p>Hello, <?= $_SESSION['user_name']; ?>!</p>
<a href="dashboard.php?logout=true">Logout</a>
