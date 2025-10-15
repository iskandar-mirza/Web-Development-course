<?php


$registeredUsers = [];

if ($_POST) {
    $msg = registerUser($_POST['name'], $_POST['email'], $_POST['password']);
    echo "<p>$msg</p>";
    echo "<br>";
}




function registerUser($name, $email, $password) {
    global $registeredUsers;
    
    foreach ($registeredUsers as $user) {
        if ($user['email'] === $email) {
            return "Registration failed: Email already registered.";
        }
    }

    $registeredUsers[] = [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ];

    return "Registration successful for $name!";
}


function loginUser($email, $password) {
    global $registeredUsers; 

    foreach ($registeredUsers as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            return "Login successful. Welcome back, " . $user['name'] . "!";
        }
    }
    return "Login failed: Invalid email or password.";
}

function totalUsers() {
    global $registeredUsers;
    return sizeof($registeredUsers);
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<p>DEMO:</p>";
echo registerUser("Abdullah", "abdullah@example.com", "12345") . "<br>";
echo registerUser("Babul", "babul@example.com", "password") . "<br>";
echo registerUser("Abdullah", "abdullah@example.com", "12345") . "<br>";

echo "<br>";

echo loginUser("abdullah@example.com", "12345") . "<br>";
echo loginUser("babul@example.com", "wrongpass") . "<br>";

echo "<br>Total Registered Users: " . totalUsers();
?>

