<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com";  // Replace with your real email
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}
if (strlen($message) < 10) {
    die("Message too short.");
}
if (!empty($_POST['website'])) {
    die("Spam detected.");
}
if (!empty($_POST['website'])) {
    die("Spam detected.");
}
if(mail($to, $subject, $body, $headers)) {
    echo "<h2>✅ Thank you, $name! Your message has been sent successfully.</h2>";
    echo "<p>I’ll get back to you soon.</p>";
} else {
    echo "<h2>❌ Sorry, there was an error sending your message.</h2>";
}

?>

