<?php

// print_r($_SERVER);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // header("Location: " . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/page-login.html");

    $email = $_POST["email"];
    $psw = $_POST["password"];

    $conn = new mysqli("localhost", "root", "bpsdoha");
    if ($conn-> connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    $conn->select_db("AVANTIRIUM");
    $conn->query("SELECT * FROM `USERS` WHERE `USER_EMAIL`=\'$email\'")



} else {
    header("Location: ". rtrim(dirname($_SERVER['PHP_SELF']), '/\\') ."/page-login.html");
    exit;
}

?>