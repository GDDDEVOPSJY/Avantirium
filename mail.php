<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # FIX: Replace this email with recipient email
    $mail_to = "info@avantiriumsolutions.us";

    # Sender Data
    $dt = new DateTime();
    $datetime = $dt->format('Y-m-d H:i:s');
    $name = str_replace(array("\r", "\n"), array(" ", " "), strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) or !filter_var($email, FILTER_VALIDATE_EMAIL) or empty($message)) {
        # Set a 400 (bad request) response code and exit.
        http_response_code(400);
        die("<br>Please complete the form and try again.<br>
            <a href='contact.html'>Click here</a> to go back.");
    }

    # Mail Content
    $content = "Name: $name\n"
        . "Email: $email\n\n"
        . "Message:\n$message\n\n"
        . "($datetime)\n";

    # email headers.
    $headers = "From: $name <$email>";

    # Send the email.
    $success = mail($mail_to, "Avantarium: Message from $name", $content, $headers);

    if ($success) {
        # Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent. $mail_to";
    } else {
        # Set a 500 (internal server error) response code.
        http_response_code(500);
        echo
        "<h3>Oops! Something went wrong, we couldn't send your message.</h3>
            <a href='contact.php'>Click here</a> to go back.";
    }
} else {
    # Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.<br>
            <a href='contact.html'>Click here</a> to go back.";
}
