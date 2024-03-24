<?php
// In a real application, you'd have a database and check user credentials here.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform authentication here, for example, check against a database.
    // For simplicity, a basic check is done here.
    if ($username === "demo" && $password === "password") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>