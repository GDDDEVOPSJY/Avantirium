<?php

// print_r($_SERVER);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: " . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/page-login.html");

    

} else {
    header("Location: ". rtrim(dirname($_SERVER['PHP_SELF']), '/\\') ."/page-login.html");
    exit;
}

?>