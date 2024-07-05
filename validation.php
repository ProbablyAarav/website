<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $dob = isset($_POST['dob']) ? trim($_POST['dob']) : '';

    if ($username && $password && $email) {
        $line = "$username,$password,$email,$dob\n";
        file_put_contents('login.csv', $line, FILE_APPEND);
        echo "Sign-up successful!";
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request method.";
}
