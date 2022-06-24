<?php

$user = "root";
$password = "";
$db = "register";
$conn = new mysqli($host, $user, $password);
$conn->select_db($db);

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from login where mailid='" . $email . "' and password='" . $password . "' limit 1";
}

$result = $conn->query($sql);
if ($result->num_rows == 1) {
    echo "You have sucessfully logged in";
    header("Location: " . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/index.php");
    exit();
} else {
    $msg = "<div class=\"alert alert-danger alert-dismissible show\" role=\"alert\">Inncorect username or password.</div>";
    echo $msg;

    exit();
}
