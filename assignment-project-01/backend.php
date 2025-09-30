<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$action = $_POST['action'] ?? '';

if ($action === "register") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] === $email) {
            die("User already registered! <a href='login.php'>Login here</a>");
        }
    }

    $_SESSION['users'][] = [
        "name" => $name,
        "email" => $email,
        "password" => $password
    ];

    echo "Registered successfully! <a href='login.php'>Login here</a>";

} elseif ($action === "login") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $found = false;
    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $found = true;
            $_SESSION['logged_in'] = true;
            $_SESSION['user_name'] = $user['name'];
            break;
        }
    }

    if ($found) {
        echo "Welcome, you are logged in! <a href='dashboard.php'>Go to the Dashboard</a>";
    } else {
        echo "Invalid email or password!";
    }
}
?>
