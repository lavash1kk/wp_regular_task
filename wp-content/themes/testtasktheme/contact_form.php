<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    $recipient = filter_var(trim($_POST["to_email"]), FILTER_SANITIZE_EMAIL);;

    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo "Fill in all fields.";
        exit;
    }

    $subject = "Message from the form - $name";
    $email_headers = "From: $name <$email>";
    $email_content = "Name: $name\n" . "Email: $email\n\n" . "Message:\n$message\n";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        header("Location: /?status=success#contact-form");
        echo "Your message has been sent. <br/>
        $email_content";
    } else {
        http_response_code(500);
        header("Location: /?status=error#contact-form");
        echo "The letter was not sent.";
    }
} else {
    http_response_code(403);
    echo "POST request only.";
}
get_footer();